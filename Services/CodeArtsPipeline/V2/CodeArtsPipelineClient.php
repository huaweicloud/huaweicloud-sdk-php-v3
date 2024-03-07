<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CodeArtsPipelineClient extends Client
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
        return new ClientBuilder(new CodeArtsPipelineClient());
    }


    /**
     * 通过人工审核
     *
     * 通过人工审核
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function acceptManualReview($request)
    {
        return $this->acceptManualReviewWithHttpInfo($request);
    }

    public function acceptManualReviewWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/{pipeline_id}/pipeline-runs/{pipeline_run_id}/jobs/{job_run_id}/steps/{step_run_id}/pass';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobRunId'] !== null) {
            $pathParams['job_run_id'] = $localVarParams['jobRunId'];
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
        }
        if ($localVarParams['pipelineRunId'] !== null) {
            $pathParams['pipeline_run_id'] = $localVarParams['pipelineRunId'];
        }
        if ($localVarParams['stepRunId'] !== null) {
            $pathParams['step_run_id'] = $localVarParams['stepRunId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\AcceptManualReviewResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\AcceptManualReviewRequest');
    }

    /**
     * 批量把流水线移动到分组下
     *
     * 批量把流水线移动到分组下
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchMovePipelineToGroup($request)
    {
        return $this->batchMovePipelineToGroupWithHttpInfo($request);
    }

    public function batchMovePipelineToGroupWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipeline-group/pipeline/move';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\BatchMovePipelineToGroupResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\BatchMovePipelineToGroupRequest');
    }

    /**
     * 批量获取流水线状态
     *
     * 批量获取流水线状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchShowPipelinesLatestStatus($request)
    {
        return $this->batchShowPipelinesLatestStatusWithHttpInfo($request);
    }

    public function batchShowPipelinesLatestStatusWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\BatchShowPipelinesLatestStatusResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\BatchShowPipelinesLatestStatusRequest');
    }

    /**
     * 批量获取流水线状态
     *
     * 批量获取流水线状态和阶段信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchShowPipelinesStatus($request)
    {
        return $this->batchShowPipelinesStatusWithHttpInfo($request);
    }

    public function batchShowPipelinesStatusWithHttpInfo($request)
    {
        $resourcePath = '/v3/pipelines/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pipelineIds'] !== null) {
            $queryParams['pipeline_ids'] = $localVarParams['pipelineIds'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\BatchShowPipelinesStatusResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\BatchShowPipelinesStatusRequest');
    }

    /**
     * 创建基础插件
     *
     * 创建基础插件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBasicPlugin($request)
    {
        return $this->createBasicPluginWithHttpInfo($request);
    }

    public function createBasicPluginWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/extension/info/add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreateBasicPluginResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreateBasicPluginRequest');
    }

    /**
     * 基于模板快速创建流水线及流水线内任务
     *
     * 基于模板快速创建流水线及流水线内任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPipelineByTemplate($request)
    {
        return $this->createPipelineByTemplateWithHttpInfo($request);
    }

    public function createPipelineByTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v3/templates/task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePipelineByTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePipelineByTemplateRequest');
    }

    /**
     * 基于模板创建流水线
     *
     * 基于模板创建流水线
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPipelineByTemplateId($request)
    {
        return $this->createPipelineByTemplateIdWithHttpInfo($request);
    }

    public function createPipelineByTemplateIdWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipeline-templates/{template_id}/create-pipeline';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['componentId'] !== null) {
            $queryParams['component_id'] = $localVarParams['componentId'];
        }
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePipelineByTemplateIdResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePipelineByTemplateIdRequest');
    }

    /**
     * 新建流水线分组
     *
     * 新建流水线分组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPipelineGroup($request)
    {
        return $this->createPipelineGroupWithHttpInfo($request);
    }

    public function createPipelineGroupWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipeline-group/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePipelineGroupResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePipelineGroupRequest');
    }

    /**
     * 创建流水线
     *
     * 创建流水线
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPipelineNew($request)
    {
        return $this->createPipelineNewWithHttpInfo($request);
    }

    public function createPipelineNewWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['componentId'] !== null) {
            $queryParams['component_id'] = $localVarParams['componentId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePipelineNewResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePipelineNewRequest');
    }

    /**
     * 创建流水线模板
     *
     * 创建流水线模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPipelineTemplate($request)
    {
        return $this->createPipelineTemplateWithHttpInfo($request);
    }

    public function createPipelineTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v5/{tenant_id}/api/pipeline-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePipelineTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePipelineTemplateRequest');
    }

    /**
     * 创建插件草稿版本
     *
     * 创建插件草稿版本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPluginDraft($request)
    {
        return $this->createPluginDraftWithHttpInfo($request);
    }

    public function createPluginDraftWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/create-draft';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePluginDraftResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePluginDraftRequest');
    }

    /**
     * 创建插件版本
     *
     * 创建插件版本
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPluginVersion($request)
    {
        return $this->createPluginVersionWithHttpInfo($request);
    }

    public function createPluginVersionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePluginVersionResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePluginVersionRequest');
    }

    /**
     * 创建发布商
     *
     * 创建发布商
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPublisher($request)
    {
        return $this->createPublisherWithHttpInfo($request);
    }

    public function createPublisherWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/publisher/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePublisherResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreatePublisherRequest');
    }

    /**
     * 创建规则
     *
     * 创建规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRule($request)
    {
        return $this->createRuleWithHttpInfo($request);
    }

    public function createRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{domain_id}/rules/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreateRuleResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreateRuleRequest');
    }

    /**
     * 创建策略
     *
     * 创建策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createStrategy($request)
    {
        return $this->createStrategyWithHttpInfo($request);
    }

    public function createStrategyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{domain_id}/tenant/rule-sets/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreateStrategyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CreateStrategyRequest');
    }

    /**
     * 删除基础插件
     *
     * 删除基础插件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBasicPlugin($request)
    {
        return $this->deleteBasicPluginWithHttpInfo($request);
    }

    public function deleteBasicPluginWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/extension/info/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pluginName'] !== null) {
            $queryParams['plugin_name'] = $localVarParams['pluginName'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeleteBasicPluginResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeleteBasicPluginRequest');
    }

    /**
     * 删除流水线
     *
     * 删除流水线
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePipeline($request)
    {
        return $this->deletePipelineWithHttpInfo($request);
    }

    public function deletePipelineWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/{pipeline_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeletePipelineResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeletePipelineRequest');
    }

    /**
     * 删除流水线分组
     *
     * 删除流水线分组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePipelineGroup($request)
    {
        return $this->deletePipelineGroupWithHttpInfo($request);
    }

    public function deletePipelineGroupWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipeline-group/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeletePipelineGroupResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeletePipelineGroupRequest');
    }

    /**
     * 删除流水线模板
     *
     * 删除流水线模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePipelineTemplate($request)
    {
        return $this->deletePipelineTemplateWithHttpInfo($request);
    }

    public function deletePipelineTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v5/{tenant_id}/api/pipeline-templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
        }
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeletePipelineTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeletePipelineTemplateRequest');
    }

    /**
     * 删除插件草稿
     *
     * 删除插件草稿
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePluginDraft($request)
    {
        return $this->deletePluginDraftWithHttpInfo($request);
    }

    public function deletePluginDraftWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/delete-draft';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pluginName'] !== null) {
            $queryParams['plugin_name'] = $localVarParams['pluginName'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeletePluginDraftResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeletePluginDraftRequest');
    }

    /**
     * 删除发布商
     *
     * 删除发布商
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePublisher($request)
    {
        return $this->deletePublisherWithHttpInfo($request);
    }

    public function deletePublisherWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/publisher/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['publisherUniqueId'] !== null) {
            $queryParams['publisher_unique_id'] = $localVarParams['publisherUniqueId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeletePublisherResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeletePublisherRequest');
    }

    /**
     * 删除规则
     *
     * 删除规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteRule($request)
    {
        return $this->deleteRuleWithHttpInfo($request);
    }

    public function deleteRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{domain_id}/rules/{rule_id}/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeleteRuleResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeleteRuleRequest');
    }

    /**
     * 删除策略
     *
     * 删除策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteStrategy($request)
    {
        return $this->deleteStrategyWithHttpInfo($request);
    }

    public function deleteStrategyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{domain_id}/tenant/rule-sets/{rule_set_id}/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ruleSetId'] !== null) {
            $pathParams['rule_set_id'] = $localVarParams['ruleSetId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeleteStrategyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\DeleteStrategyRequest');
    }

    /**
     * 查询可用发布商
     *
     * 查询可用发布商
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAvailablePublisher($request)
    {
        return $this->listAvailablePublisherWithHttpInfo($request);
    }

    public function listAvailablePublisherWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/publisher/optional-publisher';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListAvailablePublisherResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListAvailablePublisherRequest');
    }

    /**
     * 查询基础插件列表
     *
     * 查询基础插件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBasePlugins($request)
    {
        return $this->listBasePluginsWithHttpInfo($request);
    }

    public function listBasePluginsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/relation/plugin/single';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['attribution'] !== null) {
            $queryParams['attribution'] = $localVarParams['attribution'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListBasePluginsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListBasePluginsRequest');
    }

    /**
     * 分页查询可选插件列表
     *
     * 分页查询可选插件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBasePluginsNewPost($request)
    {
        return $this->listBasePluginsNewPostWithHttpInfo($request);
    }

    public function listBasePluginsNewPostWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/relation/plugins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListBasePluginsNewPostResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListBasePluginsNewPostRequest');
    }

    /**
     * 查询插件所有版本信息
     *
     * 查询插件所有版本信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPLuginVersion($request)
    {
        return $this->listPLuginVersionWithHttpInfo($request);
    }

    public function listPLuginVersionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pluginName'] !== null) {
            $queryParams['plugin_name'] = $localVarParams['pluginName'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPLuginVersionResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPLuginVersionRequest');
    }

    /**
     * 获取流水线执行记录
     *
     * 获取流水线执行记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPipelineRuns($request)
    {
        return $this->listPipelineRunsWithHttpInfo($request);
    }

    public function listPipelineRunsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/{pipeline_id}/pipeline-runs/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelineRunsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelineRunsRequest');
    }

    /**
     * 获取流水线列表接口
     *
     * 获取流水线列表接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPipelineSimpleInfo($request)
    {
        return $this->listPipelineSimpleInfoWithHttpInfo($request);
    }

    public function listPipelineSimpleInfoWithHttpInfo($request)
    {
        $resourcePath = '/v3/pipelines/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelineSimpleInfoResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelineSimpleInfoRequest');
    }

    /**
     * 查询模板列表
     *
     * 查询流水线模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPipelineTemplates($request)
    {
        return $this->listPipelineTemplatesWithHttpInfo($request);
    }

    public function listPipelineTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v5/{tenant_id}/api/pipeline-templates/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelineTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelineTemplatesRequest');
    }

    /**
     * 获取流水线列表/获取项目下流水线执行状况
     *
     * 获取流水线列表/获取项目下流水线执行状况
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPipelines($request)
    {
        return $this->listPipelinesWithHttpInfo($request);
    }

    public function listPipelinesWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesRequest');
    }

    /**
     * 获取项目下流水线执行状况
     *
     * 获取项目下流水线执行状况
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPipleineBuildResult($request)
    {
        return $this->listPipleineBuildResultWithHttpInfo($request);
    }

    public function listPipleineBuildResultWithHttpInfo($request)
    {
        $resourcePath = '/v3/pipelines/build-result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['start_date'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipleineBuildResultResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipleineBuildResultRequest');
    }

    /**
     * 查询插件版本号
     *
     * 查询插件版本号
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPluginVersionNumber($request)
    {
        return $this->listPluginVersionNumberWithHttpInfo($request);
    }

    public function listPluginVersionNumberWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/all-version';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pluginName'] !== null) {
            $queryParams['plugin_name'] = $localVarParams['pluginName'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPluginVersionNumberResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPluginVersionNumberRequest');
    }

    /**
     * 查询插件列表
     *
     * 查询插件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPlugins($request)
    {
        return $this->listPluginsWithHttpInfo($request);
    }

    public function listPluginsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/query-all';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPluginsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPluginsRequest');
    }

    /**
     * 获取规则模板实例列表
     *
     * 获取策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectStrategy($request)
    {
        return $this->listProjectStrategyWithHttpInfo($request);
    }

    public function listProjectStrategyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/rule-sets/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['includeTenantRuleSet'] !== null) {
            $queryParams['include_tenant_rule_set'] = $localVarParams['includeTenantRuleSet'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['isValid'] !== null) {
            $queryParams['is_valid'] = $localVarParams['isValid'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListProjectStrategyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListProjectStrategyRequest');
    }

    /**
     * 查询发布商列表
     *
     * 查询发布商列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPublisher($request)
    {
        return $this->listPublisherWithHttpInfo($request);
    }

    public function listPublisherWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/publisher/query-all';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPublisherResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPublisherRequest');
    }

    /**
     * 分页获取规则列表
     *
     * 分页获取规则列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRule($request)
    {
        return $this->listRuleWithHttpInfo($request);
    }

    public function listRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{domain_id}/rules/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['cloudProjectId'] !== null) {
            $queryParams['cloud_project_id'] = $localVarParams['cloudProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListRuleResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListRuleRequest');
    }

    /**
     * 查询可选插件列表
     *
     * 查询可选插件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listStagePlugins($request)
    {
        return $this->listStagePluginsWithHttpInfo($request);
    }

    public function listStagePluginsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/relation/stage-plugins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListStagePluginsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListStagePluginsRequest');
    }

    /**
     * 获取策略列表
     *
     * 获取策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listStrategy($request)
    {
        return $this->listStrategyWithHttpInfo($request);
    }

    public function listStrategyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{domain_id}/tenant/rule-sets/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['includeTenantRuleSet'] !== null) {
            $queryParams['include_tenant_rule_set'] = $localVarParams['includeTenantRuleSet'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['isValid'] !== null) {
            $queryParams['is_valid'] = $localVarParams['isValid'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['cloudProjectId'] !== null) {
            $queryParams['cloud_project_id'] = $localVarParams['cloudProjectId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListStrategyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListStrategyRequest');
    }

    /**
     * 查询模板列表
     *
     * 查询模板列表，支持分页查询,支持模板名字模糊查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTemplates($request)
    {
        return $this->listTemplatesWithHttpInfo($request);
    }

    public function listTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v3/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['templateType'] !== null) {
            $queryParams['template_type'] = $localVarParams['templateType'];
        }
        if ($localVarParams['isBuildIn'] !== null) {
            $queryParams['is_build_in'] = $localVarParams['isBuildIn'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['asc'] !== null) {
            $queryParams['asc'] = $localVarParams['asc'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListTemplatesRequest');
    }

    /**
     * 发布插件
     *
     * 发布插件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function publishPlugin($request)
    {
        return $this->publishPluginWithHttpInfo($request);
    }

    public function publishPluginWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/publish-plugin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PublishPluginResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PublishPluginRequest');
    }

    /**
     * 插件绑定发布商
     *
     * 插件绑定发布商
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function publishPluginBind($request)
    {
        return $this->publishPluginBindWithHttpInfo($request);
    }

    public function publishPluginBindWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/publish-plugin-bind';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PublishPluginBindResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PublishPluginBindRequest');
    }

    /**
     * 发布插件草稿
     *
     * 发布插件草稿
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function publishPluginDraft($request)
    {
        return $this->publishPluginDraftWithHttpInfo($request);
    }

    public function publishPluginDraftWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/publish-draft';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PublishPluginDraftResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PublishPluginDraftRequest');
    }

    /**
     * 驳回人工审核
     *
     * 驳回人工审核
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function rejectManualReview($request)
    {
        return $this->rejectManualReviewWithHttpInfo($request);
    }

    public function rejectManualReviewWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/{pipeline_id}/pipeline-runs/{pipeline_run_id}/jobs/{job_run_id}/steps/{step_run_id}/refuse';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobRunId'] !== null) {
            $pathParams['job_run_id'] = $localVarParams['jobRunId'];
        }
        if ($localVarParams['stepRunId'] !== null) {
            $pathParams['step_run_id'] = $localVarParams['stepRunId'];
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
        }
        if ($localVarParams['pipelineRunId'] !== null) {
            $pathParams['pipeline_run_id'] = $localVarParams['pipelineRunId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RejectManualReviewResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RejectManualReviewRequest');
    }

    /**
     * 删除流水线
     *
     * 根据id删除流水线
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removePipeline($request)
    {
        return $this->removePipelineWithHttpInfo($request);
    }

    public function removePipelineWithHttpInfo($request)
    {
        $resourcePath = '/v3/pipelines/{pipeline_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RemovePipelineResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RemovePipelineRequest');
    }

    /**
     * 重试运行流水线
     *
     * 重试运行流水线
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function retryPipelineRun($request)
    {
        return $this->retryPipelineRunWithHttpInfo($request);
    }

    public function retryPipelineRunWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/{pipeline_id}/pipeline-runs/{pipeline_run_id}/retry';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
        }
        if ($localVarParams['pipelineRunId'] !== null) {
            $pathParams['pipeline_run_id'] = $localVarParams['pipelineRunId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RetryPipelineRunResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RetryPipelineRunRequest');
    }

    /**
     * 启动流水线
     *
     * 启动流水线
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runPipeline($request)
    {
        return $this->runPipelineWithHttpInfo($request);
    }

    public function runPipelineWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/{pipeline_id}/run';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineRequest');
    }

    /**
     * 查询基础插件详情
     *
     * 查询基础插件详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBasicPlugin($request)
    {
        return $this->showBasicPluginWithHttpInfo($request);
    }

    public function showBasicPluginWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/extension/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pluginName'] !== null) {
            $queryParams['plugin_name'] = $localVarParams['pluginName'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowBasicPluginResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowBasicPluginRequest');
    }

    /**
     * 检查流水线创建状态
     *
     * 检查流水线创建状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceStatus($request)
    {
        return $this->showInstanceStatusWithHttpInfo($request);
    }

    public function showInstanceStatusWithHttpInfo($request)
    {
        $resourcePath = '/v3/templates/{task_id}/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowInstanceStatusResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowInstanceStatusRequest');
    }

    /**
     * 查询流水线上的构建产物
     *
     * 查询流水线上的构建产物
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPipelineArtifacts($request)
    {
        return $this->showPipelineArtifactsWithHttpInfo($request);
    }

    public function showPipelineArtifactsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/{pipeline_id}/pipeline-runs/{pipeline_run_id}/artifacts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
        }
        if ($localVarParams['pipelineRunId'] !== null) {
            $pathParams['pipeline_run_id'] = $localVarParams['pipelineRunId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipelineArtifactsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipelineArtifactsRequest');
    }

    /**
     * 查询流水线详情
     *
     * 查询流水线详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPipelineDetail($request)
    {
        return $this->showPipelineDetailWithHttpInfo($request);
    }

    public function showPipelineDetailWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/{pipeline_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipelineDetailResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipelineDetailRequest');
    }

    /**
     * 查询流水线分组树
     *
     * 查询流水线分组树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPipelineGroupTree($request)
    {
        return $this->showPipelineGroupTreeWithHttpInfo($request);
    }

    public function showPipelineGroupTreeWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipeline-group/tree';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipelineGroupTreeResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipelineGroupTreeRequest');
    }

    /**
     * 查询流水线日志
     *
     * 查询流水线日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPipelineLog($request)
    {
        return $this->showPipelineLogWithHttpInfo($request);
    }

    public function showPipelineLogWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/{pipeline_id}/pipeline-runs/{pipeline_run_id}/jobs/{job_run_id}/steps/{step_run_id}/logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
        }
        if ($localVarParams['pipelineRunId'] !== null) {
            $pathParams['pipeline_run_id'] = $localVarParams['pipelineRunId'];
        }
        if ($localVarParams['jobRunId'] !== null) {
            $pathParams['job_run_id'] = $localVarParams['jobRunId'];
        }
        if ($localVarParams['stepRunId'] !== null) {
            $pathParams['step_run_id'] = $localVarParams['stepRunId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipelineLogResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipelineLogRequest');
    }

    /**
     * 获取流水线状态/获取流水线执行详情
     *
     * 获取流水线状态/获取流水线执行详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPipelineRunDetail($request)
    {
        return $this->showPipelineRunDetailWithHttpInfo($request);
    }

    public function showPipelineRunDetailWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/{pipeline_id}/pipeline-runs/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pipelineRunId'] !== null) {
            $queryParams['pipeline_run_id'] = $localVarParams['pipelineRunId'];
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipelineRunDetailResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipelineRunDetailRequest');
    }

    /**
     * 查询模板详情
     *
     * 查询模板详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPipelineTemplateDetail($request)
    {
        return $this->showPipelineTemplateDetailWithHttpInfo($request);
    }

    public function showPipelineTemplateDetailWithHttpInfo($request)
    {
        $resourcePath = '/v5/{tenant_id}/api/pipeline-templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
        }
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipelineTemplateDetailResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipelineTemplateDetailRequest');
    }

    /**
     * 获取流水线状态
     *
     * 获取流水线状态,阶段及任务信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPipleineStatus($request)
    {
        return $this->showPipleineStatusWithHttpInfo($request);
    }

    public function showPipleineStatusWithHttpInfo($request)
    {
        $resourcePath = '/v3/pipelines/{pipeline_id}/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['buildId'] !== null) {
            $queryParams['build_id'] = $localVarParams['buildId'];
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipleineStatusResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPipleineStatusRequest');
    }

    /**
     * 查询插件输入配置
     *
     * 查询插件输入配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPluginInputs($request)
    {
        return $this->showPluginInputsWithHttpInfo($request);
    }

    public function showPluginInputsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/plugin-input';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPluginInputsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPluginInputsRequest');
    }

    /**
     * 查询插件指标配置
     *
     * 查询插件指标配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPluginMetrics($request)
    {
        return $this->showPluginMetricsWithHttpInfo($request);
    }

    public function showPluginMetricsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/plugin-metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPluginMetricsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPluginMetricsRequest');
    }

    /**
     * 查询插件输出配置
     *
     * 查询插件输出配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPluginOutputs($request)
    {
        return $this->showPluginOutputsWithHttpInfo($request);
    }

    public function showPluginOutputsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/plugin-output';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPluginOutputsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPluginOutputsRequest');
    }

    /**
     * 查询插件版本详情
     *
     * 查询插件版本详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPluginVersion($request)
    {
        return $this->showPluginVersionWithHttpInfo($request);
    }

    public function showPluginVersionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pluginName'] !== null) {
            $queryParams['plugin_name'] = $localVarParams['pluginName'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPluginVersionResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPluginVersionRequest');
    }

    /**
     * 
     *
     * 查询项目级策略详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectStrategy($request)
    {
        return $this->showProjectStrategyWithHttpInfo($request);
    }

    public function showProjectStrategyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/rule-sets/{rule_set_id}/gray/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ruleSetId'] !== null) {
            $pathParams['rule_set_id'] = $localVarParams['ruleSetId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowProjectStrategyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowProjectStrategyRequest');
    }

    /**
     * 查询发布商详情
     *
     * 查询发布商详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPublisher($request)
    {
        return $this->showPublisherWithHttpInfo($request);
    }

    public function showPublisherWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/publisher/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPublisherResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowPublisherRequest');
    }

    /**
     * 获取单条规则详情
     *
     * 获取单条规则详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRule($request)
    {
        return $this->showRuleWithHttpInfo($request);
    }

    public function showRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{domain_id}/rules/{rule_id}/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['cloudProjectId'] !== null) {
            $queryParams['cloud_project_id'] = $localVarParams['cloudProjectId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowRuleResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowRuleRequest');
    }

    /**
     * 获取流水线步骤执行输出
     *
     * 获取流水线步骤执行输出
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStepOutputs($request)
    {
        return $this->showStepOutputsWithHttpInfo($request);
    }

    public function showStepOutputsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/{pipeline_id}/pipeline-runs/{pipeline_run_id}/steps/outputs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['stepRunIds'] !== null) {
            $queryParams['step_run_ids'] = $localVarParams['stepRunIds'];
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
        }
        if ($localVarParams['pipelineRunId'] !== null) {
            $pathParams['pipeline_run_id'] = $localVarParams['pipelineRunId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowStepOutputsResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowStepOutputsRequest');
    }

    /**
     * 获取策略详情
     *
     * 获取策略详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showStrategy($request)
    {
        return $this->showStrategyWithHttpInfo($request);
    }

    public function showStrategyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{domain_id}/tenant/rule-sets/{rule_set_id}/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['cloudProjectId'] !== null) {
            $queryParams['cloud_project_id'] = $localVarParams['cloudProjectId'];
        }
        if ($localVarParams['ruleSetId'] !== null) {
            $pathParams['rule_set_id'] = $localVarParams['ruleSetId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowStrategyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowStrategyRequest');
    }

    /**
     * 查询模板详情
     *
     * 查询模板详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTemplateDetail($request)
    {
        return $this->showTemplateDetailWithHttpInfo($request);
    }

    public function showTemplateDetailWithHttpInfo($request)
    {
        $resourcePath = '/v3/templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['templateType'] !== null) {
            $queryParams['template_type'] = $localVarParams['templateType'];
        }
        if ($localVarParams['source'] !== null) {
            $queryParams['source'] = $localVarParams['source'];
        }
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowTemplateDetailResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ShowTemplateDetailRequest');
    }

    /**
     * 启动流水线
     *
     * 启动流水线
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startNewPipeline($request)
    {
        return $this->startNewPipelineWithHttpInfo($request);
    }

    public function startNewPipelineWithHttpInfo($request)
    {
        $resourcePath = '/v3/pipelines/{pipeline_id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StartNewPipelineResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StartNewPipelineRequest');
    }

    /**
     * 停止流水线
     *
     * 停止流水线
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopPipelineNew($request)
    {
        return $this->stopPipelineNewWithHttpInfo($request);
    }

    public function stopPipelineNewWithHttpInfo($request)
    {
        $resourcePath = '/v3/pipelines/{pipeline_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['buildId'] !== null) {
            $queryParams['build_id'] = $localVarParams['buildId'];
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StopPipelineNewResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StopPipelineNewRequest');
    }

    /**
     * 停止流水线
     *
     * 停止流水线
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopPipelineRun($request)
    {
        return $this->stopPipelineRunWithHttpInfo($request);
    }

    public function stopPipelineRunWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipelines/{pipeline_id}/pipeline-runs/{pipeline_run_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pipelineId'] !== null) {
            $pathParams['pipeline_id'] = $localVarParams['pipelineId'];
        }
        if ($localVarParams['pipelineRunId'] !== null) {
            $pathParams['pipeline_run_id'] = $localVarParams['pipelineRunId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StopPipelineRunResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\StopPipelineRunRequest');
    }

    /**
     * 开关策略
     *
     * 修改策略状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchStrategy($request)
    {
        return $this->switchStrategyWithHttpInfo($request);
    }

    public function switchStrategyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{domain_id}/tenant/rule-sets/{rule_set_id}/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ruleSetId'] !== null) {
            $pathParams['rule_set_id'] = $localVarParams['ruleSetId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\SwitchStrategyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\SwitchStrategyRequest');
    }

    /**
     * 更新基础插件
     *
     * 更新基础插件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBasicPlugin($request)
    {
        return $this->updateBasicPluginWithHttpInfo($request);
    }

    public function updateBasicPluginWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/extension/info/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdateBasicPluginResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdateBasicPluginRequest');
    }

    /**
     * 更新流水线分组
     *
     * 更新流水线分组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePipelineGroup($request)
    {
        return $this->updatePipelineGroupWithHttpInfo($request);
    }

    public function updatePipelineGroupWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/api/pipeline-group/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdatePipelineGroupResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdatePipelineGroupRequest');
    }

    /**
     * 更新流水线模板
     *
     * 更新流水线模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePipelineTemplate($request)
    {
        return $this->updatePipelineTemplateWithHttpInfo($request);
    }

    public function updatePipelineTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v5/{tenant_id}/api/pipeline-templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tenantId'] !== null) {
            $pathParams['tenant_id'] = $localVarParams['tenantId'];
        }
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdatePipelineTemplateResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdatePipelineTemplateRequest');
    }

    /**
     * 更新插件基本信息
     *
     * 更新插件基本信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePluginBaseInfo($request)
    {
        return $this->updatePluginBaseInfoWithHttpInfo($request);
    }

    public function updatePluginBaseInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/update-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdatePluginBaseInfoResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdatePluginBaseInfoRequest');
    }

    /**
     * 更新插件草稿
     *
     * 更新插件草稿
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePluginDraft($request)
    {
        return $this->updatePluginDraftWithHttpInfo($request);
    }

    public function updatePluginDraftWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/agent-plugin/edit-draft';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdatePluginDraftResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdatePluginDraftRequest');
    }

    /**
     * 更新规则
     *
     * 更新规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRule($request)
    {
        return $this->updateRuleWithHttpInfo($request);
    }

    public function updateRuleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{domain_id}/rules/{rule_id}/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['ruleId'] !== null) {
            $pathParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdateRuleResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdateRuleRequest');
    }

    /**
     * 修改策略
     *
     * 修改策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateStrategy($request)
    {
        return $this->updateStrategyWithHttpInfo($request);
    }

    public function updateStrategyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{domain_id}/tenant/rule-sets/{rule_set_id}/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ruleSetId'] !== null) {
            $pathParams['rule_set_id'] = $localVarParams['ruleSetId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdateStrategyResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdateStrategyRequest');
    }

    /**
     * 上传基础插件
     *
     * 上传基础插件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadBasicPlugin($request)
    {
        return $this->uploadBasicPluginWithHttpInfo($request);
    }

    public function uploadBasicPluginWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/extension/upload';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = true;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pluginName'] !== null) {
            $queryParams['plugin_name'] = $localVarParams['pluginName'];
        }
        if ($localVarParams['businessType'] !== null) {
            $queryParams['business_type'] = $localVarParams['businessType'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        foreach ($httpBody::attributeMap() as $k => $v) {
            $getter = $httpBody::getters()[$k];
            $value = $httpBody->$getter();
            $formParams[$k] = $value;
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['multipart/form-data']
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UploadBasicPluginResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UploadBasicPluginRequest');
    }

    /**
     * 更新插件图标
     *
     * 更新插件图标
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadPluginIcon($request)
    {
        return $this->uploadPluginIconWithHttpInfo($request);
    }

    public function uploadPluginIconWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/common/upload-plugin-icon';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = true;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['pluginName'] !== null) {
            $queryParams['plugin_name'] = $localVarParams['pluginName'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        foreach ($httpBody::attributeMap() as $k => $v) {
            $getter = $httpBody::getters()[$k];
            $value = $httpBody->$getter();
            $formParams[$k] = $value;
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['multipart/form-data']
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UploadPluginIconResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UploadPluginIconRequest');
    }

    /**
     * 更新发布商图标
     *
     * 更新发布商图标
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadPublisherIcon($request)
    {
        return $this->uploadPublisherIconWithHttpInfo($request);
    }

    public function uploadPublisherIconWithHttpInfo($request)
    {
        $resourcePath = '/v1/{domain_id}/common/upload-publisher-icon';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = true;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['publisherEnName'] !== null) {
            $queryParams['publisher_en_name'] = $localVarParams['publisherEnName'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        foreach ($httpBody::attributeMap() as $k => $v) {
            $getter = $httpBody::getters()[$k];
            $value = $httpBody->$getter();
            $formParams[$k] = $value;
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
                ['multipart/form-data']
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
            $responseType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UploadPublisherIconResponse',
            $requestType='\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UploadPublisherIconRequest');
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