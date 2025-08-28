<?php

namespace HuaweiCloud\SDK\Elb\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class ElbClient extends Client
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
        $client = new ClientBuilder(new ElbClient());
        return $client;
    }


    /**
     * 新增负载均衡器可用区
     *
     * 给负载均衡器新增可用区。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAddAvailableZones($request)
    {
        return $this->batchAddAvailableZonesWithHttpInfo($request);
    }

    public function batchAddAvailableZonesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/availability-zone/batch-add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchAddAvailableZonesResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchAddAvailableZonesRequest');
    }

    /**
     * 批量创建负载均衡器
     *
     * [批量创建独享型或者共享型负载均衡器，包括按需及包周期计费负载均衡器。](tag:hws)
     * [批量创建独享型或者共享型负载均衡器。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,dt,ctc,cmcc,sbc,hk_sbc)
     * [批量创建负载均衡器。](tag:hcso,hk_vdf,srg,fcs,tm,hk_tm,ct)
     * - 若要创建内网IPv4负载均衡器，则需要传入vip_subnet_cidr_id。
     * - 若要创建公网IPv4负载均衡器，则需要传入publicip，以及传入vpc_id和vip_subnet_cidr_id这两个参数中的一个。
     * - 若要绑定有已有公网IPv4地址，则需要传入publicip_ids，以及传入vpc_id和vip_subnet_cidr_id这两个参数中的一个。
     * - 若要创建内网双栈负载均衡器，则需要传入ipv6_vip_virsubnet_id。
     * - 若要创建公网双栈负载均衡器，则需要传入ipv6_vip_virsubnet_id和ipv6_bandwidth。
     * - 若要创建网络型负载均衡器，则需要传入l4_flavor_id（网络型规格ID）；若要创建应用型负载均衡器，则需要传入l7_flavor_id（应用型规格ID）；若要创建网络型+应用型负载均衡器，则需要传入l4_flavor_id和l7_flavor_id。
     * - 如果批量创建的负载均衡器数量大于1，则不支持绑定已有的公网IP，且不支持指定ipv4和ipv6地址。即number大于1时，不支持传入publicip_ids，vip_address和ipv6_vip_address字段。
     * [- 若要创建包周期负载均衡器，则需要传入prepaid_options，否则创建按需计费负载均衡器。](tag:hws)
     * - 按需计费分为固定规格计费和弹性规格计费，根据创建时所选规格的类型决定计费方式。具体规格说明见创建LB请求参数l4_flavor_id和l7_flavor_id。
     * - 异步接口，返回体中包含需要批量创建的负载均衡的ID列表和批量创建负载均衡器的job ID，可以通过job ID查询当前批量创建负载均衡器的进度。
     * - 批量创建独享型和共享型实例时，请求体传参规则有所不同，具体见请求体说明中各个参数的解释。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateLoadBalancers($request)
    {
        return $this->batchCreateLoadBalancersWithHttpInfo($request);
    }

    public function batchCreateLoadBalancersWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchCreateLoadBalancersResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchCreateLoadBalancersRequest');
    }

    /**
     * 批量创建后端服务器
     *
     * 在指定pool下批量创建后端服务器。一次最多创建200个。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateMembers($request)
    {
        return $this->batchCreateMembersWithHttpInfo($request);
    }

    public function batchCreateMembersWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members/batch-add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchCreateMembersResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchCreateMembersRequest');
    }

    /**
     * 批量删除后端服务器
     *
     * 在指定pool下批量删除后端服务器。一次最多添加200个。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteMembers($request)
    {
        return $this->batchDeleteMembersWithHttpInfo($request);
    }

    public function batchDeleteMembersWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchDeleteMembersResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchDeleteMembersRequest');
    }

    /**
     * 移除负载均衡器可用区
     *
     * 移除负载均衡器的可用区。
     * &gt; 移除可用区可能导致已有连接断开，请谨慎操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchRemoveAvailableZones($request)
    {
        return $this->batchRemoveAvailableZonesWithHttpInfo($request);
    }

    public function batchRemoveAvailableZonesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/availability-zone/batch-remove';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchRemoveAvailableZonesResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchRemoveAvailableZonesRequest');
    }

    /**
     * 批量更新后端服务器
     *
     * 在指定pool下批量更新后端服务器。一次最多添加200个。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateMembers($request)
    {
        return $this->batchUpdateMembersWithHttpInfo($request);
    }

    public function batchUpdateMembersWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members/batch-update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchUpdateMembersResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchUpdateMembersRequest');
    }

    /**
     * 批量更新转发策略优先级
     *
     * 批量更新转发策略的优先级。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdatePoliciesPriority($request)
    {
        return $this->batchUpdatePoliciesPriorityWithHttpInfo($request);
    }

    public function batchUpdatePoliciesPriorityWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/l7policies/batch-update-priority';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchUpdatePoliciesPriorityResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchUpdatePoliciesPriorityRequest');
    }

    /**
     * 变更负载均衡器计费模式
     *
     * 负载均衡器计费模式变更，当前支持的计费模式变更为：
     * 1. 按需计费转包周期计费。
     * 2. 按需按规格计费转按需按使用量计费。
     * 3. 按需按使用量计费转按需按规格计费。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeLoadbalancerChargeMode($request)
    {
        return $this->changeLoadbalancerChargeModeWithHttpInfo($request);
    }

    public function changeLoadbalancerChargeModeWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/change-charge-mode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ChangeLoadbalancerChargeModeResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ChangeLoadbalancerChargeModeRequest');
    }

    /**
     * 复制已有负载均衡器
     *
     * 复制已有的负载均衡器实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cloneLoadbalancer($request)
    {
        return $this->cloneLoadbalancerWithHttpInfo($request);
    }

    public function cloneLoadbalancerWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/clone';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CloneLoadbalancerResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CloneLoadbalancerRequest');
    }

    /**
     * 创建证书
     *
     * 创建用于弹性负载均衡器HTTPS/TLS/QUIC协议监听器的证书。支持关联云证书管理服务(CCM)的证书，或者使用自有证书。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCertificate($request)
    {
        return $this->createCertificateWithHttpInfo($request);
    }

    public function createCertificateWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateCertificateResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateCertificateRequest');
    }

    /**
     * 修改证书私钥字段回显开关
     *
     * 开启或关闭ELB证书的私钥字段回显开关。该开关用于设置各个ELB证书接口的响应字段private_key和enc_private_key是否展示。若开启则证书的详情、列表、更新和创建接口返回私钥内容；不开启则返回脱敏后内容（******）。该开关影响整个租户项目（project），默认开启。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCertificatePrivateKeyEcho($request)
    {
        return $this->createCertificatePrivateKeyEchoWithHttpInfo($request);
    }

    public function createCertificatePrivateKeyEchoWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/certificates/settings/private-key-echo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateCertificatePrivateKeyEchoResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateCertificatePrivateKeyEchoRequest');
    }

    /**
     * 创建健康检查
     *
     * 创建健康检查。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createHealthMonitor($request)
    {
        return $this->createHealthMonitorWithHttpInfo($request);
    }

    public function createHealthMonitorWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/healthmonitors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateHealthMonitorResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateHealthMonitorRequest');
    }

    /**
     * 创建转发策略
     *
     * 创建七层转发策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createL7Policy($request)
    {
        return $this->createL7PolicyWithHttpInfo($request);
    }

    public function createL7PolicyWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/l7policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateL7PolicyResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateL7PolicyRequest');
    }

    /**
     * 创建转发规则
     *
     * 创建七层转发规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createL7Rule($request)
    {
        return $this->createL7RuleWithHttpInfo($request);
    }

    public function createL7RuleWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateL7RuleResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateL7RuleRequest');
    }

    /**
     * 创建监听器
     *
     * 创建监听器。支持通过该接口创建独享型及共享型LB实例下的监听器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createListener($request)
    {
        return $this->createListenerWithHttpInfo($request);
    }

    public function createListenerWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/listeners';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateListenerResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateListenerRequest');
    }

    /**
     * 创建负载均衡器
     *
     * [创建独享型负载均衡器，包括按需及包周期计费负载均衡器。](tag:hws)
     * [创建独享型负载均衡器。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,dt,ctc,cmcc,sbc,hk_sbc)
     * [创建负载均衡器。](tag:hcso,hk_vdf,srg,fcs,tm,hk_tm,ct)
     * 
     * - 若要创建内网IPv4负载均衡器，则需要传入vip_subnet_cidr_id。
     * - 若要创建公网IPv4负载均衡器，则需要传入publicip，以及传入vpc_id和vip_subnet_cidr_id这两个参数中的一个。
     * - 若要绑定有已有公网IPv4地址，则需要传入publicip_ids，以及传入vpc_id和vip_subnet_cidr_id这两个参数中的一个。
     * - 若要创建内网双栈负载均衡器，则需要传入ipv6_vip_virsubnet_id。
     * - 若要创建公网双栈负载均衡器，则需要传入ipv6_vip_virsubnet_id和ipv6_bandwidth。
     * - 若要创建网络型负载均衡器，则需要传入l4_flavor_id（网络型规格ID）；若要创建应用型负载均衡器，则需要传入l7_flavor_id（应用型规格ID）；若要创建网络型+应用型负载均衡器，则需要传入l4_flavor_id和l7_flavor_id。
     * [- 若要创建包周期负载均衡器，则需要传入prepaid_options，否则创建按需计费负载均衡器。](tag:hws)
     * - 按需计费分为固定规格计费和弹性规格计费，根据创建时所选规格的类型决定计费方式。具体规格说明见创建LB请求参数l4_flavor_id和l7_flavor_id。
     * [- 若要创建gateway类型的负载均衡器，则需要：
     * - 指定loadbalancer_type&#x3D;\&quot;gateway\&quot;，且不支持指定vip_address，ipv6_vip_address。
     * - vip_subnet_cidr_id和ipv6_subnet_cidr_id两者不能都为空，如果两者都传入，则必须属于同一子网。
     * - 不支持创建公网gateway类型LB。
     * - 如果要指定规格，则从请求参数gw_flavor_id传入。](tag:hws_eu)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLoadBalancer($request)
    {
        return $this->createLoadBalancerWithHttpInfo($request);
    }

    public function createLoadBalancerWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateLoadBalancerResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateLoadBalancerRequest');
    }

    /**
     * 创建云日志
     *
     * 创建云日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLogtank($request)
    {
        return $this->createLogtankWithHttpInfo($request);
    }

    public function createLogtankWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/logtanks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateLogtankResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateLogtankRequest');
    }

    /**
     * 创建主备后端服务器组
     *
     * 创建主备后端服务器组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMasterSlavePool($request)
    {
        return $this->createMasterSlavePoolWithHttpInfo($request);
    }

    public function createMasterSlavePoolWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/master-slave-pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateMasterSlavePoolResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateMasterSlavePoolRequest');
    }

    /**
     * 创建后端服务器
     *
     * 创建后端服务器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMember($request)
    {
        return $this->createMemberWithHttpInfo($request);
    }

    public function createMemberWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateMemberResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateMemberRequest');
    }

    /**
     * 创建后端服务器检测任务
     *
     * 创建后端服务器检测任务。包括后端服务器的配置、ACL规则和安全组规则检查。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMemberHealthCheckJob($request)
    {
        return $this->createMemberHealthCheckJobWithHttpInfo($request);
    }

    public function createMemberHealthCheckJobWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/members/{member_id}/health-check';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['memberId'] !== null) {
            $pathParams['member_id'] = $localVarParams['memberId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateMemberHealthCheckJobResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateMemberHealthCheckJobRequest');
    }

    /**
     * 创建后端服务器组
     *
     * 创建后端服务器组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPool($request)
    {
        return $this->createPoolWithHttpInfo($request);
    }

    public function createPoolWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreatePoolResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreatePoolRequest');
    }

    /**
     * 创建自定义安全策略
     *
     * 创建自定义安全策略。用于在创建HTTPS/TLS监听器时，请求参数中指定security_policy_id来设置监听器的自定义安全策略。
     * 
     * [荷兰region不支持自定义安全策略功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecurityPolicy($request)
    {
        return $this->createSecurityPolicyWithHttpInfo($request);
    }

    public function createSecurityPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/security-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateSecurityPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateSecurityPolicyRequest');
    }

    /**
     * 删除证书
     *
     * 删除ELB证书。若是删除source&#x3D;scm的证书，关联的云证书管理服务（CCM）中的证书不会被删除。若想删除已关联到监听器的证书，则需要先解除监听器和证书的绑定关系。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCertificate($request)
    {
        return $this->deleteCertificateWithHttpInfo($request);
    }

    public function deleteCertificateWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteCertificateResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteCertificateRequest');
    }

    /**
     * 删除健康检查
     *
     * 删除健康检查。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHealthMonitor($request)
    {
        return $this->deleteHealthMonitorWithHttpInfo($request);
    }

    public function deleteHealthMonitorWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/healthmonitors/{healthmonitor_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['healthmonitorId'] !== null) {
            $pathParams['healthmonitor_id'] = $localVarParams['healthmonitorId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteHealthMonitorResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteHealthMonitorRequest');
    }

    /**
     * 删除转发策略
     *
     * 删除七层转发策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteL7Policy($request)
    {
        return $this->deleteL7PolicyWithHttpInfo($request);
    }

    public function deleteL7PolicyWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteL7PolicyResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteL7PolicyRequest');
    }

    /**
     * 删除转发规则
     *
     * 删除七层转发规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteL7Rule($request)
    {
        return $this->deleteL7RuleWithHttpInfo($request);
    }

    public function deleteL7RuleWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}/rules/{l7rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }
        if ($localVarParams['l7ruleId'] !== null) {
            $pathParams['l7rule_id'] = $localVarParams['l7ruleId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteL7RuleResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteL7RuleRequest');
    }

    /**
     * 删除监听器
     *
     * 删除监听器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteListener($request)
    {
        return $this->deleteListenerWithHttpInfo($request);
    }

    public function deleteListenerWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/listeners/{listener_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['listenerId'] !== null) {
            $pathParams['listener_id'] = $localVarParams['listenerId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteListenerResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteListenerRequest');
    }

    /**
     * 级联删除监听器
     *
     * 删除监听器且级联删除其下子资源（删除监听器、转发策略等，解绑后端服务器组）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteListenerForce($request)
    {
        return $this->deleteListenerForceWithHttpInfo($request);
    }

    public function deleteListenerForceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/listeners/{listener_id}/force';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['listenerId'] !== null) {
            $pathParams['listener_id'] = $localVarParams['listenerId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteListenerForceResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteListenerForceRequest');
    }

    /**
     * 删除负载均衡器
     *
     * 删除负载均衡器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLoadBalancer($request)
    {
        return $this->deleteLoadBalancerWithHttpInfo($request);
    }

    public function deleteLoadBalancerWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLoadBalancerResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLoadBalancerRequest');
    }

    /**
     * 级联删除负载均衡器及关联EIP
     *
     * 删除负载均衡器且级联删除其下子资源（删除负载均衡器及其绑定的监听器、后端服务器等一系列资源）。以及根据需要删除或解绑后端服务器组和LB关联的EIP。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLoadBalancerCascade($request)
    {
        return $this->deleteLoadBalancerCascadeWithHttpInfo($request);
    }

    public function deleteLoadBalancerCascadeWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/delete-cascade';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
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
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLoadBalancerCascadeResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLoadBalancerCascadeRequest');
    }

    /**
     * 级联删除负载均衡器
     *
     * 删除负载均衡器且级联删除其下子资源（删除负载均衡器及其绑定的监听器、后端服务器组、后端服务器等一系列资源）。
     * - 若LB关联了EIP，则只解绑EIP，不会删除EIP。
     * [- 若已开启多挂特性，且关联了多个LB，则只做解绑；否则删除。
     * - 若是共享型LB下的后端服务器组，无论是否多挂都只删除，不解绑。](tag:hc,hk)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLoadBalancerForce($request)
    {
        return $this->deleteLoadBalancerForceWithHttpInfo($request);
    }

    public function deleteLoadBalancerForceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLoadBalancerForceResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLoadBalancerForceRequest');
    }

    /**
     * 删除云日志
     *
     * 删除云日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLogtank($request)
    {
        return $this->deleteLogtankWithHttpInfo($request);
    }

    public function deleteLogtankWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/logtanks/{logtank_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logtankId'] !== null) {
            $pathParams['logtank_id'] = $localVarParams['logtankId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLogtankResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteLogtankRequest');
    }

    /**
     * 删除主备后端服务器组
     *
     * 删除主备后端服务器组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMasterSlavePool($request)
    {
        return $this->deleteMasterSlavePoolWithHttpInfo($request);
    }

    public function deleteMasterSlavePoolWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/master-slave-pools/{pool_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteMasterSlavePoolResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteMasterSlavePoolRequest');
    }

    /**
     * 删除后端服务器
     *
     * 删除后端服务器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMember($request)
    {
        return $this->deleteMemberWithHttpInfo($request);
    }

    public function deleteMemberWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members/{member_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['memberId'] !== null) {
            $pathParams['member_id'] = $localVarParams['memberId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteMemberResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteMemberRequest');
    }

    /**
     * 删除后端服务器组
     *
     * 删除后端服务器组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePool($request)
    {
        return $this->deletePoolWithHttpInfo($request);
    }

    public function deletePoolWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeletePoolResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeletePoolRequest');
    }

    /**
     * 级联删除后端服务器组
     *
     * 级联删除后端服务器组，包含在此后端服务器组下的所有后端服务器和健康检查也将被删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePoolCascade($request)
    {
        return $this->deletePoolCascadeWithHttpInfo($request);
    }

    public function deletePoolCascadeWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/delete-cascade';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeletePoolCascadeResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeletePoolCascadeRequest');
    }

    /**
     * 销毁回收站负载均衡器
     *
     * 销毁回收站负载均衡器。销毁后无法再还原。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRecycleLoadBalancer($request)
    {
        return $this->deleteRecycleLoadBalancerWithHttpInfo($request);
    }

    public function deleteRecycleLoadBalancerWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/recycle-bin/loadbalancers/{loadbalancer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteRecycleLoadBalancerResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteRecycleLoadBalancerRequest');
    }

    /**
     * 删除自定义安全策略
     *
     * 删除自定义安全策略。[荷兰region不支持自定义安全策略功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecurityPolicy($request)
    {
        return $this->deleteSecurityPolicyWithHttpInfo($request);
    }

    public function deleteSecurityPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/security-policies/{security_policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['securityPolicyId'] !== null) {
            $pathParams['security_policy_id'] = $localVarParams['securityPolicyId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteSecurityPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteSecurityPolicyRequest');
    }

    /**
     * 后端服务器全局列表
     *
     * 查询当前项目下的后端服务器列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllMembers($request)
    {
        return $this->listAllMembersWithHttpInfo($request);
    }

    public function listAllMembersWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['weight'] !== null) {
            $queryParams['weight'] = $localVarParams['weight'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['subnetCidrId'] !== null) {
            $queryParams['subnet_cidr_id'] = $localVarParams['subnetCidrId'];
        }
        if ($localVarParams['address'] !== null) {
            $queryParams['address'] = $localVarParams['address'];
        }
        if ($localVarParams['protocolPort'] !== null) {
            $queryParams['protocol_port'] = $localVarParams['protocolPort'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['operatingStatus'] !== null) {
            $queryParams['operating_status'] = $localVarParams['operatingStatus'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['poolId'] !== null) {
            $queryParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $queryParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListAllMembersResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListAllMembersRequest');
    }

    /**
     * 查询可用区列表
     *
     * 返回租户创建LB时可使用的可用区集合列表情况。
     * 
     * - 默认情况下，会返回一个可用区集合。
     * 在（如创建LB）设置可用区时，填写的可用区必须包含在可用区集合中、为这个可用区集合的子集。
     * 
     * - 如果传入了loadbalancer_id，则返回该负载均衡器所在集群的可用区集合
     * 
     * - 特殊场景下，部分客户要求负载均衡只能创建在指定可用区集合中，此时会返回客户定制的可用区集合。
     * 返回可用区集合可能为一个也可能为多个，比如列表有两个可用区集合\\[az1,az2\\],\\[az2,az3\\]。
     * 在创建负载均衡器时，可以选择创建在多个可用区，但所选的多个可用区必须同属于其中一个可用区集合，
     * 如可以选az2和az3，但不能选择az1和az3。你可以选择多个可用区，只要这些可用区在一个子集中
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAvailabilityZones($request)
    {
        return $this->listAvailabilityZonesWithHttpInfo($request);
    }

    public function listAvailabilityZonesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/availability-zones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['publicBorderGroup'] !== null) {
            $queryParams['public_border_group'] = $localVarParams['publicBorderGroup'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $queryParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListAvailabilityZonesResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListAvailabilityZonesRequest');
    }

    /**
     * 查询证书列表
     *
     * 查询ELB证书列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCertificates($request)
    {
        return $this->listCertificatesWithHttpInfo($request);
    }

    public function listCertificatesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['domain'] !== null) {
            $queryParams['domain'] = $localVarParams['domain'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['scmCertificateId'] !== null) {
            $queryParams['scm_certificate_id'] = $localVarParams['scmCertificateId'];
        }
        if ($localVarParams['commonName'] !== null) {
            $queryParams['common_name'] = $localVarParams['commonName'];
        }
        if ($localVarParams['fingerprint'] !== null) {
            $queryParams['fingerprint'] = $localVarParams['fingerprint'];
        }
        if ($localVarParams['source'] !== null) {
            $queryParams['source'] = $localVarParams['source'];
        }
        if ($localVarParams['protectionStatus'] !== null) {
            $queryParams['protection_status'] = $localVarParams['protectionStatus'];
        }
        if ($localVarParams['protectionReason'] !== null) {
            $queryParams['protection_reason'] = $localVarParams['protectionReason'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListCertificatesResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListCertificatesRequest');
    }

    /**
     * 查询当前租户ELB服务的特性配置
     *
     * 查询当前租户ELB服务的特性配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFeatureConfigs($request)
    {
        return $this->listFeatureConfigsWithHttpInfo($request);
    }

    public function listFeatureConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/feature/configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['feature'] !== null) {
            $queryParams['feature'] = $localVarParams['feature'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListFeatureConfigsResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListFeatureConfigsRequest');
    }

    /**
     * 查询规格列表
     *
     * 查询当前局点可用的负载均衡器规格。用于在创建独享型负载均衡器时指定4层或7层规格。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFlavors($request)
    {
        return $this->listFlavorsWithHttpInfo($request);
    }

    public function listFlavorsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['shared'] !== null) {
            $queryParams['shared'] = $localVarParams['shared'];
        }
        if ($localVarParams['publicBorderGroup'] !== null) {
            $queryParams['public_border_group'] = $localVarParams['publicBorderGroup'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['listAll'] !== null) {
            $queryParams['list_all'] = $localVarParams['listAll'];
        }
        if ($localVarParams['flavorSoldOut'] !== null) {
            $queryParams['flavor_sold_out'] = $localVarParams['flavorSoldOut'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListFlavorsResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListFlavorsRequest');
    }

    /**
     * 查询健康检查列表
     *
     * 健康检查列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHealthMonitors($request)
    {
        return $this->listHealthMonitorsWithHttpInfo($request);
    }

    public function listHealthMonitorsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/healthmonitors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['monitorPort'] !== null) {
            $queryParams['monitor_port'] = $localVarParams['monitorPort'];
        }
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['delay'] !== null) {
            $queryParams['delay'] = $localVarParams['delay'];
        }
        if ($localVarParams['maxRetries'] !== null) {
            $queryParams['max_retries'] = $localVarParams['maxRetries'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['maxRetriesDown'] !== null) {
            $queryParams['max_retries_down'] = $localVarParams['maxRetriesDown'];
        }
        if ($localVarParams['timeout'] !== null) {
            $queryParams['timeout'] = $localVarParams['timeout'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['expectedCodes'] !== null) {
            $queryParams['expected_codes'] = $localVarParams['expectedCodes'];
        }
        if ($localVarParams['urlPath'] !== null) {
            $queryParams['url_path'] = $localVarParams['urlPath'];
        }
        if ($localVarParams['httpMethod'] !== null) {
            $queryParams['http_method'] = $localVarParams['httpMethod'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListHealthMonitorsResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListHealthMonitorsRequest');
    }

    /**
     * 查询异步任务的job列表
     *
     * 用于查询实例复制、实例升级等异步接口任务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJobs($request)
    {
        return $this->listJobsWithHttpInfo($request);
    }

    public function listJobsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['jobId'] !== null) {
            $queryParams['job_id'] = $localVarParams['jobId'];
        }
        if ($localVarParams['jobType'] !== null) {
            $queryParams['job_type'] = $localVarParams['jobType'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['errorCode'] !== null) {
            $queryParams['error_code'] = $localVarParams['errorCode'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListJobsResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListJobsRequest');
    }

    /**
     * 查询转发策略列表
     *
     * 查询七层转发策略列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listL7Policies($request)
    {
        return $this->listL7PoliciesWithHttpInfo($request);
    }

    public function listL7PoliciesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/l7policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['listenerId'] !== null) {
            $queryParams['listener_id'] = $localVarParams['listenerId'];
        }
        if ($localVarParams['position'] !== null) {
            $queryParams['position'] = $localVarParams['position'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['redirectUrl'] !== null) {
            $queryParams['redirect_url'] = $localVarParams['redirectUrl'];
        }
        if ($localVarParams['redirectPoolId'] !== null) {
            $queryParams['redirect_pool_id'] = $localVarParams['redirectPoolId'];
        }
        if ($localVarParams['redirectListenerId'] !== null) {
            $queryParams['redirect_listener_id'] = $localVarParams['redirectListenerId'];
        }
        if ($localVarParams['provisioningStatus'] !== null) {
            $queryParams['provisioning_status'] = $localVarParams['provisioningStatus'];
        }
        if ($localVarParams['displayAllRules'] !== null) {
            $queryParams['display_all_rules'] = $localVarParams['displayAllRules'];
        }
        if ($localVarParams['priority'] !== null) {
            $queryParams['priority'] = $localVarParams['priority'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListL7PoliciesResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListL7PoliciesRequest');
    }

    /**
     * 查询转发规则列表
     *
     * 查询转发规则列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listL7Rules($request)
    {
        return $this->listL7RulesWithHttpInfo($request);
    }

    public function listL7RulesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['compareType'] !== null) {
            $queryParams['compare_type'] = $localVarParams['compareType'];
        }
        if ($localVarParams['provisioningStatus'] !== null) {
            $queryParams['provisioning_status'] = $localVarParams['provisioningStatus'];
        }
        if ($localVarParams['invert'] !== null) {
            $queryParams['invert'] = $localVarParams['invert'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['value'] !== null) {
            $queryParams['value'] = $localVarParams['value'];
        }
        if ($localVarParams['key'] !== null) {
            $queryParams['key'] = $localVarParams['key'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListL7RulesResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListL7RulesRequest');
    }

    /**
     * 查询监听器列表
     *
     * 查询监听器列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listListeners($request)
    {
        return $this->listListenersWithHttpInfo($request);
    }

    public function listListenersWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/listeners';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['protocolPort'] !== null) {
            $queryParams['protocol_port'] = $localVarParams['protocolPort'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['defaultTlsContainerRef'] !== null) {
            $queryParams['default_tls_container_ref'] = $localVarParams['defaultTlsContainerRef'];
        }
        if ($localVarParams['clientCaTlsContainerRef'] !== null) {
            $queryParams['client_ca_tls_container_ref'] = $localVarParams['clientCaTlsContainerRef'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['includeRecycleBin'] !== null) {
            $queryParams['include_recycle_bin'] = $localVarParams['includeRecycleBin'];
        }
        if ($localVarParams['connectionLimit'] !== null) {
            $queryParams['connection_limit'] = $localVarParams['connectionLimit'];
        }
        if ($localVarParams['defaultPoolId'] !== null) {
            $queryParams['default_pool_id'] = $localVarParams['defaultPoolId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['http2Enable'] !== null) {
            $queryParams['http2_enable'] = $localVarParams['http2Enable'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $queryParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['tlsCiphersPolicy'] !== null) {
            $queryParams['tls_ciphers_policy'] = $localVarParams['tlsCiphersPolicy'];
        }
        if ($localVarParams['memberAddress'] !== null) {
            $queryParams['member_address'] = $localVarParams['memberAddress'];
        }
        if ($localVarParams['memberDeviceId'] !== null) {
            $queryParams['member_device_id'] = $localVarParams['memberDeviceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['enableMemberRetry'] !== null) {
            $queryParams['enable_member_retry'] = $localVarParams['enableMemberRetry'];
        }
        if ($localVarParams['memberTimeout'] !== null) {
            $queryParams['member_timeout'] = $localVarParams['memberTimeout'];
        }
        if ($localVarParams['clientTimeout'] !== null) {
            $queryParams['client_timeout'] = $localVarParams['clientTimeout'];
        }
        if ($localVarParams['keepaliveTimeout'] !== null) {
            $queryParams['keepalive_timeout'] = $localVarParams['keepaliveTimeout'];
        }
        if ($localVarParams['transparentClientIpEnable'] !== null) {
            $queryParams['transparent_client_ip_enable'] = $localVarParams['transparentClientIpEnable'];
        }
        if ($localVarParams['proxyProtocolEnable'] !== null) {
            $queryParams['proxy_protocol_enable'] = $localVarParams['proxyProtocolEnable'];
        }
        if ($localVarParams['enhanceL7policyEnable'] !== null) {
            $queryParams['enhance_l7policy_enable'] = $localVarParams['enhanceL7policyEnable'];
        }
        if ($localVarParams['memberInstanceId'] !== null) {
            $queryParams['member_instance_id'] = $localVarParams['memberInstanceId'];
        }
        if ($localVarParams['protectionStatus'] !== null) {
            $queryParams['protection_status'] = $localVarParams['protectionStatus'];
        }
        if ($localVarParams['sslEarlyDataEnable'] !== null) {
            $queryParams['ssl_early_data_enable'] = $localVarParams['sslEarlyDataEnable'];
        }
        if ($localVarParams['nat64Enable'] !== null) {
            $queryParams['nat64_enable'] = $localVarParams['nat64Enable'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListListenersResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListListenersRequest');
    }

    /**
     * 查询负载均衡器列表
     *
     * 查询负载均衡器列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLoadBalancers($request)
    {
        return $this->listLoadBalancersWithHttpInfo($request);
    }

    public function listLoadBalancersWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['includeRecycleBin'] !== null) {
            $queryParams['include_recycle_bin'] = $localVarParams['includeRecycleBin'];
        }
        if ($localVarParams['provisioningStatus'] !== null) {
            $queryParams['provisioning_status'] = $localVarParams['provisioningStatus'];
        }
        if ($localVarParams['operatingStatus'] !== null) {
            $queryParams['operating_status'] = $localVarParams['operatingStatus'];
        }
        if ($localVarParams['guaranteed'] !== null) {
            $queryParams['guaranteed'] = $localVarParams['guaranteed'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['vipPortId'] !== null) {
            $queryParams['vip_port_id'] = $localVarParams['vipPortId'];
        }
        if ($localVarParams['vipAddress'] !== null) {
            $queryParams['vip_address'] = $localVarParams['vipAddress'];
        }
        if ($localVarParams['vipSubnetCidrId'] !== null) {
            $queryParams['vip_subnet_cidr_id'] = $localVarParams['vipSubnetCidrId'];
        }
        if ($localVarParams['ipv6VipPortId'] !== null) {
            $queryParams['ipv6_vip_port_id'] = $localVarParams['ipv6VipPortId'];
        }
        if ($localVarParams['ipv6VipAddress'] !== null) {
            $queryParams['ipv6_vip_address'] = $localVarParams['ipv6VipAddress'];
        }
        if ($localVarParams['ipv6VipVirsubnetId'] !== null) {
            $queryParams['ipv6_vip_virsubnet_id'] = $localVarParams['ipv6VipVirsubnetId'];
        }
        if ($localVarParams['eips'] !== null) {
            $queryParams['eips'] = $localVarParams['eips'];
        }
        if ($localVarParams['publicips'] !== null) {
            $queryParams['publicips'] = $localVarParams['publicips'];
        }
        if ($localVarParams['availabilityZoneList'] !== null) {
            $queryParams['availability_zone_list'] = $localVarParams['availabilityZoneList'];
        }
        if ($localVarParams['l4FlavorId'] !== null) {
            $queryParams['l4_flavor_id'] = $localVarParams['l4FlavorId'];
        }
        if ($localVarParams['l4ScaleFlavorId'] !== null) {
            $queryParams['l4_scale_flavor_id'] = $localVarParams['l4ScaleFlavorId'];
        }
        if ($localVarParams['l7FlavorId'] !== null) {
            $queryParams['l7_flavor_id'] = $localVarParams['l7FlavorId'];
        }
        if ($localVarParams['l7ScaleFlavorId'] !== null) {
            $queryParams['l7_scale_flavor_id'] = $localVarParams['l7ScaleFlavorId'];
        }
        if ($localVarParams['billingInfo'] !== null) {
            $queryParams['billing_info'] = $localVarParams['billingInfo'];
        }
        if ($localVarParams['memberDeviceId'] !== null) {
            $queryParams['member_device_id'] = $localVarParams['memberDeviceId'];
        }
        if ($localVarParams['memberAddress'] !== null) {
            $queryParams['member_address'] = $localVarParams['memberAddress'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['deletionProtectionEnable'] !== null) {
            $queryParams['deletion_protection_enable'] = $localVarParams['deletionProtectionEnable'];
        }
        if ($localVarParams['elbVirsubnetType'] !== null) {
            $queryParams['elb_virsubnet_type'] = $localVarParams['elbVirsubnetType'];
        }
        if ($localVarParams['autoscaling'] !== null) {
            $queryParams['autoscaling'] = $localVarParams['autoscaling'];
        }
        if ($localVarParams['protectionStatus'] !== null) {
            $queryParams['protection_status'] = $localVarParams['protectionStatus'];
        }
        if ($localVarParams['globalEips'] !== null) {
            $queryParams['global_eips'] = $localVarParams['globalEips'];
        }
        if ($localVarParams['logTopicId'] !== null) {
            $queryParams['log_topic_id'] = $localVarParams['logTopicId'];
        }
        if ($localVarParams['logGroupId'] !== null) {
            $queryParams['log_group_id'] = $localVarParams['logGroupId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListLoadBalancersResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListLoadBalancersRequest');
    }

    /**
     * 查询指定ELB实例的特性配置
     *
     * 查询指定ELB实例的特性配置情况。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLoadbalancerFeature($request)
    {
        return $this->listLoadbalancerFeatureWithHttpInfo($request);
    }

    public function listLoadbalancerFeatureWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/features';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListLoadbalancerFeatureResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListLoadbalancerFeatureRequest');
    }

    /**
     * 查询云日志列表
     *
     * 查询云日志列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogtanks($request)
    {
        return $this->listLogtanksWithHttpInfo($request);
    }

    public function listLogtanksWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/logtanks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $queryParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['logGroupId'] !== null) {
            $queryParams['log_group_id'] = $localVarParams['logGroupId'];
        }
        if ($localVarParams['logTopicId'] !== null) {
            $queryParams['log_topic_id'] = $localVarParams['logTopicId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListLogtanksResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListLogtanksRequest');
    }

    /**
     * 查询主备后端服务器组列表
     *
     * 主备后端服务器组列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMasterSlavePools($request)
    {
        return $this->listMasterSlavePoolsWithHttpInfo($request);
    }

    public function listMasterSlavePoolsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/master-slave-pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['healthmonitorId'] !== null) {
            $queryParams['healthmonitor_id'] = $localVarParams['healthmonitorId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $queryParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['lbAlgorithm'] !== null) {
            $queryParams['lb_algorithm'] = $localVarParams['lbAlgorithm'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['memberAddress'] !== null) {
            $queryParams['member_address'] = $localVarParams['memberAddress'];
        }
        if ($localVarParams['memberDeviceId'] !== null) {
            $queryParams['member_device_id'] = $localVarParams['memberDeviceId'];
        }
        if ($localVarParams['listenerId'] !== null) {
            $queryParams['listener_id'] = $localVarParams['listenerId'];
        }
        if ($localVarParams['memberInstanceId'] !== null) {
            $queryParams['member_instance_id'] = $localVarParams['memberInstanceId'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['connectionDrain'] !== null) {
            $queryParams['connection_drain'] = $localVarParams['connectionDrain'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListMasterSlavePoolsResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListMasterSlavePoolsRequest');
    }

    /**
     * 查询后端服务器列表
     *
     * Pool下的后端服务器列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMembers($request)
    {
        return $this->listMembersWithHttpInfo($request);
    }

    public function listMembersWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['weight'] !== null) {
            $queryParams['weight'] = $localVarParams['weight'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['subnetCidrId'] !== null) {
            $queryParams['subnet_cidr_id'] = $localVarParams['subnetCidrId'];
        }
        if ($localVarParams['address'] !== null) {
            $queryParams['address'] = $localVarParams['address'];
        }
        if ($localVarParams['protocolPort'] !== null) {
            $queryParams['protocol_port'] = $localVarParams['protocolPort'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['operatingStatus'] !== null) {
            $queryParams['operating_status'] = $localVarParams['operatingStatus'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['memberType'] !== null) {
            $queryParams['member_type'] = $localVarParams['memberType'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['availabilityZone'] !== null) {
            $queryParams['availability_zone'] = $localVarParams['availabilityZone'];
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListMembersResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListMembersRequest');
    }

    /**
     * 查询后端服务器组列表
     *
     * 查询后端服务器组列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPools($request)
    {
        return $this->listPoolsWithHttpInfo($request);
    }

    public function listPoolsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['healthmonitorId'] !== null) {
            $queryParams['healthmonitor_id'] = $localVarParams['healthmonitorId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $queryParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['lbAlgorithm'] !== null) {
            $queryParams['lb_algorithm'] = $localVarParams['lbAlgorithm'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['memberAddress'] !== null) {
            $queryParams['member_address'] = $localVarParams['memberAddress'];
        }
        if ($localVarParams['memberDeviceId'] !== null) {
            $queryParams['member_device_id'] = $localVarParams['memberDeviceId'];
        }
        if ($localVarParams['memberDeletionProtectionEnable'] !== null) {
            $queryParams['member_deletion_protection_enable'] = $localVarParams['memberDeletionProtectionEnable'];
        }
        if ($localVarParams['listenerId'] !== null) {
            $queryParams['listener_id'] = $localVarParams['listenerId'];
        }
        if ($localVarParams['memberInstanceId'] !== null) {
            $queryParams['member_instance_id'] = $localVarParams['memberInstanceId'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['protectionStatus'] !== null) {
            $queryParams['protection_status'] = $localVarParams['protectionStatus'];
        }
        if ($localVarParams['connectionDrain'] !== null) {
            $queryParams['connection_drain'] = $localVarParams['connectionDrain'];
        }
        if ($localVarParams['poolHealth'] !== null) {
            $queryParams['pool_health'] = $localVarParams['poolHealth'];
        }
        if ($localVarParams['anyPortEnable'] !== null) {
            $queryParams['any_port_enable'] = $localVarParams['anyPortEnable'];
        }
        if ($localVarParams['publicBorderGroup'] !== null) {
            $queryParams['public_border_group'] = $localVarParams['publicBorderGroup'];
        }
        if ($localVarParams['quicCidLen'] !== null) {
            $queryParams['quic_cid_len'] = $localVarParams['quicCidLen'];
        }
        if ($localVarParams['quicCidOffset'] !== null) {
            $queryParams['quic_cid_offset'] = $localVarParams['quicCidOffset'];
        }
        if ($localVarParams['azAffinity'] !== null) {
            $queryParams['az_affinity'] = $localVarParams['azAffinity'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListPoolsResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListPoolsRequest');
    }

    /**
     * 查询配额使用详情
     *
     * 查询负载均衡服务相关的各类资源的当前配额和已使用配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQuotaDetails($request)
    {
        return $this->listQuotaDetailsWithHttpInfo($request);
    }

    public function listQuotaDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/quotas/details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['quotaKey'] !== null) {
            $queryParams['quota_key'] = $localVarParams['quotaKey'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListQuotaDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListQuotaDetailsRequest');
    }

    /**
     * 查询回收站负载均衡器列表
     *
     * 查询回收站负载均衡器列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRecycleBinLoadBalancers($request)
    {
        return $this->listRecycleBinLoadBalancersWithHttpInfo($request);
    }

    public function listRecycleBinLoadBalancersWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/recycle-bin/loadbalancers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['adminStateUp'] !== null) {
            $queryParams['admin_state_up'] = $localVarParams['adminStateUp'];
        }
        if ($localVarParams['operatingStatus'] !== null) {
            $queryParams['operating_status'] = $localVarParams['operatingStatus'];
        }
        if ($localVarParams['guaranteed'] !== null) {
            $queryParams['guaranteed'] = $localVarParams['guaranteed'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['vipPortId'] !== null) {
            $queryParams['vip_port_id'] = $localVarParams['vipPortId'];
        }
        if ($localVarParams['vipAddress'] !== null) {
            $queryParams['vip_address'] = $localVarParams['vipAddress'];
        }
        if ($localVarParams['vipSubnetCidrId'] !== null) {
            $queryParams['vip_subnet_cidr_id'] = $localVarParams['vipSubnetCidrId'];
        }
        if ($localVarParams['ipv6VipPortId'] !== null) {
            $queryParams['ipv6_vip_port_id'] = $localVarParams['ipv6VipPortId'];
        }
        if ($localVarParams['ipv6VipAddress'] !== null) {
            $queryParams['ipv6_vip_address'] = $localVarParams['ipv6VipAddress'];
        }
        if ($localVarParams['ipv6VipVirsubnetId'] !== null) {
            $queryParams['ipv6_vip_virsubnet_id'] = $localVarParams['ipv6VipVirsubnetId'];
        }
        if ($localVarParams['eips'] !== null) {
            $queryParams['eips'] = $localVarParams['eips'];
        }
        if ($localVarParams['publicips'] !== null) {
            $queryParams['publicips'] = $localVarParams['publicips'];
        }
        if ($localVarParams['availabilityZoneList'] !== null) {
            $queryParams['availability_zone_list'] = $localVarParams['availabilityZoneList'];
        }
        if ($localVarParams['l4FlavorId'] !== null) {
            $queryParams['l4_flavor_id'] = $localVarParams['l4FlavorId'];
        }
        if ($localVarParams['l7FlavorId'] !== null) {
            $queryParams['l7_flavor_id'] = $localVarParams['l7FlavorId'];
        }
        if ($localVarParams['billingInfo'] !== null) {
            $queryParams['billing_info'] = $localVarParams['billingInfo'];
        }
        if ($localVarParams['memberDeviceId'] !== null) {
            $queryParams['member_device_id'] = $localVarParams['memberDeviceId'];
        }
        if ($localVarParams['memberAddress'] !== null) {
            $queryParams['member_address'] = $localVarParams['memberAddress'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['deletionProtectionEnable'] !== null) {
            $queryParams['deletion_protection_enable'] = $localVarParams['deletionProtectionEnable'];
        }
        if ($localVarParams['elbVirsubnetType'] !== null) {
            $queryParams['elb_virsubnet_type'] = $localVarParams['elbVirsubnetType'];
        }
        if ($localVarParams['autoscaling'] !== null) {
            $queryParams['autoscaling'] = $localVarParams['autoscaling'];
        }
        if ($localVarParams['protectionStatus'] !== null) {
            $queryParams['protection_status'] = $localVarParams['protectionStatus'];
        }
        if ($localVarParams['globalEips'] !== null) {
            $queryParams['global_eips'] = $localVarParams['globalEips'];
        }
        if ($localVarParams['logTopicId'] !== null) {
            $queryParams['log_topic_id'] = $localVarParams['logTopicId'];
        }
        if ($localVarParams['logGroupId'] !== null) {
            $queryParams['log_group_id'] = $localVarParams['logGroupId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListRecycleBinLoadBalancersResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListRecycleBinLoadBalancersRequest');
    }

    /**
     * 查询自定义安全策略列表
     *
     * 查询自定义安全策略列表。[荷兰region不支持自定义安全策略功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityPolicies($request)
    {
        return $this->listSecurityPoliciesWithHttpInfo($request);
    }

    public function listSecurityPoliciesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/security-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['protocols'] !== null) {
            $queryParams['protocols'] = $localVarParams['protocols'];
        }
        if ($localVarParams['ciphers'] !== null) {
            $queryParams['ciphers'] = $localVarParams['ciphers'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListSecurityPoliciesResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListSecurityPoliciesRequest');
    }

    /**
     * 查询系统安全策略列表
     *
     * 查询系统安全策略列表。
     * 
     * 系统安全策略为预置的所有租户通用的安全策略，租户不可新增或修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSystemSecurityPolicies($request)
    {
        return $this->listSystemSecurityPoliciesWithHttpInfo($request);
    }

    public function listSystemSecurityPoliciesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/system-security-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListSystemSecurityPoliciesResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListSystemSecurityPoliciesRequest');
    }

    /**
     * 还原负载均衡器
     *
     * 从回收站中还原负载均衡器
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restoreLoadbalancer($request)
    {
        return $this->restoreLoadbalancerWithHttpInfo($request);
    }

    public function restoreLoadbalancerWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/recycle-bin/loadbalancers/{loadbalancer_id}/recover';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\RestoreLoadbalancerResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\RestoreLoadbalancerRequest');
    }

    /**
     * 查询证书详情
     *
     * 查询ELB证书详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCertificate($request)
    {
        return $this->showCertificateWithHttpInfo($request);
    }

    public function showCertificateWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowCertificateResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowCertificateRequest');
    }

    /**
     * 查询证书私钥字段回显开关
     *
     * 查询证书私钥回显开关的状态。该开关用于设置各个ELB证书接口的响应字段private_key和enc_private_key是否展示。若开启则这些接口返回私钥内容；不开启则返回脱敏后内容（******）。该开关影响整个租户项目（project），默认开启。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCertificatePrivateKeyEcho($request)
    {
        return $this->showCertificatePrivateKeyEchoWithHttpInfo($request);
    }

    public function showCertificatePrivateKeyEchoWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/certificates/settings/private-key-echo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowCertificatePrivateKeyEchoResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowCertificatePrivateKeyEchoRequest');
    }

    /**
     * 查询规格详情
     *
     * 查询规格的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFlavor($request)
    {
        return $this->showFlavorWithHttpInfo($request);
    }

    public function showFlavorWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/flavors/{flavor_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['flavorId'] !== null) {
            $pathParams['flavor_id'] = $localVarParams['flavorId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowFlavorResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowFlavorRequest');
    }

    /**
     * 查询健康检查详情
     *
     * 查询健康检查详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHealthMonitor($request)
    {
        return $this->showHealthMonitorWithHttpInfo($request);
    }

    public function showHealthMonitorWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/healthmonitors/{healthmonitor_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['healthmonitorId'] !== null) {
            $pathParams['healthmonitor_id'] = $localVarParams['healthmonitorId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowHealthMonitorResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowHealthMonitorRequest');
    }

    /**
     * 查询异步任务的job状态
     *
     * 用于查询实例复制、实例升级等异步接口任务的状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJob($request)
    {
        return $this->showJobWithHttpInfo($request);
    }

    public function showJobWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowJobResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowJobRequest');
    }

    /**
     * 查询转发策略详情
     *
     * 查询七层转发策略详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showL7Policy($request)
    {
        return $this->showL7PolicyWithHttpInfo($request);
    }

    public function showL7PolicyWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowL7PolicyResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowL7PolicyRequest');
    }

    /**
     * 查询转发规则详情
     *
     * 查询七层转发规则详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showL7Rule($request)
    {
        return $this->showL7RuleWithHttpInfo($request);
    }

    public function showL7RuleWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}/rules/{l7rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }
        if ($localVarParams['l7ruleId'] !== null) {
            $pathParams['l7rule_id'] = $localVarParams['l7ruleId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowL7RuleResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowL7RuleRequest');
    }

    /**
     * 查询监听器详情
     *
     * 查询监听器详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showListener($request)
    {
        return $this->showListenerWithHttpInfo($request);
    }

    public function showListenerWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/listeners/{listener_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['listenerId'] !== null) {
            $pathParams['listener_id'] = $localVarParams['listenerId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowListenerResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowListenerRequest');
    }

    /**
     * 查询负载均衡器详情
     *
     * 查询负载均衡器详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLoadBalancer($request)
    {
        return $this->showLoadBalancerWithHttpInfo($request);
    }

    public function showLoadBalancerWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLoadBalancerResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLoadBalancerRequest');
    }

    /**
     * 查询负载均衡器占用的下联面子网端口列表
     *
     * 查询负载均衡器占用的下联面子网端口和IP地址信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLoadBalancerPorts($request)
    {
        return $this->showLoadBalancerPortsWithHttpInfo($request);
    }

    public function showLoadBalancerPortsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/local-ports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['portId'] !== null) {
            $queryParams['port_id'] = $localVarParams['portId'];
        }
        if ($localVarParams['ipAddress'] !== null) {
            $queryParams['ip_address'] = $localVarParams['ipAddress'];
        }
        if ($localVarParams['ipv6Address'] !== null) {
            $queryParams['ipv6_address'] = $localVarParams['ipv6Address'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['virsubnetId'] !== null) {
            $queryParams['virsubnet_id'] = $localVarParams['virsubnetId'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLoadBalancerPortsResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLoadBalancerPortsRequest');
    }

    /**
     * 查询负载均衡器状态树
     *
     * 查询负载均衡器状态树，包括负载均衡器及其关联的子资源的状态信息。
     * 注意：该接口中的operating_status不一定与对应资源的operating_status相同。
     * 如：当Member的admin_state_up&#x3D;false且operating_status&#x3D;OFFLINE时，
     * 该接口返回member的operating_status&#x3D;DISABLE。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLoadBalancerStatus($request)
    {
        return $this->showLoadBalancerStatusWithHttpInfo($request);
    }

    public function showLoadBalancerStatusWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/statuses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLoadBalancerStatusResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLoadBalancerStatusRequest');
    }

    /**
     * 查询云日志详情
     *
     * 云日志详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLogtank($request)
    {
        return $this->showLogtankWithHttpInfo($request);
    }

    public function showLogtankWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/logtanks/{logtank_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logtankId'] !== null) {
            $pathParams['logtank_id'] = $localVarParams['logtankId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLogtankResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowLogtankRequest');
    }

    /**
     * 查询主备后端服务器组详情
     *
     * 主备后端服务器组详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMasterSlavePool($request)
    {
        return $this->showMasterSlavePoolWithHttpInfo($request);
    }

    public function showMasterSlavePoolWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/master-slave-pools/{pool_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowMasterSlavePoolResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowMasterSlavePoolRequest');
    }

    /**
     * 查询后端服务器详情
     *
     * 后端服务器详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMember($request)
    {
        return $this->showMemberWithHttpInfo($request);
    }

    public function showMemberWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members/{member_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['memberId'] !== null) {
            $pathParams['member_id'] = $localVarParams['memberId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowMemberResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowMemberRequest');
    }

    /**
     * 查询后端服务器检测任务的结果
     *
     * 查询后端服务器检测任务的结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMemberHealthCheckJob($request)
    {
        return $this->showMemberHealthCheckJobWithHttpInfo($request);
    }

    public function showMemberHealthCheckJobWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/members/check/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowMemberHealthCheckJobResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowMemberHealthCheckJobRequest');
    }

    /**
     * 查询后端服务器组详情
     *
     * 后端服务器组详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPool($request)
    {
        return $this->showPoolWithHttpInfo($request);
    }

    public function showPoolWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowPoolResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowPoolRequest');
    }

    /**
     * 查询配额详情
     *
     * 查询指定项目中负载均衡相关的各类资源的当前配额。接口返回只包含总配额，不包含已使用配额。若需要查询已使用配额，可使用查询配额使用详情（GET /v3/{project_id}/elb/quotas/details）接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showQuota($request)
    {
        return $this->showQuotaWithHttpInfo($request);
    }

    public function showQuotaWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowQuotaResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowQuotaRequest');
    }

    /**
     * 查询回收站的配置
     *
     * 查询回收站的配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRecycleBin($request)
    {
        return $this->showRecycleBinWithHttpInfo($request);
    }

    public function showRecycleBinWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/recycle-bin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowRecycleBinResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowRecycleBinRequest');
    }

    /**
     * 查询自定义安全策略详情
     *
     * 查询自定义安全策略详情。[荷兰region不支持自定义安全策略功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecurityPolicy($request)
    {
        return $this->showSecurityPolicyWithHttpInfo($request);
    }

    public function showSecurityPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/security-policies/{security_policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['securityPolicyId'] !== null) {
            $pathParams['security_policy_id'] = $localVarParams['securityPolicyId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowSecurityPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowSecurityPolicyRequest');
    }

    /**
     * 更新证书
     *
     * 更新ELB证书。不能更新证书类型，但可以更新证书内容和私钥等。
     * 注意：更新证书会影响当前证书已关联的监听器，请谨慎操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCertificate($request)
    {
        return $this->updateCertificateWithHttpInfo($request);
    }

    public function updateCertificateWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['certificateId'] !== null) {
            $pathParams['certificate_id'] = $localVarParams['certificateId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateCertificateResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateCertificateRequest');
    }

    /**
     * 更新健康检查
     *
     * 更新健康检查。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateHealthMonitor($request)
    {
        return $this->updateHealthMonitorWithHttpInfo($request);
    }

    public function updateHealthMonitorWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/healthmonitors/{healthmonitor_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['healthmonitorId'] !== null) {
            $pathParams['healthmonitor_id'] = $localVarParams['healthmonitorId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateHealthMonitorResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateHealthMonitorRequest');
    }

    /**
     * 更新转发策略
     *
     * 更新七层转发策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateL7Policy($request)
    {
        return $this->updateL7PolicyWithHttpInfo($request);
    }

    public function updateL7PolicyWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateL7PolicyResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateL7PolicyRequest');
    }

    /**
     * 更新转发规则
     *
     * 更新七层转发规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateL7Rule($request)
    {
        return $this->updateL7RuleWithHttpInfo($request);
    }

    public function updateL7RuleWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/l7policies/{l7policy_id}/rules/{l7rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['l7policyId'] !== null) {
            $pathParams['l7policy_id'] = $localVarParams['l7policyId'];
        }
        if ($localVarParams['l7ruleId'] !== null) {
            $pathParams['l7rule_id'] = $localVarParams['l7ruleId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateL7RuleResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateL7RuleRequest');
    }

    /**
     * 更新监听器
     *
     * 更新监听器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateListener($request)
    {
        return $this->updateListenerWithHttpInfo($request);
    }

    public function updateListenerWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/listeners/{listener_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['listenerId'] !== null) {
            $pathParams['listener_id'] = $localVarParams['listenerId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateListenerResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateListenerRequest');
    }

    /**
     * 更新负载均衡器
     *
     * 更新负载均衡器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLoadBalancer($request)
    {
        return $this->updateLoadBalancerWithHttpInfo($request);
    }

    public function updateLoadBalancerWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateLoadBalancerResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateLoadBalancerRequest');
    }

    /**
     * 更新云日志
     *
     * 更新云日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLogtank($request)
    {
        return $this->updateLogtankWithHttpInfo($request);
    }

    public function updateLogtankWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/logtanks/{logtank_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logtankId'] !== null) {
            $pathParams['logtank_id'] = $localVarParams['logtankId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateLogtankResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateLogtankRequest');
    }

    /**
     * 更新后端服务器
     *
     * 更新后端服务器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateMember($request)
    {
        return $this->updateMemberWithHttpInfo($request);
    }

    public function updateMemberWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}/members/{member_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['memberId'] !== null) {
            $pathParams['member_id'] = $localVarParams['memberId'];
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateMemberResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateMemberRequest');
    }

    /**
     * 更新后端服务器组
     *
     * 更新后端服务器组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePool($request)
    {
        return $this->updatePoolWithHttpInfo($request);
    }

    public function updatePoolWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/pools/{pool_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolId'] !== null) {
            $pathParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdatePoolResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdatePoolRequest');
    }

    /**
     * 开关回收站
     *
     * 开启或关闭回收站功能。开启后删除的LB可以进入回收站，否则将不进入回收站而是直接被删除无法恢复。关闭回收站前需要先将回收站中的实例还原或销毁。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRecycleBinEnable($request)
    {
        return $this->updateRecycleBinEnableWithHttpInfo($request);
    }

    public function updateRecycleBinEnableWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/recycle-bin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateRecycleBinEnableResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateRecycleBinEnableRequest');
    }

    /**
     * 更新回收站的配置
     *
     * 更新回收站的配置。若回收站未开启，则更新会报错。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRecycleBinPolicy($request)
    {
        return $this->updateRecycleBinPolicyWithHttpInfo($request);
    }

    public function updateRecycleBinPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/recycle-bin/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateRecycleBinPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateRecycleBinPolicyRequest');
    }

    /**
     * 更新自定义安全策略
     *
     * 更新自定义安全策略。[荷兰region不支持自定义安全策略功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecurityPolicy($request)
    {
        return $this->updateSecurityPolicyWithHttpInfo($request);
    }

    public function updateSecurityPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/security-policies/{security_policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['securityPolicyId'] !== null) {
            $pathParams['security_policy_id'] = $localVarParams['securityPolicyId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateSecurityPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateSecurityPolicyRequest');
    }

    /**
     * 升级负载均衡器类型
     *
     * 升级负载均衡器类型。支持将共享型ELB升级为独享型ELB，但不支持独享型降级为共享型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function upgradeLoadbalancer($request)
    {
        return $this->upgradeLoadbalancerWithHttpInfo($request);
    }

    public function upgradeLoadbalancerWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/upgrade';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $pathParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpgradeLoadbalancerResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpgradeLoadbalancerRequest');
    }

    /**
     * 查询API版本列表信息
     *
     * 查询当前ELB服务所有可用的API版本。通常情况下高版本API（当前v3为最高版本）比低版本API支持更多更全的特性。
     * 不同版本接口使用时需要注意如下事项：
     * - 创建负载均衡器（POST /v3/{project_id}/elb/loadbalancers）接口无法创建共享型ELB实例。需要通过v2/v2.0接口创建，或者通过批量创建负载均衡器（/v3/{project_id}/elb/loadbalancers/batch-create）、复制已有负载均衡器（/v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/clone）这两个接口创建。
     * - 其他v3接口都可以同时处理独享型和共享型实例及其子资源。例如：可以使用创建监听器接口（POST /v3/{project_id}/elb/listeners）创建共享型ELB下的监听器。但在这种情况下部分独享型实例特有的特性将不会支持，具体见各API说明。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiVersions($request)
    {
        return $this->listApiVersionsWithHttpInfo($request);
    }

    public function listApiVersionsWithHttpInfo($request)
    {
        $resourcePath = '/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListApiVersionsResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListApiVersionsRequest');
    }

    /**
     * 删除IP地址组的IP列表项
     *
     * 批量删除IP地址组中IP列表的IP地址项。
     * 注意：删除IP列表的IP地址项会影响所有已关联的监听器，请谨慎操作。
     * [荷兰region不支持该API](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteIpList($request)
    {
        return $this->batchDeleteIpListWithHttpInfo($request);
    }

    public function batchDeleteIpListWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/ipgroups/{ipgroup_id}/iplist/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ipgroupId'] !== null) {
            $pathParams['ipgroup_id'] = $localVarParams['ipgroupId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\BatchDeleteIpListResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\BatchDeleteIpListRequest');
    }

    /**
     * 计算预占IP数
     *
     * 计算以下几种场景的预占用IP数量：
     * 
     * - 计算创建LB所需IP数量：传入字段availability_zone_id，及可选字段l7_flavor_id、ip_target_enable、ip_version，不能传loadbalancer_id。
     * - 计算创建LB的第一个七层监听器后新增占用IP数量：传入loadbalancer_id，其他字段不传。
     * - 计算LB变更（规格变更或特性开启）新增占用IP数量：传入字段loadbalancer_id，及l7_flavor_id不为空或ip_target_enable为true。可以同时传入多个字段，表示同时进行多种变更所需要新增的占用IP数量。
     * - 计算共享型ELB升级为独享型ELB所需新增占用IP数量：传入sence、loadbalancer_id，其他字段不传。
     * - 计算ELB实例开启NAT64特性所需新增占用IP数量：传入nat64_enable、loadbalancer_id，其他字段不传。
     * 
     * 注意：
     * - 计算出来的预占IP数大于等于最终实际占用的IP数。
     * - 只计算新增占用IP数量，不包含已占用的IP数。
     * 
     * [不支持传入l7_flavor_id。](tag:hcso,hk_vdf,srg,fcs)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countPreoccupyIpNum($request)
    {
        return $this->countPreoccupyIpNumWithHttpInfo($request);
    }

    public function countPreoccupyIpNumWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/preoccupy-ip-num';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['l7FlavorId'] !== null) {
            $queryParams['l7_flavor_id'] = $localVarParams['l7FlavorId'];
        }
        if ($localVarParams['ipTargetEnable'] !== null) {
            $queryParams['ip_target_enable'] = $localVarParams['ipTargetEnable'];
        }
        if ($localVarParams['ipVersion'] !== null) {
            $queryParams['ip_version'] = $localVarParams['ipVersion'];
        }
        if ($localVarParams['loadbalancerId'] !== null) {
            $queryParams['loadbalancer_id'] = $localVarParams['loadbalancerId'];
        }
        if ($localVarParams['availabilityZoneId'] !== null) {
            $queryParams['availability_zone_id'] = $localVarParams['availabilityZoneId'];
        }
        if ($localVarParams['scene'] !== null) {
            $queryParams['scene'] = $localVarParams['scene'];
        }
        if ($localVarParams['nat64Enable'] !== null) {
            $queryParams['nat64_enable'] = $localVarParams['nat64Enable'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CountPreoccupyIpNumResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CountPreoccupyIpNumRequest');
    }

    /**
     * 创建IP地址组
     *
     * 创建IP地址组。IP地址组用于关联监听器，设置监听器访问控制，指定可以访问或者禁止访问监听器的IP地址。
     * 支持IPv4和IPv6类型地址，可以设置单个IP地址、IP地址段和连续IP地址范围。IP地址范围的格式为ip-ip，例如10.12.3.1-10.12.3.10。
     * 
     * 注意：0.0.0.0与0.0.0.0/32视为重复，0:0:0:0:0:0:0:1与::1与::1/128视为重复，只会保存其中一个。
     * 
     * [荷兰region不支持IP地址组功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createIpGroup($request)
    {
        return $this->createIpGroupWithHttpInfo($request);
    }

    public function createIpGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/ipgroups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\CreateIpGroupResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\CreateIpGroupRequest');
    }

    /**
     * 删除IP地址组
     *
     * 删除IP地址组。已关联监听器的IP地址组无法直接删除，需要先解除关联关系。[荷兰region不支持IP地址组功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteIpGroup($request)
    {
        return $this->deleteIpGroupWithHttpInfo($request);
    }

    public function deleteIpGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/ipgroups/{ipgroup_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ipgroupId'] !== null) {
            $pathParams['ipgroup_id'] = $localVarParams['ipgroupId'];
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteIpGroupResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\DeleteIpGroupRequest');
    }

    /**
     * 查询IP地址组列表
     *
     * 查询IP地址组列表。[荷兰region不支持IP地址组功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIpGroups($request)
    {
        return $this->listIpGroupsWithHttpInfo($request);
    }

    public function listIpGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/ipgroups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['pageReverse'] !== null) {
            $queryParams['page_reverse'] = $localVarParams['pageReverse'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['ipList'] !== null) {
            $queryParams['ip_list'] = $localVarParams['ipList'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ListIpGroupsResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ListIpGroupsRequest');
    }

    /**
     * 查询IP地址组详情
     *
     * 获取IP地址组详情。[荷兰region不支持IP地址组功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIpGroup($request)
    {
        return $this->showIpGroupWithHttpInfo($request);
    }

    public function showIpGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/ipgroups/{ipgroup_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ipgroupId'] !== null) {
            $pathParams['ipgroup_id'] = $localVarParams['ipgroupId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowIpGroupResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowIpGroupRequest');
    }

    /**
     * 查询IP地址组关联的监听器列表
     *
     * 查询IP地址组关联的监听器列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIpGroupRelatedListeners($request)
    {
        return $this->showIpGroupRelatedListenersWithHttpInfo($request);
    }

    public function showIpGroupRelatedListenersWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/ipgroups/{ipgroup_id}/related-listeners';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ipgroupId'] !== null) {
            $pathParams['ipgroup_id'] = $localVarParams['ipgroupId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\ShowIpGroupRelatedListenersResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\ShowIpGroupRelatedListenersRequest');
    }

    /**
     * 更新IP地址组
     *
     * 更新IP地址组。若要更新其中的IP地址列表，则只支持全量更新。即IP地址组中的ip_list将被全量覆盖，不在请求参数中的IP地址将被移除。
     * 支持IPv4和IPv6类型地址，可以设置单个IP地址、IP地址段和连续IP地址范围。IP地址范围的格式为ip-ip，例如10.12.3.1-10.12.3.10。
     * 
     * 注意：
     * - 0.0.0.0与0.0.0.0/32视为重复，0:0:0:0:0:0:0:1与::1与::1/128视为重复，只会保存其中一个。
     * - 更新IP地址组中的ip_list会影响所有已关联的监听器，请谨慎操作。
     * 
     * [荷兰region不支持IP地址组功能，请勿使用。](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateIpGroup($request)
    {
        return $this->updateIpGroupWithHttpInfo($request);
    }

    public function updateIpGroupWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/ipgroups/{ipgroup_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ipgroupId'] !== null) {
            $pathParams['ipgroup_id'] = $localVarParams['ipgroupId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateIpGroupResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateIpGroupRequest');
    }

    /**
     * 更新IP地址组的IP列表项
     *
     * 添加新的IP地址到IP地址组的IP列表中，或更新已有IP地址的描述。不支持通过该接口删除ip_list中已有的IP地址。
     * 注意：
     * - 0.0.0.0与0.0.0.0/32视为重复，0:0:0:0:0:0:0:1与::1与::1/128视为重复，只会保存其中一个。
     * - 更新IP地址组中的ip_list会影响所有已关联的监听器，请谨慎操作。
     * 
     * [荷兰region不支持该API](tag:dt)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateIpList($request)
    {
        return $this->updateIpListWithHttpInfo($request);
    }

    public function updateIpListWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/elb/ipgroups/{ipgroup_id}/iplist/create-or-update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ipgroupId'] !== null) {
            $pathParams['ipgroup_id'] = $localVarParams['ipgroupId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateIpListResponse',
            $requestType='\HuaweiCloud\SDK\Elb\V3\Model\UpdateIpListRequest');
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