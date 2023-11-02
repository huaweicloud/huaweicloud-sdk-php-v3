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
        return new ClientBuilder(new ElbClient());
    }


    /**
     * 批量创建后端服务器
     *
     * 在指定pool下批量创建后端服务器。一次最多添加200个。
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
     * 在指定pool下批量删除后端服务器。一次最多删除200个。
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
     * 批量更新后端服务器
     *
     * 在指定pool下批量更新后端服务器。一次最多更新200个。
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
     * 1. 按需计费转包周期计费；
     * 2. 按需按规格计费转按需按使用量计费；
     * 3. 按需按使用量计费转按需按规格计费；
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
     * 创建证书
     *
     * 创建证书。用于HTTPS协议监听器。
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
     * 创建监听器。
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
     * 创建负载均衡器。
     * 1. 若要创建内网IPv4负载均衡器，则需要设置vip_subnet_cidr_id。
     * 2. 若要创建公网IPv4负载均衡器，则需要设置publicip，以及设置vpc_id和vip_subnet_cidr_id这两个参数中的一个。
     * 3. 若要绑定有已有公网IPv4地址，
     * 则需要设置publicip_ids，以及设置vpc_id和vip_subnet_cidr_id这两个参数中的一个。
     * 4. 若要创建内网双栈负载均衡器，则需要设置ipv6_vip_virsubnet_id。
     * 5. 若要创建公网双栈负载均衡器，则需要设置ipv6_vip_virsubnet_id和ipv6_bandwidth。
     * 6. 不支持绑定已有未使用的内网IPv4、内网IPv6或公网IPv6地址。
     * 
     * [&gt; 不支持创建IPv6地址负载均衡器](tag:dt,dt_test)
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
     * 创建自定义安全策略。用于在创建HTTPS监听器时，请求参数中指定security_policy_id来设置监听器的自定义安全策略。
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
     * 删除证书。
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
     * 级联删除负载均衡器
     *
     * 删除负载均衡器且级联删除其下子资源（删除负载均衡器及其绑定的监听器、后端服务器组、后端服务器等一系列资源）
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
     * 删除自定义安全策略
     *
     * 删除自定义安全策略。
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
     * 查询当前租户下的后端服务器列表。
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
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

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
     * 查询证书列表。
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
     * 查询规格列表
     *
     * 查询租户在当前region下可用的负载均衡规格列表。
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
     * 后端服务器组列表。
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
     * 查询指定项目中负载均衡相关的各类资源的当前配额和已使用配额信息。
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
     * 查询自定义安全策略列表
     *
     * 查询自定义安全策略列表。
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
     * 查询证书详情
     *
     * 查询证书详情。
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
     * 监听器详情。
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
     * 查询指定项目中负载均衡相关的各类资源的当前配额。
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
     * 查询自定义安全策略详情
     *
     * 查询自定义安全策略详情。
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
     * 更新证书。
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
     * 更新自定义安全策略
     *
     * 更新自定义安全策略。
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
     * 查询API版本列表信息
     *
     * 返回ELB当前所有可用的API版本。
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
     * 批量删除IP地址组的IP地址
     *
     * 批量删除IP地址组的IP地址。
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
     * - 计算创建LB的第一个七层监听器后总占用IP数量：
     * 传入loadbalancer_id、l7_flavor_id为空、ip_target_enable不传或为false。
     * 
     * - 计算LB规格变更或开启跨VPC后总占用IP数量：
     * 传入参数loadbalancer_id，及l7_flavor_id不为空或ip_target_enable为true。
     * 
     * - 计算创建LB所需IP数量：传入参数availability_zone_id，
     * 及可选参数l7_flavor_id、ip_target_enable、ip_version，不能传loadbalancer_id。
     * 
     * 说明：
     * - 计算出来的预占IP数大于等于最终实际占用的IP数。
     * - 总占用IP数量，即整个LB所占用的IP数量。
     * 
     * [不支持传入l7_flavor_id](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
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
     * 创建IP地址组。输入的ip可为ip地址或者CIDR子网，支持IPV4和IPV6。
     * 
     * 需要注意0.0.0.0与0.0.0.0/32视为重复，0:0:0:0:0:0:0:1与::1与::1/128视为重复，只会保存其中一个。
     * 
     * [不支持IPv6。](tag:dt,dt_test)
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
     * 删除IP地址组。
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
     * 查询IP地址组列表。
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
     * 获取IP地址组详情。
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
     * 更新IP地址组
     *
     * 更新IP地址组，只支持全量更新IP。即IP地址组中的ip_list将被全量覆盖，不在请求参数中的IP地址将被移除。
     * 输入的ip可为ip地址或者CIDR子网，支持IPV4和IPV6。
     * 
     * 需要注意0.0.0.0与0.0.0.0/32视为重复，0:0:0:0:0:0:0:1与::1与::1/128视为重复，只会保存其中一个。
     * 
     * [不支持IPv6。](tag:dt,dt_test)
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
     * 更新IP地址组的IP列表
     *
     * 更新IP地址组的IP列表。
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