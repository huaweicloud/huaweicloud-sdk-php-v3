<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IAMAccessAnalyzerClient extends Client
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
        $client = new ClientBuilder(new IAMAccessAnalyzerClient());
        return $client;
    }


    /**
     * 创建分析器
     *
     * 为您的账号或者组织创建分析器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAnalyzer($request)
    {
        return $this->createAnalyzerWithHttpInfo($request);
    }

    public function createAnalyzerWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CreateAnalyzerResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CreateAnalyzerRequest');
    }

    /**
     * 删除指定的分析器
     *
     * 删除指定的分析器。分析器生成的所有检查结果都将被删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAnalyzer($request)
    {
        return $this->deleteAnalyzerWithHttpInfo($request);
    }

    public function deleteAnalyzerWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\DeleteAnalyzerResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\DeleteAnalyzerRequest');
    }

    /**
     * 检索分析器的列表
     *
     * 检索分析器的列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAnalyzers($request)
    {
        return $this->listAnalyzersWithHttpInfo($request);
    }

    public function listAnalyzersWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListAnalyzersResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListAnalyzersRequest');
    }

    /**
     * 显示指定的分析器
     *
     * 检索有关指定分析器的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAnalyzer($request)
    {
        return $this->showAnalyzerWithHttpInfo($request);
    }

    public function showAnalyzerWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ShowAnalyzerResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ShowAnalyzerRequest');
    }

    /**
     * 立即开始扫描应用于指定资源的策略
     *
     * 立即开始扫描应用于指定资源的策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startResourceScan($request)
    {
        return $this->startResourceScanWithHttpInfo($request);
    }

    public function startResourceScanWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/scan';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\StartResourceScanResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\StartResourceScanRequest');
    }

    /**
     * 更新指定分析器的配置
     *
     * 更新指定分析器的配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAnalyzer($request)
    {
        return $this->updateAnalyzerWithHttpInfo($request);
    }

    public function updateAnalyzerWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UpdateAnalyzerResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UpdateAnalyzerRequest');
    }

    /**
     * 应用存档规则
     *
     * 以追溯方式将存档规则应用于符合存档规则条件的现有结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function applyArchiveRule($request)
    {
        return $this->applyArchiveRuleWithHttpInfo($request);
    }

    public function applyArchiveRuleWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/archive-rules/{archive_rule_id}/apply';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
        }
        if ($localVarParams['archiveRuleId'] !== null) {
            $pathParams['archive_rule_id'] = $localVarParams['archiveRuleId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ApplyArchiveRuleResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ApplyArchiveRuleRequest');
    }

    /**
     * 为指定的分析器创建存档规则
     *
     * 为指定的分析器创建存档规则。存档规则会自动存档符合您在创建规则时所定义条件的新结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createArchiveRule($request)
    {
        return $this->createArchiveRuleWithHttpInfo($request);
    }

    public function createArchiveRuleWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/archive-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CreateArchiveRuleResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CreateArchiveRuleRequest');
    }

    /**
     * 删除指定的存档规则
     *
     * 删除指定的存档规则。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteArchiveRule($request)
    {
        return $this->deleteArchiveRuleWithHttpInfo($request);
    }

    public function deleteArchiveRuleWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/archive-rules/{archive_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
        }
        if ($localVarParams['archiveRuleId'] !== null) {
            $pathParams['archive_rule_id'] = $localVarParams['archiveRuleId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\DeleteArchiveRuleResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\DeleteArchiveRuleRequest');
    }

    /**
     * 检索为指定分析器创建的存档规则的列表
     *
     * 检索为指定分析器创建的存档规则列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listArchiveRules($request)
    {
        return $this->listArchiveRulesWithHttpInfo($request);
    }

    public function listArchiveRulesWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/archive-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListArchiveRulesResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListArchiveRulesRequest');
    }

    /**
     * 检索有关存档规则的信息
     *
     * 检索有关存档规则的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showArchiveRule($request)
    {
        return $this->showArchiveRuleWithHttpInfo($request);
    }

    public function showArchiveRuleWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/archive-rules/{archive_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
        }
        if ($localVarParams['archiveRuleId'] !== null) {
            $pathParams['archive_rule_id'] = $localVarParams['archiveRuleId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ShowArchiveRuleResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ShowArchiveRuleRequest');
    }

    /**
     * 更新指定存档规则的条件和值
     *
     * 更新指定存档规则的条件和值。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateArchiveRule($request)
    {
        return $this->updateArchiveRuleWithHttpInfo($request);
    }

    public function updateArchiveRuleWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/archive-rules/{archive_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
        }
        if ($localVarParams['archiveRuleId'] !== null) {
            $pathParams['archive_rule_id'] = $localVarParams['archiveRuleId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UpdateArchiveRuleResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UpdateArchiveRuleRequest');
    }

    /**
     * 创建资源分析配置
     *
     * 创建指定分析器的资源分析配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createResourceConfigurations($request)
    {
        return $this->createResourceConfigurationsWithHttpInfo($request);
    }

    public function createResourceConfigurationsWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/resource-configurations/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CreateResourceConfigurationsResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CreateResourceConfigurationsRequest');
    }

    /**
     * 删除资源分析配置
     *
     * 删除指定分析器的资源分析配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteResourceConfigurations($request)
    {
        return $this->deleteResourceConfigurationsWithHttpInfo($request);
    }

    public function deleteResourceConfigurationsWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/resource-configurations/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\DeleteResourceConfigurationsResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\DeleteResourceConfigurationsRequest');
    }

    /**
     * 列举资源分析配置
     *
     * 列举指定分析器的资源分析配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceConfigurations($request)
    {
        return $this->listResourceConfigurationsWithHttpInfo($request);
    }

    public function listResourceConfigurationsWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/resource-configurations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListResourceConfigurationsResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListResourceConfigurationsRequest');
    }

    /**
     * 检索指定分析器生成的访问分析结果列表
     *
     * 检索指定分析器生成的访问分析结果列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFindings($request)
    {
        return $this->listFindingsWithHttpInfo($request);
    }

    public function listFindingsWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/findings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListFindingsResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListFindingsRequest');
    }

    /**
     * 检索有关指定结果的信息
     *
     * 检索有关指定结果的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFinding($request)
    {
        return $this->showFindingWithHttpInfo($request);
    }

    public function showFindingWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/findings/{finding_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
        }
        if ($localVarParams['findingId'] !== null) {
            $pathParams['finding_id'] = $localVarParams['findingId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ShowFindingResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ShowFindingRequest');
    }

    /**
     * 更新指定结果的状态
     *
     * 更新指定访问分析结果的状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFindings($request)
    {
        return $this->updateFindingsWithHttpInfo($request);
    }

    public function updateFindingsWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/findings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UpdateFindingsResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UpdateFindingsRequest');
    }

    /**
     * 创建消息通知配置
     *
     * 创建消息通知配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNotificationSetting($request)
    {
        return $this->createNotificationSettingWithHttpInfo($request);
    }

    public function createNotificationSettingWithHttpInfo($request)
    {
        $resourcePath = '/v5/notification-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CreateNotificationSettingResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CreateNotificationSettingRequest');
    }

    /**
     * 删除消息通知配置
     *
     * 删除消息通知配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteNotificationSetting($request)
    {
        return $this->deleteNotificationSettingWithHttpInfo($request);
    }

    public function deleteNotificationSettingWithHttpInfo($request)
    {
        $resourcePath = '/v5/notification-settings/{notification_setting_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['notificationSettingId'] !== null) {
            $pathParams['notification_setting_id'] = $localVarParams['notificationSettingId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\DeleteNotificationSettingResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\DeleteNotificationSettingRequest');
    }

    /**
     * 获取消息通知配置列表
     *
     * 获取消息通知配置列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNotificationSettings($request)
    {
        return $this->listNotificationSettingsWithHttpInfo($request);
    }

    public function listNotificationSettingsWithHttpInfo($request)
    {
        $resourcePath = '/v5/notification-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListNotificationSettingsResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListNotificationSettingsRequest');
    }

    /**
     * 获取消息通知配置
     *
     * 获取消息通知配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNotificationSetting($request)
    {
        return $this->showNotificationSettingWithHttpInfo($request);
    }

    public function showNotificationSettingWithHttpInfo($request)
    {
        $resourcePath = '/v5/notification-settings/{notification_setting_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['notificationSettingId'] !== null) {
            $pathParams['notification_setting_id'] = $localVarParams['notificationSettingId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ShowNotificationSettingResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ShowNotificationSettingRequest');
    }

    /**
     * 更新消息通知配置
     *
     * 更新消息通知配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNotificationSetting($request)
    {
        return $this->updateNotificationSettingWithHttpInfo($request);
    }

    public function updateNotificationSettingWithHttpInfo($request)
    {
        $resourcePath = '/v5/notification-settings/{notification_setting_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['notificationSettingId'] !== null) {
            $pathParams['notification_setting_id'] = $localVarParams['notificationSettingId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UpdateNotificationSettingResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UpdateNotificationSettingRequest');
    }

    /**
     * 创建访问预览
     *
     * 创建访问预览。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAccessPreview($request)
    {
        return $this->createAccessPreviewWithHttpInfo($request);
    }

    public function createAccessPreviewWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/access-previews';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CreateAccessPreviewResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CreateAccessPreviewRequest');
    }

    /**
     * 获取相关预览生成的分析结果
     *
     * 获取相关预览生成的分析结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccessPreviewFindings($request)
    {
        return $this->listAccessPreviewFindingsWithHttpInfo($request);
    }

    public function listAccessPreviewFindingsWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/access-previews/{access_preview_id}/findings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
        }
        if ($localVarParams['accessPreviewId'] !== null) {
            $pathParams['access_preview_id'] = $localVarParams['accessPreviewId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListAccessPreviewFindingsResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListAccessPreviewFindingsRequest');
    }

    /**
     * 获取所有访问预览
     *
     * 获取所有访问预览。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccessPreviews($request)
    {
        return $this->listAccessPreviewsWithHttpInfo($request);
    }

    public function listAccessPreviewsWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/access-previews';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListAccessPreviewsResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListAccessPreviewsRequest');
    }

    /**
     * 获取相关访问预览的信息
     *
     * 获取相关访问预览的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAccessPreview($request)
    {
        return $this->showAccessPreviewWithHttpInfo($request);
    }

    public function showAccessPreviewWithHttpInfo($request)
    {
        $resourcePath = '/v5/analyzers/{analyzer_id}/access-previews/{access_preview_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['analyzerId'] !== null) {
            $pathParams['analyzer_id'] = $localVarParams['analyzerId'];
        }
        if ($localVarParams['accessPreviewId'] !== null) {
            $pathParams['access_preview_id'] = $localVarParams['accessPreviewId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ShowAccessPreviewResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ShowAccessPreviewRequest');
    }

    /**
     * 向指定资源添加标签
     *
     * 向指定资源添加标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function tagResource($request)
    {
        return $this->tagResourceWithHttpInfo($request);
    }

    public function tagResourceWithHttpInfo($request)
    {
        $resourcePath = '/v5/{resource_type}/{resource_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\TagResourceResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\TagResourceRequest');
    }

    /**
     * 从指定资源中删除标签
     *
     * 从指定资源中删除标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function untagResource($request)
    {
        return $this->untagResourceWithHttpInfo($request);
    }

    public function untagResourceWithHttpInfo($request)
    {
        $resourcePath = '/v5/{resource_type}/{resource_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UntagResourceResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UntagResourceRequest');
    }

    /**
     * 校验策略是否有新访问权限
     *
     * 校验策略是否有新访问权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkNoNewAccess($request)
    {
        return $this->checkNoNewAccessWithHttpInfo($request);
    }

    public function checkNoNewAccessWithHttpInfo($request)
    {
        $resourcePath = '/v5/policies/check-no-new-access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CheckNoNewAccessResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CheckNoNewAccessRequest');
    }

    /**
     * 校验策略
     *
     * 校验策略并返回结果列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function validatePolicy($request)
    {
        return $this->validatePolicyWithHttpInfo($request);
    }

    public function validatePolicyWithHttpInfo($request)
    {
        $resourcePath = '/v5/policies/validate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ValidatePolicyResponse',
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ValidatePolicyRequest');
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