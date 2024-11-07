<?php

namespace HuaweiCloud\SDK\Aad\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class AadClient extends Client
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
        $client = new ClientBuilder(new AadClient(), "GlobalCredentials");
        return $client;
    }


    /**
     * 创建防护域名
     *
     * 创建防护域名
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDomain($request)
    {
        return $this->createDomainWithHttpInfo($request);
    }

    public function createDomainWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/domains';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\CreateDomainResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\CreateDomainRequest');
    }

    /**
     * 删除防护域名
     *
     * 删除防护域名
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDomain($request)
    {
        return $this->deleteDomainWithHttpInfo($request);
    }

    public function deleteDomainWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/domains';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\DeleteDomainResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\DeleteDomainRequest');
    }

    /**
     * 查询DDoS攻击事件列表
     *
     * 查询DDoS攻击事件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDDoSAttackEvent($request)
    {
        return $this->listDDoSAttackEventWithHttpInfo($request);
    }

    public function listDDoSAttackEventWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/instances/{instance_id}/ddos-info/attack/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ListDDoSAttackEventResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ListDDoSAttackEventRequest');
    }

    /**
     * 查询新建连接数和并发连接数
     *
     * 查询新建连接数和并发连接数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDDoSConnectionNumber($request)
    {
        return $this->listDDoSConnectionNumberWithHttpInfo($request);
    }

    public function listDDoSConnectionNumberWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/instances/{instance_id}/ddos-info/flow/connection-numbers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['ip'] !== null) {
            $queryParams['ip'] = $localVarParams['ip'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ListDDoSConnectionNumberResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ListDDoSConnectionNumberRequest');
    }

    /**
     * 查询DDoS攻击防护BPS/PPS流量
     *
     * 查询DDoS攻击防护BPS/PPS流量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDDoSFlow($request)
    {
        return $this->listDDoSFlowWithHttpInfo($request);
    }

    public function listDDoSFlowWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/instances/{instance_id}/ddos-info/flow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ip'] !== null) {
            $queryParams['ip'] = $localVarParams['ip'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ListDDoSFlowResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ListDDoSFlowRequest');
    }

    /**
     * 查询频率控制规则列表
     *
     * 查询频率控制规则列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFrequencyControlRule($request)
    {
        return $this->listFrequencyControlRuleWithHttpInfo($request);
    }

    public function listFrequencyControlRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/policies/waf/frequency-control-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ListFrequencyControlRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ListFrequencyControlRuleRequest');
    }

    /**
     * 查询实例关联的域名信息
     *
     * 查询实例关联的域名信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceDomains($request)
    {
        return $this->listInstanceDomainsWithHttpInfo($request);
    }

    public function listInstanceDomainsWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/instances/{instance_id}/domains';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ListInstanceDomainsResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ListInstanceDomainsRequest');
    }

    /**
     * 查询攻击事件列表
     *
     * 查询攻击事件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWafAttackEvent($request)
    {
        return $this->listWafAttackEventWithHttpInfo($request);
    }

    public function listWafAttackEventWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/domains/waf-info/attack/event';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domains'] !== null) {
            $queryParams['domains'] = $localVarParams['domains'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['recent'] !== null) {
            $queryParams['recent'] = $localVarParams['recent'];
        }
        if ($localVarParams['overseasType'] !== null) {
            $queryParams['overseas_type'] = $localVarParams['overseasType'];
        }
        if ($localVarParams['sip'] !== null) {
            $queryParams['sip'] = $localVarParams['sip'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ListWafAttackEventResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ListWafAttackEventRequest');
    }

    /**
     * 带宽曲线
     *
     * 带宽曲线
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWafBandwidth($request)
    {
        return $this->listWafBandwidthWithHttpInfo($request);
    }

    public function listWafBandwidthWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/domains/waf-info/flow/bandwidth';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domains'] !== null) {
            $queryParams['domains'] = $localVarParams['domains'];
        }
        if ($localVarParams['valueType'] !== null) {
            $queryParams['value_type'] = $localVarParams['valueType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['recent'] !== null) {
            $queryParams['recent'] = $localVarParams['recent'];
        }
        if ($localVarParams['overseasType'] !== null) {
            $queryParams['overseas_type'] = $localVarParams['overseasType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ListWafBandwidthResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ListWafBandwidthRequest');
    }

    /**
     * 查询精准防护规则
     *
     * 查询精准防护规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWafCustomRule($request)
    {
        return $this->listWafCustomRuleWithHttpInfo($request);
    }

    public function listWafCustomRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/policies/waf/custom-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($localVarParams['overseasType'] !== null) {
            $queryParams['overseas_type'] = $localVarParams['overseasType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ListWafCustomRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ListWafCustomRuleRequest');
    }

    /**
     * 查询区域封禁规则
     *
     * 查询区域封禁规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWafGeoIpRule($request)
    {
        return $this->listWafGeoIpRuleWithHttpInfo($request);
    }

    public function listWafGeoIpRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/policies/waf/geoip-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($localVarParams['overseasType'] !== null) {
            $queryParams['overseas_type'] = $localVarParams['overseasType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ListWafGeoIpRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ListWafGeoIpRuleRequest');
    }

    /**
     * 查询请求QPS
     *
     * 查询请求QPS
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWafQps($request)
    {
        return $this->listWafQpsWithHttpInfo($request);
    }

    public function listWafQpsWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/domains/waf-info/flow/qps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domains'] !== null) {
            $queryParams['domains'] = $localVarParams['domains'];
        }
        if ($localVarParams['valueType'] !== null) {
            $queryParams['value_type'] = $localVarParams['valueType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['recent'] !== null) {
            $queryParams['recent'] = $localVarParams['recent'];
        }
        if ($localVarParams['overseasType'] !== null) {
            $queryParams['overseas_type'] = $localVarParams['overseasType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ListWafQpsResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ListWafQpsRequest');
    }

    /**
     * 防护策略web-cc黑白名单-查询黑白名单规则
     *
     * 防护策略web-cc黑白名单-查询黑白名单规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWafWhiteIpRule($request)
    {
        return $this->listWafWhiteIpRuleWithHttpInfo($request);
    }

    public function listWafWhiteIpRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/policies/waf/blackwhite-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($localVarParams['overseasType'] !== null) {
            $queryParams['overseas_type'] = $localVarParams['overseasType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ListWafWhiteIpRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ListWafWhiteIpRuleRequest');
    }

    /**
     * 查询DDoS攻击防护的黑白名单列表
     *
     * 查询DDoS攻击防护的黑白名单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWhiteBlackIpRule($request)
    {
        return $this->listWhiteBlackIpRuleWithHttpInfo($request);
    }

    public function listWhiteBlackIpRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/policies/ddos/blackwhite-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ListWhiteBlackIpRuleResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ListWhiteBlackIpRuleRequest');
    }

    /**
     * 查询域名关联的证书信息
     *
     * 查询域名关联的证书信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDomainCertificate($request)
    {
        return $this->showDomainCertificateWithHttpInfo($request);
    }

    public function showDomainCertificateWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/domains/{domain_id}/certificate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ShowDomainCertificateResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ShowDomainCertificateRequest');
    }

    /**
     * 查询流量封禁信息
     *
     * 查询流量封禁信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFlowBlock($request)
    {
        return $this->showFlowBlockWithHttpInfo($request);
    }

    public function showFlowBlockWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/policies/ddos/flow-block';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ShowFlowBlockResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ShowFlowBlockRequest');
    }

    /**
     * 查询WEB防护策略配置
     *
     * 查询WEB防护策略配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWafPolicy($request)
    {
        return $this->showWafPolicyWithHttpInfo($request);
    }

    public function showWafPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/policies/waf';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($localVarParams['overseasType'] !== null) {
            $queryParams['overseas_type'] = $localVarParams['overseasType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ShowWafPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ShowWafPolicyRequest');
    }

    /**
     * 查询CC攻击防护请求QPS
     *
     * 查询CC攻击防护请求QPS
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWafQps($request)
    {
        return $this->showWafQpsWithHttpInfo($request);
    }

    public function showWafQpsWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/domains/waf-info/flow/request/peak';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['recent'] !== null) {
            $queryParams['recent'] = $localVarParams['recent'];
        }
        if ($localVarParams['domains'] !== null) {
            $queryParams['domains'] = $localVarParams['domains'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['overseasType'] !== null) {
            $queryParams['overseas_type'] = $localVarParams['overseasType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\ShowWafQpsResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\ShowWafQpsRequest');
    }

    /**
     * 修改实例规格
     *
     * 修改实例规格
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function upgradeInstanceSpec($request)
    {
        return $this->upgradeInstanceSpecWithHttpInfo($request);
    }

    public function upgradeInstanceSpecWithHttpInfo($request)
    {
        $resourcePath = '/v2/aad/instance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Aad\V2\Model\UpgradeInstanceSpecResponse',
            $requestType='\HuaweiCloud\SDK\Aad\V2\Model\UpgradeInstanceSpecRequest');
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