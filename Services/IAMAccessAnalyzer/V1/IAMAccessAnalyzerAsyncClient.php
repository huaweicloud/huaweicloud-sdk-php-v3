<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IAMAccessAnalyzerAsyncClient extends Client
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
        return new ClientBuilder(new IAMAccessAnalyzerAsyncClient(), "GlobalCredentials");
    }

    /**
     * 创建分析器
     *
     * 为您的帐号或者组织创建分析器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAnalyzerAsync($request)
    {
        return $this->createAnalyzerAsyncWithHttpInfo($request);
    }
    
    public function createAnalyzerAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CreateAnalyzerRequest',
            $asyncRequest = true);
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
    public function deleteAnalyzerAsync($request)
    {
        return $this->deleteAnalyzerAsyncWithHttpInfo($request);
    }
    
    public function deleteAnalyzerAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\DeleteAnalyzerRequest',
            $asyncRequest = true);
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
    public function listAnalyzersAsync($request)
    {
        return $this->listAnalyzersAsyncWithHttpInfo($request);
    }
    
    public function listAnalyzersAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListAnalyzersRequest',
            $asyncRequest = true);
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
    public function showAnalyzerAsync($request)
    {
        return $this->showAnalyzerAsyncWithHttpInfo($request);
    }
    
    public function showAnalyzerAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ShowAnalyzerRequest',
            $asyncRequest = true);
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
    public function startResourceScanAsync($request)
    {
        return $this->startResourceScanAsyncWithHttpInfo($request);
    }
    
    public function startResourceScanAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\StartResourceScanRequest',
            $asyncRequest = true);
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
    public function applyArchiveRuleAsync($request)
    {
        return $this->applyArchiveRuleAsyncWithHttpInfo($request);
    }
    
    public function applyArchiveRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ApplyArchiveRuleRequest',
            $asyncRequest = true);
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
    public function createArchiveRuleAsync($request)
    {
        return $this->createArchiveRuleAsyncWithHttpInfo($request);
    }
    
    public function createArchiveRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CreateArchiveRuleRequest',
            $asyncRequest = true);
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
    public function deleteArchiveRuleAsync($request)
    {
        return $this->deleteArchiveRuleAsyncWithHttpInfo($request);
    }
    
    public function deleteArchiveRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\DeleteArchiveRuleRequest',
            $asyncRequest = true);
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
    public function listArchiveRulesAsync($request)
    {
        return $this->listArchiveRulesAsyncWithHttpInfo($request);
    }
    
    public function listArchiveRulesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListArchiveRulesRequest',
            $asyncRequest = true);
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
    public function showArchiveRuleAsync($request)
    {
        return $this->showArchiveRuleAsyncWithHttpInfo($request);
    }
    
    public function showArchiveRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ShowArchiveRuleRequest',
            $asyncRequest = true);
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
    public function updateArchiveRuleAsync($request)
    {
        return $this->updateArchiveRuleAsyncWithHttpInfo($request);
    }
    
    public function updateArchiveRuleAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UpdateArchiveRuleRequest',
            $asyncRequest = true);
    }

    /**
     * 检索指定分析器生成的结果列表
     *
     * 检索指定分析器生成的查找结果列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFindingsAsync($request)
    {
        return $this->listFindingsAsyncWithHttpInfo($request);
    }
    
    public function listFindingsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListFindingsRequest',
            $asyncRequest = true);
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
    public function showFindingAsync($request)
    {
        return $this->showFindingAsyncWithHttpInfo($request);
    }
    
    public function showFindingAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ShowFindingRequest',
            $asyncRequest = true);
    }

    /**
     * 更新指定结果的状态
     *
     * 更新指定调查结果的状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFindingsAsync($request)
    {
        return $this->updateFindingsAsyncWithHttpInfo($request);
    }
    
    public function updateFindingsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UpdateFindingsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建访问预览
     *
     * 创建访问预览
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAccessPreviewAsync($request)
    {
        return $this->createAccessPreviewAsyncWithHttpInfo($request);
    }
    
    public function createAccessPreviewAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CreateAccessPreviewRequest',
            $asyncRequest = true);
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
    public function getAccessPreviewAsync($request)
    {
        return $this->getAccessPreviewAsyncWithHttpInfo($request);
    }
    
    public function getAccessPreviewAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\GetAccessPreviewResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\GetAccessPreviewRequest',
            $asyncRequest = true);
    }

    /**
     * 获取所有访问预览
     *
     * 获取所有访问预览
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccessPreviewsAsync($request)
    {
        return $this->listAccessPreviewsAsyncWithHttpInfo($request);
    }
    
    public function listAccessPreviewsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListAccessPreviewsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取相关预览生成的findings
     *
     * 获取指定预览生成的findings
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPreviewFindingsAsync($request)
    {
        return $this->listPreviewFindingsAsyncWithHttpInfo($request);
    }
    
    public function listPreviewFindingsAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListPreviewFindingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ListPreviewFindingsRequest',
            $asyncRequest = true);
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
    public function tagResourceAsync($request)
    {
        return $this->tagResourceAsyncWithHttpInfo($request);
    }
    
    public function tagResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\TagResourceRequest',
            $asyncRequest = true);
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
    public function untagResourceAsync($request)
    {
        return $this->untagResourceAsyncWithHttpInfo($request);
    }
    
    public function untagResourceAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UntagResourceRequest',
            $asyncRequest = true);
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
    public function validatePolicyAsync($request)
    {
        return $this->validatePolicyAsyncWithHttpInfo($request);
    }
    
    public function validatePolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $responseType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ValidatePolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ValidatePolicyRequest',
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