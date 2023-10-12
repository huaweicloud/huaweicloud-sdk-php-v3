<?php

namespace HuaweiCloud\SDK\Bss\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class BssClient extends Client
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
        return new ClientBuilder(new BssClient(), "GlobalCredentials");
    }


    /**
     * 设置包年/包月资源自动续费
     *
     * 为防止资源到期被删除，客户可为长期使用的包年/包月资源开通自动续费。
     * 
     * 客户在费用中心开通自动续费请参见[这里](https://support.huaweicloud.com/usermanual-billing/renewals_topic_20000003.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   首先要客户成功支付包年/包月资源订单，才能进行自动续费的开通。
     * &gt;-   目前支持设置自动续费的包年/包月产品请参见[自动续费规则说明](https://support.huaweicloud.com/usermanual-billing/renewals_topic_20000002.html)。
     * &gt;-   在调用本接口前，您可以调用“[查询客户包年/包月资源列表](https://support.huaweicloud.com/api-oce/api_order_00021.html)”接口获取资源ID、资源过期时间以及资源过期后扣费策略等信息。
     * &gt;-   自动续费将于产品到期前7天的凌晨3:00开始扣款，请保持账户余额充足。若由于账户中余额不足等原因导致第一次未扣费成功，系统将每天凌晨3:00尝试进行一次扣款，直到扣款成功或保留产品资源的最后一天。
     * &gt;-   续费周期与原资源的购买周期一致。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function autoRenewalResources($request)
    {
        return $this->autoRenewalResourcesWithHttpInfo($request);
    }

    public function autoRenewalResourcesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\AutoRenewalResourcesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\AutoRenewalResourcesRequest');
    }

    /**
     * 取消包年/包月资源自动续费
     *
     * 客户设置自动续费后，还可以执行取消自动续费的操作。关闭自动续费后，资源到期将不会被自动续费。
     * 
     * 客户在费用中心取消包年/包月资源自动续费请参见[这里](https://support.huaweicloud.com/usermanual-billing/renewals_topic_20000005.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   前提是已经调用“[设置包年/包月资源自动续费](https://support.huaweicloud.com/api-oce/api_order_00022.html)”接口设置自动续费或在调用“[续订包年/包月资源](https://support.huaweicloud.com/api-oce/api_order_00018.html)”接口时设置到期策略为自动续订。
     * &gt;-   目前支持取消自动续费的包年/包月产品同支持自动续费的包年/包月产品。
     * &gt;-   在调用本接口前，您可以调用“[查询客户包年/包月资源列表](https://support.huaweicloud.com/api-bpconsole/api_order_00021.html)”接口获取资源ID、资源过期时间以及资源过期后扣费策略等信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelAutoRenewalResources($request)
    {
        return $this->cancelAutoRenewalResourcesWithHttpInfo($request);
    }

    public function cancelAutoRenewalResourcesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CancelAutoRenewalResourcesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CancelAutoRenewalResourcesRequest');
    }

    /**
     * 取消待支付订单
     *
     * 客户可以对待支付的订单进行取消操作。
     * 
     * 客户登录费用中心取消包年包月产品的待支付订单请单击[这里](https://support.huaweicloud.com/usermanual-billing/zh-cn_topic_0031465730.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;只有订单状态是“待支付”的时候，才能取消订单。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelCustomerOrder($request)
    {
        return $this->cancelCustomerOrderWithHttpInfo($request);
    }

    public function cancelCustomerOrderWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CancelCustomerOrderResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CancelCustomerOrderRequest');
    }

    /**
     * 退订包年/包月资源
     *
     * 客户购买包年/包月资源后，支持客户退订包年/包月实例。退订资源实例包括资源续费部分和当前正在使用的部分，退订后资源将无法使用。
     * 
     * 客户在费用中心退订已购买的包年包月资源请参见[这里](https://support.huaweicloud.com/usermanual-billing/zh-cn_topic_0083138805.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   首先要成功支付包年/包月产品，产生一条开通成功的包年/包月资源，才能进行退订。
     * &gt;-   调用接口后，如果某个主资源有对应的从资源，系统会将主资源和从资源一起退订，主资源的从资源信息可以通过调用[查询客户包年/包月资源列表](https://support.huaweicloud.com/api-oce/api_order_00021.html)接口获取。
     * &gt;-   注意：如ECS主机挂载新购的云硬盘，但此硬盘不是该ECS主资源的从资源，主从资源信息必须以调用[查询客户包年/包月资源列表](https://support.huaweicloud.com/api-oce/api_order_00021.html)接口获取的信息为准。
     * &gt;-   调用该接口后，您还可以调用“[查询退款订单的金额详情](查询退款订单的金额详情.md)”接口查询退订订单对应的金额来自哪些订单。
     * &gt;-   该接口支持5天无理由全额退订，具体规则请参见“[退订规则说明](https://support.huaweicloud.com/usermanual-billing/unsubscription_topic_20000081.html)”。
     * &gt;-   您正在退订使用中的资源，请仔细确认资源信息和退款信息。未放入回收站的资源退订后无法恢复，若您要保留资源，仅退订未使用的续费周期，请退订续费周期。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelResourcesSubscription($request)
    {
        return $this->cancelResourcesSubscriptionWithHttpInfo($request);
    }

    public function cancelResourcesSubscriptionWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CancelResourcesSubscriptionResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CancelResourcesSubscriptionRequest');
    }

    /**
     * 申请实名认证变更
     *
     * 客户可以进行实名认证变更申请。
     * 
     * 个人客户登录帐号中心通过实名认证变更为企业帐号的方式及流程请参见[这里](https://support.huaweicloud.com/usermanual-account/zh-cn_topic_0103532632.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeEnterpriseRealnameAuthentication($request)
    {
        return $this->changeEnterpriseRealnameAuthenticationWithHttpInfo($request);
    }

    public function changeEnterpriseRealnameAuthenticationWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ChangeEnterpriseRealnameAuthenticationResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ChangeEnterpriseRealnameAuthenticationRequest');
    }

    /**
     * 校验客户注册信息
     *
     * 客户注册时可检查客户的登录名称、手机号或者邮箱是否可以用于注册。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;针对校验手机号场景，目前仅支持校验手机号注册数量是否超过上限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkUserIdentity($request)
    {
        return $this->checkUserIdentityWithHttpInfo($request);
    }

    public function checkUserIdentityWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CheckUserIdentityResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CheckUserIdentityRequest');
    }

    /**
     * 企业主账号向企业子账号拨款优惠券
     *
     * 企业主账号在自建平台向企业子账号拨款优惠券。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   仅支持华为发放的测试类、商务类、活动类代金券。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function claimEnterpriseMultiAccountCoupon($request)
    {
        return $this->claimEnterpriseMultiAccountCouponWithHttpInfo($request);
    }

    public function claimEnterpriseMultiAccountCouponWithHttpInfo($request)
    {
        $resourcePath = '/v2/enterprises/multi-accounts/transfer-coupon';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ClaimEnterpriseMultiAccountCouponResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ClaimEnterpriseMultiAccountCouponRequest');
    }

    /**
     * 开通客户企业项目权限
     *
     * 客户在自建平台开通客户企业项目权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEnterpriseProjectAuth($request)
    {
        return $this->createEnterpriseProjectAuthWithHttpInfo($request);
    }

    public function createEnterpriseProjectAuthWithHttpInfo($request)
    {
        $resourcePath = '/v2/enterprises/enterprise-projects/authority';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreateEnterpriseProjectAuthResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreateEnterpriseProjectAuthRequest');
    }

    /**
     * 申请企业实名认证
     *
     * 企业客户可以进行企业实名认证申请。
     * 
     * 客户登录帐号中心进行企业实名认证的方式及流程请参见[这里](https://support.huaweicloud.com/usermanual-account/zh-cn_topic_0077914253.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEnterpriseRealnameAuthentication($request)
    {
        return $this->createEnterpriseRealnameAuthenticationWithHttpInfo($request);
    }

    public function createEnterpriseRealnameAuthenticationWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreateEnterpriseRealnameAuthenticationResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreateEnterpriseRealnameAuthenticationRequest');
    }

    /**
     * 发放优惠券
     *
     * 合作伙伴可以在拥有的代金券额度范围内为客户下发优惠券。
     * 
     * 伙伴登录合作伙伴中心为客户发放代金券请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/espp_050502.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;只能给代售子客户发放优惠券。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPartnerCoupons($request)
    {
        return $this->createPartnerCouponsWithHttpInfo($request);
    }

    public function createPartnerCouponsWithHttpInfo($request)
    {
        $resourcePath = '/v2/promotions/benefits/partner-coupons';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreatePartnerCouponsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreatePartnerCouponsRequest');
    }

    /**
     * 申请个人实名认证
     *
     * 个人客户可以进行个人实名认证申请。
     * 
     * 客户登录帐号中心进行个人实名认证的方式及流程请参见[这里](https://support.huaweicloud.com/usermanual-account/zh-cn_topic_0077914254.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPersonalRealnameAuth($request)
    {
        return $this->createPersonalRealnameAuthWithHttpInfo($request);
    }

    public function createPersonalRealnameAuthWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreatePersonalRealnameAuthResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreatePersonalRealnameAuthRequest');
    }

    /**
     * 新增邮寄地址
     *
     * 伙伴可以新增自己的邮寄地址信息。
     * 
     * 伙伴登录伙伴中心新增邮寄地址请参见[向华为云索取发票](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0072435143.html)，进入索取发票页面，选择纸质发票，即可设置邮件地址。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPostal($request)
    {
        return $this->createPostalWithHttpInfo($request);
    }

    public function createPostalWithHttpInfo($request)
    {
        $resourcePath = '/v2/customers/postal-addresses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreatePostalResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreatePostalRequest');
    }

    /**
     * 创建客户
     *
     * 在伙伴销售平台创建客户时同步创建华为云账号，并将客户在伙伴销售平台上的账号与华为云账号进行映射。同时，创建的华为云账号与伙伴账号关联绑定。
     * 
     * 华为云总经销商（一级经销商）可以注册云经销商（二级经销商）的子客户。注册完成后，子客户可以自动和云经销商绑定。
     * 
     * &gt;![](public_sys-resources/icon-caution.gif) **注意：**
     * &gt;-   调用该接口为客户创建华为云账号后，如果想从合作伙伴销售平台跳转至华为云官网，还需要进行SAML认证，具体请参见“[Web UI方式](https://support.huaweicloud.com/api-bpconsole/jac_00001.html)”中的“SAML认证”。
     * &gt;-   如果创建的时候不输入手机号，那么客户将无法收到华为云发出的任何提醒短信，需要客户自己登录到华为云平台补充手机号。
     * &gt;-   调用“创建客户”接口时，华为云会同步创建华为云客户账号，将客户ID及账号名返回给伙伴平台，然后华为云异步完成客户与伙伴的关联。伙伴与客户的关联结果可通过“[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)”查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSubCustomer($request)
    {
        return $this->createSubCustomerWithHttpInfo($request);
    }

    public function createSubCustomerWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreateSubCustomerResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreateSubCustomerRequest');
    }

    /**
     * 创建企业子账号
     *
     * 企业主账号在自建平台创建企业子账号。
     * 
     * 企业主账号创建企业子账号请参见[这里](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0104194162.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSubEnterpriseAccount($request)
    {
        return $this->createSubEnterpriseAccountWithHttpInfo($request);
    }

    public function createSubEnterpriseAccountWithHttpInfo($request)
    {
        $resourcePath = '/v2/enterprises/multi-accounts/sub-customers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreateSubEnterpriseAccountResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreateSubEnterpriseAccountRequest');
    }

    /**
     * 删除邮寄地址
     *
     * 伙伴可以删除自己的邮寄地址信息。
     * 
     * 伙伴登录伙伴中心修改邮寄地址请参见[向华为云索取发票](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0072435143.html)，进入索取发票页面，选择删除邮寄地址，即可删除邮件地址。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePostal($request)
    {
        return $this->deletePostalWithHttpInfo($request);
    }

    public function deletePostalWithHttpInfo($request)
    {
        $resourcePath = '/v2/customers/postal-addresses/{address_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['addressId'] !== null) {
            $pathParams['address_id'] = $localVarParams['addressId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\DeletePostalResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\DeletePostalRequest');
    }

    /**
     * 查询城市信息
     *
     * 伙伴在伙伴销售平台上查询城市信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCities($request)
    {
        return $this->listCitiesWithHttpInfo($request);
    }

    public function listCitiesWithHttpInfo($request)
    {
        $resourcePath = '/v2/systems/configs/cities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['provinceCode'] !== null) {
            $queryParams['province_code'] = $localVarParams['provinceCode'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCitiesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCitiesRequest');
    }

    /**
     * 查询伙伴消费子客户列表
     *
     * 伙伴在伙伴销售平台可实时查询消费账期内的子客户列表，可以用于查询子客户的消费记录。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;若当前子客户与伙伴无关联关系，仍可查询账期内处于关联状态且有消费的子客户列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConsumeSubCustomers($request)
    {
        return $this->listConsumeSubCustomersWithHttpInfo($request);
    }

    public function listConsumeSubCustomersWithHttpInfo($request)
    {
        $resourcePath = '/v2/bills/subcustomer-bills/res-fee-records/sub-customers/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListConsumeSubCustomersResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListConsumeSubCustomersRequest');
    }

    /**
     * 查询度量单位进制
     *
     * 伙伴在伙伴销售平台上查询度量单位的进制转换信息，用于不同度量单位之间的转换。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConversions($request)
    {
        return $this->listConversionsWithHttpInfo($request);
    }

    public function listConversionsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListConversionsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListConversionsRequest');
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
    public function listCosts($request)
    {
        return $this->listCostsWithHttpInfo($request);
    }

    public function listCostsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCostsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCostsRequest');
    }

    /**
     * 查询区县信息
     *
     * 伙伴在伙伴销售平台上查询区县信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCounties($request)
    {
        return $this->listCountiesWithHttpInfo($request);
    }

    public function listCountiesWithHttpInfo($request)
    {
        $resourcePath = '/v2/systems/configs/counties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['cityCode'] !== null) {
            $queryParams['city_code'] = $localVarParams['cityCode'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCountiesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCountiesRequest');
    }

    /**
     * 查询代金券额度的发放回收记录
     *
     * 华为云总经销商（一级经销商）可以查看给云经销商（二级经销商）发放或回收代金券额度的操作记录。
     * 
     * 一级经销商可以登录伙伴中心，进入“客户业务** **\\&gt; 代金券管理”，选择“代金券额度”页签，单击“操作记录”查看代金券额度的发放和回收记录。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;伙伴也可以单击代金券额度所在行的“操作记录”，查看该代金券额度对应的操作记录日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCouponQuotasRecords($request)
    {
        return $this->listCouponQuotasRecordsWithHttpInfo($request);
    }

    public function listCouponQuotasRecordsWithHttpInfo($request)
    {
        $resourcePath = '/v2/partners/coupon-quotas/records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
        }
        if ($localVarParams['quotaId'] !== null) {
            $queryParams['quota_id'] = $localVarParams['quotaId'];
        }
        if ($localVarParams['operationTimeBegin'] !== null) {
            $queryParams['operation_time_begin'] = $localVarParams['operationTimeBegin'];
        }
        if ($localVarParams['operationTimeEnd'] !== null) {
            $queryParams['operation_time_end'] = $localVarParams['operationTimeEnd'];
        }
        if ($localVarParams['parentQuotaId'] !== null) {
            $queryParams['parent_quota_id'] = $localVarParams['parentQuotaId'];
        }
        if ($localVarParams['operationType'] !== null) {
            $queryParams['operation_type'] = $localVarParams['operationType'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCouponQuotasRecordsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCouponQuotasRecordsRequest');
    }

    /**
     * 查询收支明细(客户)
     *
     * 功能描述：客户可以查询自身的收支明细情况(此接口不适用于伙伴的代售类、转售类客户。)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerAccountChangeRecords($request)
    {
        return $this->listCustomerAccountChangeRecordsWithHttpInfo($request);
    }

    public function listCustomerAccountChangeRecordsWithHttpInfo($request)
    {
        $resourcePath = '/v2/accounts/customer-accounts/account-change-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['balanceType'] !== null) {
            $queryParams['balance_type'] = $localVarParams['balanceType'];
        }
        if ($localVarParams['revenueExpenseType'] !== null) {
            $queryParams['revenue_expense_type'] = $localVarParams['revenueExpenseType'];
        }
        if ($localVarParams['tradeType'] !== null) {
            $queryParams['trade_type'] = $localVarParams['tradeType'];
        }
        if ($localVarParams['tradeTimeBegin'] !== null) {
            $queryParams['trade_time_begin'] = $localVarParams['tradeTimeBegin'];
        }
        if ($localVarParams['tradeTimeEnd'] !== null) {
            $queryParams['trade_time_end'] = $localVarParams['tradeTimeEnd'];
        }
        if ($localVarParams['tradeId'] !== null) {
            $queryParams['trade_id'] = $localVarParams['tradeId'];
        }
        if ($localVarParams['paymentChannelId'] !== null) {
            $queryParams['payment_channel_id'] = $localVarParams['paymentChannelId'];
        }
        if ($localVarParams['paymentChannelNo'] !== null) {
            $queryParams['payment_channel_no'] = $localVarParams['paymentChannelNo'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerAccountChangeRecordsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerAccountChangeRecordsRequest');
    }

    /**
     * 查询流水账单
     *
     * 客户在自建平台查询自己的消费流水账单。
     * 
     * 客户登录费用中心查询自己的消费流水账单请参见[这里](https://support.huaweicloud.com/usermanual-billing/bills-topic_80000001.html#bills-topic_80000001__zh-cn_topic_0000001162496407_s716e04d5d0ba4e9d9a76a8bcbfbcfe73)的“**查看流水账单**”。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerBillsFeeRecords($request)
    {
        return $this->listCustomerBillsFeeRecordsWithHttpInfo($request);
    }

    public function listCustomerBillsFeeRecordsWithHttpInfo($request)
    {
        $resourcePath = '/v2/bills/customer-bills/fee-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['providerType'] !== null) {
            $queryParams['provider_type'] = $localVarParams['providerType'];
        }
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['resourceTypeCode'] !== null) {
            $queryParams['resource_type_code'] = $localVarParams['resourceTypeCode'];
        }
        if ($localVarParams['regionCode'] !== null) {
            $queryParams['region_code'] = $localVarParams['regionCode'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
        }
        if ($localVarParams['billType'] !== null) {
            $queryParams['bill_type'] = $localVarParams['billType'];
        }
        if ($localVarParams['tradeId'] !== null) {
            $queryParams['trade_id'] = $localVarParams['tradeId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['includeZeroRecord'] !== null) {
            $queryParams['include_zero_record'] = $localVarParams['includeZeroRecord'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['method'] !== null) {
            $queryParams['method'] = $localVarParams['method'];
        }
        if ($localVarParams['subCustomerId'] !== null) {
            $queryParams['sub_customer_id'] = $localVarParams['subCustomerId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['billDateBegin'] !== null) {
            $queryParams['bill_date_begin'] = $localVarParams['billDateBegin'];
        }
        if ($localVarParams['billDateEnd'] !== null) {
            $queryParams['bill_date_end'] = $localVarParams['billDateEnd'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerBillsFeeRecordsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerBillsFeeRecordsRequest');
    }

    /**
     * 查询月度成本
     *
     * 客户可以查询指定月份的月度摊销成本。当前仅支持查询近18个月的摊销成本。摊销成本计算规则请参见[成本摊销规则](https://support.huaweicloud.com/usermanual-cost/costcenter_000002_01.html)。
     * 
     * 客户可查询的数据范围同成本中心提供的[数据范围](https://support.huaweicloud.com/usermanual-cost/costcenter_0000004.html)一致。
     * 
     * 客户登录成本中心导出成本明细请参见[导出成本明细数据](https://support.huaweicloud.com/usermanual-cost/costcenter_000002_03.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;该接口仅面向已开通成本中心的客户开放。如何开启成本中心请参见[这里](https://support.huaweicloud.com/usermanual-cost/costcenter_000004.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerBillsMonthlyBreakDown($request)
    {
        return $this->listCustomerBillsMonthlyBreakDownWithHttpInfo($request);
    }

    public function listCustomerBillsMonthlyBreakDownWithHttpInfo($request)
    {
        $resourcePath = '/v2/costs/cost-analysed-bills/monthly-breakdown';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sharedMonth'] !== null) {
            $queryParams['shared_month'] = $localVarParams['sharedMonth'];
        }
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['resourceTypeCode'] !== null) {
            $queryParams['resource_type_code'] = $localVarParams['resourceTypeCode'];
        }
        if ($localVarParams['regionCode'] !== null) {
            $queryParams['region_code'] = $localVarParams['regionCode'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
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
        if ($localVarParams['resourceName'] !== null) {
            $queryParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['method'] !== null) {
            $queryParams['method'] = $localVarParams['method'];
        }
        if ($localVarParams['subCustomerId'] !== null) {
            $queryParams['sub_customer_id'] = $localVarParams['subCustomerId'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerBillsMonthlyBreakDownResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerBillsMonthlyBreakDownRequest');
    }

    /**
     * 查询客户按需资源列表
     *
     * 合作伙伴可以查询关联的代售类客户已开通的按需资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerOnDemandResources($request)
    {
        return $this->listCustomerOnDemandResourcesWithHttpInfo($request);
    }

    public function listCustomerOnDemandResourcesWithHttpInfo($request)
    {
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerOnDemandResourcesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerOnDemandResourcesRequest');
    }

    /**
     * 查询订单列表
     *
     * 客户购买包年/包月资源后，可以查看待审核、处理中、已取消、已完成和待支付等状态的订单。
     * 
     * 伙伴登录伙伴中心查看客户订单请单击[这里](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0076200001.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;如果想查询某条订单下的资源信息，在调用本接口获取订单ID后，请调用“[查询客户包年/包月资源列表](https://support.huaweicloud.com/api-oce/api_order_00021.html)”接口在请求参数输入订单号进行查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerOrders($request)
    {
        return $this->listCustomerOrdersWithHttpInfo($request);
    }

    public function listCustomerOrdersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerOrdersResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerOrdersRequest');
    }

    /**
     * 查询客户账户余额
     *
     * 合作伙伴可以查询关联的代售类客户的账户余额。
     * 
     * 伙伴登录伙伴中心查询客户余额请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0072435115.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;顾问销售类客户是客户在华为云充值，合作伙伴无法调用此接口查询其账户余额。代售类客户的账户由合作伙伴拨款，所以可以查询到。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomersBalancesDetail($request)
    {
        return $this->listCustomersBalancesDetailWithHttpInfo($request);
    }

    public function listCustomersBalancesDetailWithHttpInfo($request)
    {
        $resourcePath = '/v2/accounts/customer-accounts/balances/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomersBalancesDetailResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomersBalancesDetailRequest');
    }

    /**
     * 查询资源详单
     *
     * 客户在自建平台查询自己的资源详单，用于反映各类资源的消耗情况。
     * 
     * 客户登录费用中心查询资源详单请参见[这里](https://support.huaweicloud.com/usermanual-billing/bills_topic_100000063.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;由于资源消费呈现的是资源维度的8位小数原始消费金额，实际从账户扣费时按2位小数进行扣费（即扣到分），会存在精度差异，所以，不推荐消费汇总和资源消费直接对账。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerselfResourceRecordDetails($request)
    {
        return $this->listCustomerselfResourceRecordDetailsWithHttpInfo($request);
    }

    public function listCustomerselfResourceRecordDetailsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerselfResourceRecordDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerselfResourceRecordDetailsRequest');
    }

    /**
     * 查询资源消费记录
     *
     * 客户在自建平台查询每个资源的消费明细数据。
     * 
     * 客户登录费用中心查询资源消费记录请参见[这里](https://support.huaweicloud.com/usermanual-billing/bills_topic_100000061.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerselfResourceRecords($request)
    {
        return $this->listCustomerselfResourceRecordsWithHttpInfo($request);
    }

    public function listCustomerselfResourceRecordsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerselfResourceRecordsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerselfResourceRecordsRequest');
    }

    /**
     * 查询企业子账号可回收余额
     *
     * 企业主账号在自建平台查询企业子账号的可回收余额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnterpriseMultiAccount($request)
    {
        return $this->listEnterpriseMultiAccountWithHttpInfo($request);
    }

    public function listEnterpriseMultiAccountWithHttpInfo($request)
    {
        $resourcePath = '/v2/enterprises/multi-accounts/retrieve-amount';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['subCustomerId'] !== null) {
            $queryParams['sub_customer_id'] = $localVarParams['subCustomerId'];
        }
        if ($localVarParams['balanceType'] !== null) {
            $queryParams['balance_type'] = $localVarParams['balanceType'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListEnterpriseMultiAccountResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListEnterpriseMultiAccountRequest');
    }

    /**
     * 查询企业组织结构
     *
     * 企业主账号在自建平台查询企业组织结构。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnterpriseOrganizations($request)
    {
        return $this->listEnterpriseOrganizationsWithHttpInfo($request);
    }

    public function listEnterpriseOrganizationsWithHttpInfo($request)
    {
        $resourcePath = '/v2/enterprises/multi-accounts/enterprise-organizations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['recursiveQuery'] !== null) {
            $queryParams['recursive_query'] = $localVarParams['recursiveQuery'];
        }
        if ($localVarParams['parentId'] !== null) {
            $queryParams['parent_id'] = $localVarParams['parentId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListEnterpriseOrganizationsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListEnterpriseOrganizationsRequest');
    }

    /**
     * 查询企业子账号列表
     *
     * 企业主账号在自建平台查询企业子账号信息列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnterpriseSubCustomers($request)
    {
        return $this->listEnterpriseSubCustomersWithHttpInfo($request);
    }

    public function listEnterpriseSubCustomersWithHttpInfo($request)
    {
        $resourcePath = '/v2/enterprises/multi-accounts/sub-customers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['subCustomerAccountName'] !== null) {
            $queryParams['sub_customer_account_name'] = $localVarParams['subCustomerAccountName'];
        }
        if ($localVarParams['subCustomerDisplayName'] !== null) {
            $queryParams['sub_customer_display_name'] = $localVarParams['subCustomerDisplayName'];
        }
        if ($localVarParams['fuzzyQuery'] !== null) {
            $queryParams['fuzzy_query'] = $localVarParams['fuzzyQuery'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['orgId'] !== null) {
            $queryParams['org_id'] = $localVarParams['orgId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListEnterpriseSubCustomersResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListEnterpriseSubCustomersRequest');
    }

    /**
     * 查询资源包列表
     *
     * 客户在伙伴销售平台查询客户的资源包列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFreeResourceInfos($request)
    {
        return $this->listFreeResourceInfosWithHttpInfo($request);
    }

    public function listFreeResourceInfosWithHttpInfo($request)
    {
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListFreeResourceInfosResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListFreeResourceInfosRequest');
    }

    /**
     * 查询资源包使用量
     *
     * 客户在伙伴销售平台根据资源项维度查询客户的资源包使用量。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFreeResourceUsages($request)
    {
        return $this->listFreeResourceUsagesWithHttpInfo($request);
    }

    public function listFreeResourceUsagesWithHttpInfo($request)
    {
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListFreeResourceUsagesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListFreeResourceUsagesRequest');
    }

    /**
     * 查询资源包使用明细
     *
     * 客户在自建平台查询资源包使用明细。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFreeResourcesUsageRecords($request)
    {
        return $this->listFreeResourcesUsageRecordsWithHttpInfo($request);
    }

    public function listFreeResourcesUsageRecordsWithHttpInfo($request)
    {
        $resourcePath = '/v2/bills/customer-bills/free-resources-usage-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['freeResourceId'] !== null) {
            $queryParams['free_resource_id'] = $localVarParams['freeResourceId'];
        }
        if ($localVarParams['productId'] !== null) {
            $queryParams['product_id'] = $localVarParams['productId'];
        }
        if ($localVarParams['resourceTypeCode'] !== null) {
            $queryParams['resource_type_code'] = $localVarParams['resourceTypeCode'];
        }
        if ($localVarParams['deductTimeBegin'] !== null) {
            $queryParams['deduct_time_begin'] = $localVarParams['deductTimeBegin'];
        }
        if ($localVarParams['deductTimeEnd'] !== null) {
            $queryParams['deduct_time_end'] = $localVarParams['deductTimeEnd'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListFreeResourcesUsageRecordsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListFreeResourcesUsageRecordsRequest');
    }

    /**
     * 查询产品的折扣和激励策略
     *
     * 伙伴在伙伴销售平台上查询产品的折扣和激励策略。
     * 
     * 伙伴登录合作伙伴中心查看产品的折扣和激励策略请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/dp_120400.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIncentiveDiscountPolicies($request)
    {
        return $this->listIncentiveDiscountPoliciesWithHttpInfo($request);
    }

    public function listIncentiveDiscountPoliciesWithHttpInfo($request)
    {
        $resourcePath = '/v2/products/incentive-discount-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['time'] !== null) {
            $queryParams['time'] = $localVarParams['time'];
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
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListIncentiveDiscountPoliciesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListIncentiveDiscountPoliciesRequest');
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
    public function listIndirectPartners($request)
    {
        return $this->listIndirectPartnersWithHttpInfo($request);
    }

    public function listIndirectPartnersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListIndirectPartnersResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListIndirectPartnersRequest');
    }

    /**
     * 查询已发放的代金券额度
     *
     * 华为云总经销商（一级经销商）可以查看发放给云经销商（二级经销商）的代金券额度列表。
     * 
     * 一级经销商登录伙伴中心，进入“客户业务** **\\&gt; 代金券管理”，选择“已发放代金券额度”可查看代金券额度列表。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;调用该接口之前，需通过客户经理联系华为运营人员，为合作伙伴设置代金券发放额度。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIssuedCouponQuotas($request)
    {
        return $this->listIssuedCouponQuotasWithHttpInfo($request);
    }

    public function listIssuedCouponQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v2/partners/issued-coupon-quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['quotaId'] !== null) {
            $queryParams['quota_id'] = $localVarParams['quotaId'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
        }
        if ($localVarParams['parentQuotaId'] !== null) {
            $queryParams['parent_quota_id'] = $localVarParams['parentQuotaId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListIssuedCouponQuotasResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListIssuedCouponQuotasRequest');
    }

    /**
     * 查询已发放的优惠券
     *
     * 合作伙伴可以查询已发放的优惠券列表。
     * 
     * 伙伴登录伙伴中心，进入“客户业务** **\\&gt; 代金券管理”，选择“已发放代金券”页签，即可查询已发放的代金券。
     * 
     * 伙伴登录伙伴中心，进入“客户业务 \\&gt; 现金券管理”，选择“已发放现金券”页签，即可查询已发放的现金券。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   只可查到失效时间在12个月内的代金/现金劵。
     * &gt;-   在API只可以查询代售子客户已发放的代金/现金劵，在伙伴中心可以查询代售和顾问销售已发放的代金/现金劵，对比一致性时需要注意关联模式是否一致。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIssuedPartnerCoupons($request)
    {
        return $this->listIssuedPartnerCouponsWithHttpInfo($request);
    }

    public function listIssuedPartnerCouponsWithHttpInfo($request)
    {
        $resourcePath = '/v2/promotions/benefits/partner-coupons';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
        }
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
        }
        if ($localVarParams['couponType'] !== null) {
            $queryParams['coupon_type'] = $localVarParams['couponType'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['createTimeBegin'] !== null) {
            $queryParams['create_time_begin'] = $localVarParams['createTimeBegin'];
        }
        if ($localVarParams['createTimeEnd'] !== null) {
            $queryParams['create_time_end'] = $localVarParams['createTimeEnd'];
        }
        if ($localVarParams['effectiveTimeBegin'] !== null) {
            $queryParams['effective_time_begin'] = $localVarParams['effectiveTimeBegin'];
        }
        if ($localVarParams['effectiveTimeEnd'] !== null) {
            $queryParams['effective_time_end'] = $localVarParams['effectiveTimeEnd'];
        }
        if ($localVarParams['expireTimeBegin'] !== null) {
            $queryParams['expire_time_begin'] = $localVarParams['expireTimeBegin'];
        }
        if ($localVarParams['expireTimeEnd'] !== null) {
            $queryParams['expire_time_end'] = $localVarParams['expireTimeEnd'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListIssuedPartnerCouponsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListIssuedPartnerCouponsRequest');
    }

    /**
     * 查询度量单位列表
     *
     * 伙伴在伙伴销售平台上查询资源使用量，包年包月资源的时长及金额的度量单位及名称，度量单位类型等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMeasureUnits($request)
    {
        return $this->listMeasureUnitsWithHttpInfo($request);
    }

    public function listMeasureUnitsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListMeasureUnitsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListMeasureUnitsRequest');
    }

    /**
     * 查询企业子账号可回收优惠券列表
     *
     * 企业主账号在自建平台查询企业子账号的可回收优惠券。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   仅支持华为发放的测试类、商务类、活动类代金券。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMultiAccountRetrieveCoupons($request)
    {
        return $this->listMultiAccountRetrieveCouponsWithHttpInfo($request);
    }

    public function listMultiAccountRetrieveCouponsWithHttpInfo($request)
    {
        $resourcePath = '/v2/enterprises/multi-accounts/retrieve-coupons';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['subCustomerId'] !== null) {
            $queryParams['sub_customer_id'] = $localVarParams['subCustomerId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListMultiAccountRetrieveCouponsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListMultiAccountRetrieveCouponsRequest');
    }

    /**
     * 查询企业主账号可拨款优惠券列表
     *
     * 企业主账号在自建平台查询自己的可拨款优惠券列表。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   仅支持华为发放的测试类、商务类、活动类代金券。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMultiAccountTransferCoupons($request)
    {
        return $this->listMultiAccountTransferCouponsWithHttpInfo($request);
    }

    public function listMultiAccountTransferCouponsWithHttpInfo($request)
    {
        $resourcePath = '/v2/enterprises/multi-accounts/transfer-coupons';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListMultiAccountTransferCouponsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListMultiAccountTransferCouponsRequest');
    }

    /**
     * 查询按需产品价格
     *
     * 伙伴在销售平台按照条件查询按需产品的价格。
     * 
     * 如果购买该产品的租户享受折扣，可以在查询结果中返回折扣金额以及扣除折扣后的最后成交价。
     * 
     * 如果该租户享受多种折扣，系统会优先返回客户享受的商务折扣的折扣金额和最终成交价。
     * 
     * &gt;![](public_sys-resources/icon-caution.gif) **注意：**
     * &gt;华为云根据云服务类型、资源类型、云服务区和资源规格四个条件来查询产品，查询时请确认这4个查询条件均输入正确，否则该接口会返回无法找到产品的错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOnDemandResourceRatings($request)
    {
        return $this->listOnDemandResourceRatingsWithHttpInfo($request);
    }

    public function listOnDemandResourceRatingsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListOnDemandResourceRatingsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListOnDemandResourceRatingsRequest');
    }

    /**
     * 查询订单可用优惠券
     *
     * 客户在伙伴销售平台支付待支付订单时，查询可使用的优惠券列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOrderCouponsByOrderId($request)
    {
        return $this->listOrderCouponsByOrderIdWithHttpInfo($request);
    }

    public function listOrderCouponsByOrderIdWithHttpInfo($request)
    {
        $resourcePath = '/v2/orders/customer-orders/order-coupons';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListOrderCouponsByOrderIdResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListOrderCouponsByOrderIdRequest');
    }

    /**
     * 查询订单可用折扣
     *
     * 客户在伙伴销售平台支付待支付订单时，查询可使用的折扣信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOrderDiscounts($request)
    {
        return $this->listOrderDiscountsWithHttpInfo($request);
    }

    public function listOrderDiscountsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListOrderDiscountsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListOrderDiscountsRequest');
    }

    /**
     * 查询收支明细
     *
     * 伙伴在伙伴销售平台上查询自身的收支明细情况。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPartnerAccountChangeRecords($request)
    {
        return $this->listPartnerAccountChangeRecordsWithHttpInfo($request);
    }

    public function listPartnerAccountChangeRecordsWithHttpInfo($request)
    {
        $resourcePath = '/v2/accounts/partner-accounts/account-change-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['balanceType'] !== null) {
            $queryParams['balance_type'] = $localVarParams['balanceType'];
        }
        if ($localVarParams['tradeType'] !== null) {
            $queryParams['trade_type'] = $localVarParams['tradeType'];
        }
        if ($localVarParams['tradeTimeBegin'] !== null) {
            $queryParams['trade_time_begin'] = $localVarParams['tradeTimeBegin'];
        }
        if ($localVarParams['tradeTimeEnd'] !== null) {
            $queryParams['trade_time_end'] = $localVarParams['tradeTimeEnd'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerAccountChangeRecordsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerAccountChangeRecordsRequest');
    }

    /**
     * 查询调账记录
     *
     * 伙伴在伙伴销售平台查询向客户及关联的云经销商（二级经销商）拨款或回收的调账记录。
     * 
     * 伙伴登录伙伴中心，在“拨款”或“回收”页面，单击“调账记录”，可以查看一级经销商为二级经销商调账的记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPartnerAdjustRecords($request)
    {
        return $this->listPartnerAdjustRecordsWithHttpInfo($request);
    }

    public function listPartnerAdjustRecordsWithHttpInfo($request)
    {
        $resourcePath = '/v3/accounts/partner-accounts/adjust-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['operationType'] !== null) {
            $queryParams['operation_type'] = $localVarParams['operationType'];
        }
        if ($localVarParams['operationTimeBegin'] !== null) {
            $queryParams['operation_time_begin'] = $localVarParams['operationTimeBegin'];
        }
        if ($localVarParams['operationTimeEnd'] !== null) {
            $queryParams['operation_time_end'] = $localVarParams['operationTimeEnd'];
        }
        if ($localVarParams['transId'] !== null) {
            $queryParams['trans_id'] = $localVarParams['transId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerAdjustRecordsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerAdjustRecordsRequest');
    }

    /**
     * 查询云经销商账户余额
     *
     * 华为云总经销商（一级经销商）可以查询关联的云经销商（二级经销商）的账户余额；云经销商伙伴可以查询自己的账户余额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPartnerBalances($request)
    {
        return $this->listPartnerBalancesWithHttpInfo($request);
    }

    public function listPartnerBalancesWithHttpInfo($request)
    {
        $resourcePath = '/v2/accounts/partner-accounts/balances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerBalancesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerBalancesRequest');
    }

    /**
     * 查询优惠券的发放回收记录
     *
     * 合作伙伴可查看给客户发放和回收优惠券的操作记录。
     * 
     * 合作伙伴登录伙伴中心查看、导出代金券操作日志请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0072435103.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPartnerCouponsRecord($request)
    {
        return $this->listPartnerCouponsRecordWithHttpInfo($request);
    }

    public function listPartnerCouponsRecordWithHttpInfo($request)
    {
        $resourcePath = '/v2/promotions/benefits/partner-coupons/records/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['operationTypes'] !== null) {
            $queryParams['operation_types'] = $localVarParams['operationTypes'];
        }
        if ($localVarParams['quotaId'] !== null) {
            $queryParams['quota_id'] = $localVarParams['quotaId'];
        }
        if ($localVarParams['quotaType'] !== null) {
            $queryParams['quota_type'] = $localVarParams['quotaType'];
        }
        if ($localVarParams['couponIds'] !== null) {
            $queryParams['coupon_ids'] = $localVarParams['couponIds'];
        }
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
        }
        if ($localVarParams['operationTimeBegin'] !== null) {
            $queryParams['operation_time_begin'] = $localVarParams['operationTimeBegin'];
        }
        if ($localVarParams['operationTimeEnd'] !== null) {
            $queryParams['operation_time_end'] = $localVarParams['operationTimeEnd'];
        }
        if ($localVarParams['result'] !== null) {
            $queryParams['result'] = $localVarParams['result'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerCouponsRecordResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerCouponsRecordRequest');
    }

    /**
     * 查询客户包年/包月资源列表
     *
     * 客户在伙伴销售平台查询某个或所有的包年/包月资源。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;成功调用本接口后，如果您需要对已生效状态的资源进行续订，您可以调用“[查询包年/包月产品价格](https://support.huaweicloud.com/api-bpconsole/bcloud_01002.html)”接口对查询到的包年/包月资源进行续订询价，然后再调用“[续订包年/包月资源](https://support.huaweicloud.com/api-bpconsole/api_order_00018.html)”接口进行续订。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPayPerUseCustomerResources($request)
    {
        return $this->listPayPerUseCustomerResourcesWithHttpInfo($request);
    }

    public function listPayPerUseCustomerResourcesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListPayPerUseCustomerResourcesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListPayPerUseCustomerResourcesRequest');
    }

    /**
     * 查询邮寄地址
     *
     * 伙伴可以查询自己的邮寄地址信息。
     * 
     * 伙伴登录伙伴中心查询邮寄地址请参见[向华为云索取发票](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0072435143.html)，进入索取发票页面，即可查看邮寄地址。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPostalAddress($request)
    {
        return $this->listPostalAddressWithHttpInfo($request);
    }

    public function listPostalAddressWithHttpInfo($request)
    {
        $resourcePath = '/v2/customers/postal-addresses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListPostalAddressResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListPostalAddressRequest');
    }

    /**
     * 查询省份信息
     *
     * 伙伴在伙伴销售平台上查询省份信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProvinces($request)
    {
        return $this->listProvincesWithHttpInfo($request);
    }

    public function listProvincesWithHttpInfo($request)
    {
        $resourcePath = '/v2/systems/configs/provinces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListProvincesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListProvincesRequest');
    }

    /**
     * 查询优惠券额度
     *
     * 合作伙伴可以查看所拥有的优惠劵额度。
     * 
     * 伙伴登录合作伙伴中心查看所拥有的代金券额度请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0072435100.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQuotaCoupons($request)
    {
        return $this->listQuotaCouponsWithHttpInfo($request);
    }

    public function listQuotaCouponsWithHttpInfo($request)
    {
        $resourcePath = '/v2/partners/coupon-quotas/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListQuotaCouponsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListQuotaCouponsRequest');
    }

    /**
     * 查询包年/包月产品价格
     *
     * 伙伴在销售平台按照条件查询包年/包月产品开通时候的价格。
     * 
     * 如果购买该产品的客户享受折扣，可以在查询结果中返回折扣金额以及扣除折扣后的最后成交价。
     * 
     * 如果该客户享受多种折扣，系统会返回每种折扣的批价结果。如果客户在下单的时候选择自动支付，则系统会优先应用商务折扣的批价结果。
     * 
     * &gt;![](public_sys-resources/icon-caution.gif) **注意：**
     * &gt;华为云根据云服务类型、资源类型、云服务区和资源规格四个条件来查询产品，查询时请确认这4个查询条件均输入正确，否则该接口会返回无法找到产品的错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRateOnPeriodDetail($request)
    {
        return $this->listRateOnPeriodDetailWithHttpInfo($request);
    }

    public function listRateOnPeriodDetailWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListRateOnPeriodDetailResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListRateOnPeriodDetailRequest');
    }

    /**
     * 查询待续订包年包月资源的续订金额
     *
     * 功能描述：客户在自建平台按照条件查询待续订包年/包月资源续订时候的续订金额
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRenewRateOnPeriod($request)
    {
        return $this->listRenewRateOnPeriodWithHttpInfo($request);
    }

    public function listRenewRateOnPeriodWithHttpInfo($request)
    {
        $resourcePath = '/v2/bills/ratings/period-resources/renew-rate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListRenewRateOnPeriodResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListRenewRateOnPeriodRequest');
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
    public function listResourceTypes($request)
    {
        return $this->listResourceTypesWithHttpInfo($request);
    }

    public function listResourceTypesWithHttpInfo($request)
    {
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListResourceTypesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListResourceTypesRequest');
    }

    /**
     * 查询95计费资源用量明细
     *
     * 客户在自建平台查询自己的资源使用量明细。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;当前仅支持查询CDN、OBS、IEC和VPC四种云服务类型的资源用量明细，仅针对95计费场景。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceUsage($request)
    {
        return $this->listResourceUsageWithHttpInfo($request);
    }

    public function listResourceUsageWithHttpInfo($request)
    {
        $resourcePath = '/v2/bills/customer-bills/resources/usage/details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['resourceTypeCode'] !== null) {
            $queryParams['resource_type_code'] = $localVarParams['resourceTypeCode'];
        }
        if ($localVarParams['usageType'] !== null) {
            $queryParams['usage_type'] = $localVarParams['usageType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListResourceUsageResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListResourceUsageRequest');
    }

    /**
     * 查询95计费资源用量汇总
     *
     * 客户在自建平台查询自己的资源使用量汇总。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   当前仅支持查询CDN、OBS、IEC和VPC四种云服务类型的资源用量汇总，仅针对95计费场景。
     * &gt;-   使用量汇总列表只包含月汇总金额和资源ID，若要查询具体某个资源的用量明细，请调用[查询资源用量明细](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001190606757.html)接口获取。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceUsageSummary($request)
    {
        return $this->listResourceUsageSummaryWithHttpInfo($request);
    }

    public function listResourceUsageSummaryWithHttpInfo($request)
    {
        $resourcePath = '/v2/bills/customer-bills/resources/usage/summary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['resourceTypeCode'] !== null) {
            $queryParams['resource_type_code'] = $localVarParams['resourceTypeCode'];
        }
        if ($localVarParams['usageType'] !== null) {
            $queryParams['usage_type'] = $localVarParams['usageType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListResourceUsageSummaryResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListResourceUsageSummaryRequest');
    }

    /**
     * 根据云服务类型查询资源列表
     *
     * 伙伴在伙伴销售平台根据云服务类型查询关联的资源类型编码和名称，用于查询按需产品的价格或包年/包月产品的价格。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServiceResources($request)
    {
        return $this->listServiceResourcesWithHttpInfo($request);
    }

    public function listServiceResourcesWithHttpInfo($request)
    {
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListServiceResourcesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListServiceResourcesRequest');
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
    public function listServiceTypes($request)
    {
        return $this->listServiceTypesWithHttpInfo($request);
    }

    public function listServiceTypesWithHttpInfo($request)
    {
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListServiceTypesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListServiceTypesRequest');
    }

    /**
     * 查询储值卡列表
     *
     * 客户可以查询已购买的储值卡列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listStoredValueCards($request)
    {
        return $this->listStoredValueCardsWithHttpInfo($request);
    }

    public function listStoredValueCardsWithHttpInfo($request)
    {
        $resourcePath = '/v2/promotions/benefits/stored-value-cards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['cardId'] !== null) {
            $queryParams['card_id'] = $localVarParams['cardId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListStoredValueCardsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListStoredValueCardsRequest');
    }

    /**
     * 查询伙伴子客户消费记录
     *
     * 伙伴在伙伴销售平台可实时查询子客户的消费记录，了解客户的资源消耗情况。
     * 
     * 伙伴在伙伴中心查询客户消费明细请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0072435155.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   消费记录支持查询18个月内的记录。
     * &gt;-   如果是客户经理主管来查询，只支持按照单个客户经理查询，必须输入客户经理ID。
     * &gt;-   目前支持伙伴查询所有子客户（包含代售类和顾问销售类）的消费记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubCustomerBillDetail($request)
    {
        return $this->listSubCustomerBillDetailWithHttpInfo($request);
    }

    public function listSubCustomerBillDetailWithHttpInfo($request)
    {
        $resourcePath = '/v2/bills/subcustomer-bills/res-fee-records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
        }
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['regionCode'] !== null) {
            $queryParams['region_code'] = $localVarParams['regionCode'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
        }
        if ($localVarParams['billDetailType'] !== null) {
            $queryParams['bill_detail_type'] = $localVarParams['billDetailType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['resourceName'] !== null) {
            $queryParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($localVarParams['tradeId'] !== null) {
            $queryParams['trade_id'] = $localVarParams['tradeId'];
        }
        if ($localVarParams['accountManagerId'] !== null) {
            $queryParams['account_manager_id'] = $localVarParams['accountManagerId'];
        }
        if ($localVarParams['associationType'] !== null) {
            $queryParams['association_type'] = $localVarParams['associationType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
        }
        if ($localVarParams['billDateBegin'] !== null) {
            $queryParams['bill_date_begin'] = $localVarParams['billDateBegin'];
        }
        if ($localVarParams['billDateEnd'] !== null) {
            $queryParams['bill_date_end'] = $localVarParams['billDateEnd'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomerBillDetailResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomerBillDetailRequest');
    }

    /**
     * 查询优惠券列表
     *
     * 伙伴可以查询自身的优惠券信息。
     * 
     * 伙伴登录伙伴中心查询已发放代金券列表请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0072435101.html)，查看已下发代金券的内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubCustomerCoupons($request)
    {
        return $this->listSubCustomerCouponsWithHttpInfo($request);
    }

    public function listSubCustomerCouponsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomerCouponsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomerCouponsRequest');
    }

    /**
     * 查询客户新客标签
     *
     * 伙伴通过该接口可以查询客户的新客标签。
     * 
     * &gt;![](public_sys-resources/icon-caution.gif) **注意：**
     * &gt;-   新客标签失效后，new\\_customer\\_tag会变成N，且有效期过期。
     * &gt;-   客户如果没有实名认证，则新客标签为空。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubCustomerNewTag($request)
    {
        return $this->listSubCustomerNewTagWithHttpInfo($request);
    }

    public function listSubCustomerNewTagWithHttpInfo($request)
    {
        $resourcePath = '/v2/partners/sub-customers/new-customers-tags/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomerNewTagResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomerNewTagRequest');
    }

    /**
     * 查询客户列表
     *
     * 伙伴可以查询合作伙伴的客户信息列表。
     * 
     * 伙伴登录合作伙伴中心查询客户信息列表请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0072435115.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubCustomers($request)
    {
        return $this->listSubCustomersWithHttpInfo($request);
    }

    public function listSubCustomersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomersResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomersRequest');
    }

    /**
     * 查询客户月度消费账单
     *
     * 合作伙伴可查询客户的消费汇总账单，消费按月汇总。
     * 
     * 伙伴在伙伴中心查询客户月度消费账单请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0072435154.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;消费汇总数据仅包含前一天24点前的数据。每天刷新一次，更新前一天的数据。
     * &gt;该接口用于合作伙伴查询其代售类客户在华为的消费情况，如果输入某个客户ID，则是查询单个客户的，否则是查询该伙伴下所有使用伙伴拨款消费的客户的消费记录（包括退订记录）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubcustomerMonthlyBills($request)
    {
        return $this->listSubcustomerMonthlyBillsWithHttpInfo($request);
    }

    public function listSubcustomerMonthlyBillsWithHttpInfo($request)
    {
        $resourcePath = '/v2/bills/partner-bills/subcustomer-bills/monthly-sum';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['cycle'] !== null) {
            $queryParams['cycle'] = $localVarParams['cycle'];
        }
        if ($localVarParams['cloudServiceType'] !== null) {
            $queryParams['cloud_service_type'] = $localVarParams['cloudServiceType'];
        }
        if ($localVarParams['chargeMode'] !== null) {
            $queryParams['charge_mode'] = $localVarParams['chargeMode'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['billType'] !== null) {
            $queryParams['bill_type'] = $localVarParams['billType'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubcustomerMonthlyBillsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubcustomerMonthlyBillsRequest');
    }

    /**
     * 查询使用量类型列表
     *
     * 伙伴在伙伴销售平台查询资源的使用量类型列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUsageTypes($request)
    {
        return $this->listUsageTypesWithHttpInfo($request);
    }

    public function listUsageTypesWithHttpInfo($request)
    {
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListUsageTypesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListUsageTypesRequest');
    }

    /**
     * 支付包年/包月产品订单
     *
     * 客户可以对待支付状态的包年/包月产品订单进行支付。
     * 
     * 客户登录费用中心支付包年包月产品的待支付订单请单击[这里](https://support.huaweicloud.com/usermanual-billing/zh-cn_topic_0031512547.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   API支持月度结算和余额支付两种支付方式，月度结算优先。
     * &gt;-   余额支付包括现金账户和信用账户两种支付方式，如果两个账户都有余额，则优先现金账户支付。
     * &gt;-   同时使用订单折扣和优惠券的互斥规则如下：
     * &gt;    -   如果优惠券的限制属性上存在simultaneousUseWithEmpowerDiscount字段，并且值为0，则折扣和优惠券不能同时使用。
     * &gt;    -   如果优惠券的限制属性上存在minConsumeDiscount字段，当折扣ID包含的所有订单项上的折扣率discount\\_ratio都小于minConsumeDiscount字段时，则折扣ID和优惠券不能同时使用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function payOrders($request)
    {
        return $this->payOrdersWithHttpInfo($request);
    }

    public function payOrdersWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\PayOrdersResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\PayOrdersRequest');
    }

    /**
     * 回收云经销商的代金券额度
     *
     * 华为云总经销商（一级经销商）可以回收已发放给云经销商（二级经销商）的代金券额度。
     * 
     * 一级经销商在伙伴中心回收已发放给二级经销商的代金券额度请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/dp_120206.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function reclaimCouponQuotas($request)
    {
        return $this->reclaimCouponQuotasWithHttpInfo($request);
    }

    public function reclaimCouponQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v2/partners/coupon-quotas/indirect-partner-reclaim';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimCouponQuotasResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimCouponQuotasRequest');
    }

    /**
     * 企业主账号从企业子账号回收优惠券
     *
     * 企业主账号在自建平台回收给企业子账号的拨款优惠券。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   仅支持华为发放的测试类、商务类、活动类代金券。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function reclaimEnterpriseMultiAccountCoupon($request)
    {
        return $this->reclaimEnterpriseMultiAccountCouponWithHttpInfo($request);
    }

    public function reclaimEnterpriseMultiAccountCouponWithHttpInfo($request)
    {
        $resourcePath = '/v2/enterprises/multi-accounts/retrieve-coupon';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimEnterpriseMultiAccountCouponResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimEnterpriseMultiAccountCouponRequest');
    }

    /**
     * 回收云经销商账户拨款
     *
     * 华为云总经销商（一级经销商）可以回收云经销商（二级经销商）的账户余额。
     * 
     * 一级经销商在伙伴中心回收二级经销商账户拨款请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/dp_120205.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function reclaimIndirectPartnerAccount($request)
    {
        return $this->reclaimIndirectPartnerAccountWithHttpInfo($request);
    }

    public function reclaimIndirectPartnerAccountWithHttpInfo($request)
    {
        $resourcePath = '/v2/accounts/partner-accounts/indirect-partner-reclaim';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimIndirectPartnerAccountResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimIndirectPartnerAccountRequest');
    }

    /**
     * 回收优惠券
     *
     * 对于合作伙伴已经下发给客户的优惠券，如遇发错或其他特殊情况，合作伙伴有回收的权利。优惠券回收后，客户将不再拥有该优惠券。
     * 
     * 伙伴登录合作伙伴中心回收为客户发放的代金券请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/espp_050503.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;只能回收代售类子客户的优惠券。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function reclaimPartnerCoupons($request)
    {
        return $this->reclaimPartnerCouponsWithHttpInfo($request);
    }

    public function reclaimPartnerCouponsWithHttpInfo($request)
    {
        $resourcePath = '/v2/promotions/benefits/partner-coupons/reclaim';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimPartnerCouponsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimPartnerCouponsRequest');
    }

    /**
     * 企业主账号从企业子账号回收拨款
     *
     * 企业主账号在自建平台回收给企业子账号的拨款。
     * 
     * 如果回收的是企业子账户的信用账户，可以回收所有额度；如果回收金额大于子账户信用余额的时候，可能会导致子账户欠费，请慎重选择。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function reclaimSubEnterpriseAmount($request)
    {
        return $this->reclaimSubEnterpriseAmountWithHttpInfo($request);
    }

    public function reclaimSubEnterpriseAmountWithHttpInfo($request)
    {
        $resourcePath = '/v2/enterprises/multi-accounts/retrieve-amount';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimSubEnterpriseAmountResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimSubEnterpriseAmountRequest');
    }

    /**
     * 回收客户账户余额
     *
     * 当客户不再使用华为云产品时，合作伙伴可以回收代售类客户账户余额。
     * 
     * 伙伴登录伙伴中心回收代售类客户账户余额请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0072435147.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function reclaimToPartnerAccount($request)
    {
        return $this->reclaimToPartnerAccountWithHttpInfo($request);
    }

    public function reclaimToPartnerAccountWithHttpInfo($request)
    {
        $resourcePath = '/v2/accounts/partner-accounts/reclaim';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimToPartnerAccountResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimToPartnerAccountRequest');
    }

    /**
     * 续订包年/包月资源
     *
     * 客户的包年/包月资源即将到期时，可进行包年/包月资源的续订。
     * 
     * 客户在费用中心执行续订操作请参见[这里](https://support.huaweicloud.com/usermanual-billing/renewals_topic_10000003.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   调用接口后，如果某个主资源有对应的从资源，系统会将主资源和从资源一起续订，主资源的从资源信息可以通过调用[查询客户包年/包月资源列表](https://support.huaweicloud.com/api-oce/api_order_00021.html)接口获取。
     * &gt;-   注意：如ECS主机挂载新购的云硬盘，但此硬盘不是该ECS主资源的从资源，主从资源信息必须以调用[查询客户包年/包月资源列表](https://support.huaweicloud.com/api-oce/api_order_00021.html)接口获取的信息为准。
     * &gt;-   本接口支持自动支付，支付时使用折扣或优惠券的说明，请参见[支付使用折扣或优惠券说明](https://support.huaweicloud.com/api-oce/appendix_00001.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function renewalResources($request)
    {
        return $this->renewalResourcesWithHttpInfo($request);
    }

    public function renewalResourcesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\RenewalResourcesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\RenewalResourcesRequest');
    }

    /**
     * 发送短信验证码
     *
     * 企业主账号在自建平台发送短信验证码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function sendSmsVerificationCode($request)
    {
        return $this->sendSmsVerificationCodeWithHttpInfo($request);
    }

    public function sendSmsVerificationCodeWithHttpInfo($request)
    {
        $resourcePath = '/v2/enterprises/multi-accounts/sm-verification-code';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\SendSmsVerificationCodeResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\SendSmsVerificationCodeRequest');
    }

    /**
     * 发送验证码
     *
     * 客户注册时，如果填写了手机号，可以向对应的手机发送注册验证码，校验信息的正确性。使用个人银行卡方式进行实名认证时，通过该接口向指定的手机发送验证码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function sendVerificationMessageCode($request)
    {
        return $this->sendVerificationMessageCodeWithHttpInfo($request);
    }

    public function sendVerificationMessageCodeWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\SendVerificationMessageCodeResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\SendVerificationMessageCodeRequest');
    }

    /**
     * 查询账户余额
     *
     * 客户可以查询自身的账户余额。
     * 
     * 客户可以登录费用中心进入“[总览](https://account.huaweicloud.com/usercenter/#/userindex/allview)”页面，在“可用额度”区域可以查询自身的账户余额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCustomerAccountBalances($request)
    {
        return $this->showCustomerAccountBalancesWithHttpInfo($request);
    }

    public function showCustomerAccountBalancesWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ShowCustomerAccountBalancesResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ShowCustomerAccountBalancesRequest');
    }

    /**
     * 查询汇总账单
     *
     * 客户在自建平台查询自身的消费汇总账单，此账单按月汇总消费数据。
     * 
     * 客户登录费用中心查询自身的消费汇总账单请参见[这里](https://support.huaweicloud.com/usermanual-billing/bills-topic_80000001.html#bills-topic_80000001__zh-cn_topic_0000001162496407_s620ce713baf04899a416d781d1817931)的“**查看汇总**”。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;当前支持查看2019/01月份至今的费用账单。企业主账号展示的费用账单，包含关联的统一还款企业子账号的消费数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCustomerMonthlySum($request)
    {
        return $this->showCustomerMonthlySumWithHttpInfo($request);
    }

    public function showCustomerMonthlySumWithHttpInfo($request)
    {
        $resourcePath = '/v2/bills/customer-bills/monthly-sum';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['method'] !== null) {
            $queryParams['method'] = $localVarParams['method'];
        }
        if ($localVarParams['subCustomerId'] !== null) {
            $queryParams['sub_customer_id'] = $localVarParams['subCustomerId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ShowCustomerMonthlySumResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ShowCustomerMonthlySumRequest');
    }

    /**
     * 查询订单详情
     *
     * 客户可以在伙伴销售平台查看订单详情。
     * 
     * 客户登录费用中心查看订单详情请单击[这里](https://support.huaweicloud.com/usermanual-billing/order_topic_9000001.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;如果想查询某条订单下的资源信息，请调用“[查询客户包年/包月资源列表](https://support.huaweicloud.com/api-oce/api_order_00021.html)”接口在请求参数输入订单号进行查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCustomerOrderDetails($request)
    {
        return $this->showCustomerOrderDetailsWithHttpInfo($request);
    }

    public function showCustomerOrderDetailsWithHttpInfo($request)
    {
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ShowCustomerOrderDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ShowCustomerOrderDetailsRequest');
    }

    /**
     * 查询企业主账号可拨款余额
     *
     * 企业主账号在自建平台查询自己的可拨款余额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMultiAccountTransferAmount($request)
    {
        return $this->showMultiAccountTransferAmountWithHttpInfo($request);
    }

    public function showMultiAccountTransferAmountWithHttpInfo($request)
    {
        $resourcePath = '/v2/enterprises/multi-accounts/transfer-amount';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['balanceType'] !== null) {
            $queryParams['balance_type'] = $localVarParams['balanceType'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ShowMultiAccountTransferAmountResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ShowMultiAccountTransferAmountRequest');
    }

    /**
     * 查询实名认证审核结果
     *
     * 如果实名认证申请或实名认证变更申请的响应中，显示需要人工审核，使用该接口查询审核结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRealnameAuthenticationReviewResult($request)
    {
        return $this->showRealnameAuthenticationReviewResultWithHttpInfo($request);
    }

    public function showRealnameAuthenticationReviewResultWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ShowRealnameAuthenticationReviewResultResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ShowRealnameAuthenticationReviewResultRequest');
    }

    /**
     * 查询退款订单的金额详情
     *
     * 客户在伙伴销售平台查询某次退订订单或者降配订单的退款金额来自哪些资源和对应订单。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   可以在调用完“[退订包年/包月资源](https://support.huaweicloud.com/api-oce/api_order_00019.html)”接口生成退订订单ID后，调用该接口查询退订订单对应的金额所属资源和订单。例如，调用“[退订包年/包月资源](https://support.huaweicloud.com/api-oce/api_order_00019.html)”接口退订资源及其已续费周期后，您可以调用本小节的接口查询到退订金额归属的原开通订单ID和原续费订单ID。
     * &gt;-   2018年5月份之后退订的订单才能查询到归属的原订单ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRefundOrderDetails($request)
    {
        return $this->showRefundOrderDetailsWithHttpInfo($request);
    }

    public function showRefundOrderDetailsWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ShowRefundOrderDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ShowRefundOrderDetailsRequest');
    }

    /**
     * 向云经销商发放代金券额度
     *
     * 华为云总经销商（一级经销商）可以向云经销商（二级经销商）发放代金券额度。
     * 
     * 一级经销商在伙伴中心向二级经销商发放代金券额度请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/dp_120206.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCouponQuotas($request)
    {
        return $this->updateCouponQuotasWithHttpInfo($request);
    }

    public function updateCouponQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v2/partners/coupon-quotas/indirect-partner-adjust';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateCouponQuotasResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateCouponQuotasRequest');
    }

    /**
     * 向客户账户拨款
     *
     * 合作伙伴可以为代售类客户账户拨款。
     * 
     * 伙伴登录伙伴中心为代售类客户账户拨款请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0072435147.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCustomerAccountAmount($request)
    {
        return $this->updateCustomerAccountAmountWithHttpInfo($request);
    }

    public function updateCustomerAccountAmountWithHttpInfo($request)
    {
        $resourcePath = '/v2/accounts/partner-accounts/adjust-amount';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateCustomerAccountAmountResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateCustomerAccountAmountRequest');
    }

    /**
     * 向云经销商账户拨款
     *
     * 华为云总经销商（一级经销商）可以向云经销商（二级经销商）账户拨款。
     * 
     * 一级经销商在伙伴中心向二级经销商拨款请参见[这里](https://support.huaweicloud.com/usermanual-bpconsole/dp_120205.html)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateIndirectPartnerAccount($request)
    {
        return $this->updateIndirectPartnerAccountWithHttpInfo($request);
    }

    public function updateIndirectPartnerAccountWithHttpInfo($request)
    {
        $resourcePath = '/v2/accounts/partner-accounts/indirect-partner-adjust';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateIndirectPartnerAccountResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateIndirectPartnerAccountRequest');
    }

    /**
     * 设置或取消包年/包月资源到期转按需
     *
     * 客户可以设置包年/包月资源到期后转为按需资源计费。包年/包月计费模式到期后，按需的计费模式即生效。
     * 
     * 客户在费用中心设置包年包月资源到期转按需请参见[这里](https://support.huaweicloud.com/usermanual-billing/renewals_topic_50000003.html)。
     * 
     * &gt;![](public_sys-resources/icon-note.gif) **说明：**
     * &gt;-   客户需要成功支付包年/包月资源订单后，才能设置资源的到期转按需。
     * &gt;-   目前解决方案组合产品、按需套餐包不支持到期转按需。
     * &gt;-   在调用本接口前，您可以调用“[查询客户包年/包月资源列表](https://support.huaweicloud.com/api-oce/api_order_00021.html)”接口获取资源ID、资源过期时间以及资源过期后的扣费策略等信息。
     * &gt;-   设置包年/包月资源到期转按需后，包年/包月资源到期后将自动变成按需计费。
     * &gt;-   取消包年/包月资源到期转按需的前提是已经调用“[设置或取消包年/包月资源到期转按需](https://support.huaweicloud.com/api-oce/api_order_00024.html)”接口设置包年/包月资源的到期转按需或在调用“[续订包年/包月资源](https://support.huaweicloud.com/api-oce/api_order_00018.html)”接口时设置到期策略为到期转按需。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePeriodToOnDemand($request)
    {
        return $this->updatePeriodToOnDemandWithHttpInfo($request);
    }

    public function updatePeriodToOnDemandWithHttpInfo($request)
    {
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\UpdatePeriodToOnDemandResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\UpdatePeriodToOnDemandRequest');
    }

    /**
     * 修改邮寄地址
     *
     * 伙伴可以修改自己的邮寄地址信息。
     * 
     * 伙伴登录伙伴中心修改邮寄地址请参见[向华为云索取发票](https://support.huaweicloud.com/usermanual-bpconsole/zh-cn_topic_0072435143.html)，进入索取发票页面，选择修改邮寄地址，即可修改邮件地址。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePostal($request)
    {
        return $this->updatePostalWithHttpInfo($request);
    }

    public function updatePostalWithHttpInfo($request)
    {
        $resourcePath = '/v2/customers/postal-addresses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\UpdatePostalResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\UpdatePostalRequest');
    }

    /**
     * 企业主账号向企业子账号拨款
     *
     * 企业主账号在自建平台向企业子账号拨款。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSubEnterpriseAmount($request)
    {
        return $this->updateSubEnterpriseAmountWithHttpInfo($request);
    }

    public function updateSubEnterpriseAmountWithHttpInfo($request)
    {
        $resourcePath = '/v2/enterprises/multi-accounts/transfer-amount';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateSubEnterpriseAmountResponse',
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateSubEnterpriseAmountRequest');
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