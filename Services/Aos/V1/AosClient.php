<?php

namespace HuaweiCloud\SDK\Aos\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class AosClient extends Client
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
        return new ClientBuilder(new AosClient(), "GlobalCredentials");
    }


    /**
     * 此命令用于执行已有的执行计划(execution plan)
     *
     * 此命令用于执行已有的执行计划(execution plan)
     * 
     * 详细说明请参考华为云API Explorer。
     * Please refer to Huawei cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function applyExecutionPlan($request)
    {
        return $this->applyExecutionPlanWithHttpInfo($request);
    }

    public function applyExecutionPlanWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/stacks/{stack_name}/execution-plans/{execution_plan_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clientRequestId'] !== null) {
            $headerParams[$arr['clientRequestId']] = $localVarParams['clientRequestId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['stackName'] !== null) {
            $pathParams['stack_name'] = $localVarParams['stackName'];
        }
        if ($localVarParams['executionPlanName'] !== null) {
            $pathParams['execution_plan_name'] = $localVarParams['executionPlanName'];
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
            $responseType='\HuaweiCloud\SDK\Aos\V1\Model\ApplyExecutionPlanResponse',
            $requestType='\HuaweiCloud\SDK\Aos\V1\Model\ApplyExecutionPlanRequest');
    }

    /**
     * 此命令用于生成一个执行计划(execution plan)
     *
     * 此命令用于生成一个执行计划(execution plan)
     * 
     * 详细说明请参考华为云API Explorer。
     * Please refer to Huawei cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createExecutionPlan($request)
    {
        return $this->createExecutionPlanWithHttpInfo($request);
    }

    public function createExecutionPlanWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/stacks/{stack_name}/execution-plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clientRequestId'] !== null) {
            $headerParams[$arr['clientRequestId']] = $localVarParams['clientRequestId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['stackName'] !== null) {
            $pathParams['stack_name'] = $localVarParams['stackName'];
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
            $responseType='\HuaweiCloud\SDK\Aos\V1\Model\CreateExecutionPlanResponse',
            $requestType='\HuaweiCloud\SDK\Aos\V1\Model\CreateExecutionPlanRequest');
    }

    /**
     * 预估执行计划的价格
     *
     * 预估执行计划的价格
     * 
     * 详细说明请参考华为云API Explorer。
     * Please refer to Huawei cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function estimateExecutionPlanPrice($request)
    {
        return $this->estimateExecutionPlanPriceWithHttpInfo($request);
    }

    public function estimateExecutionPlanPriceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/stacks/{stack_name}/execution-plans/{execution_plan_name}/prices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['stackId'] !== null) {
            $queryParams['stack_id'] = $localVarParams['stackId'];
        }
        if ($localVarParams['executionPlanId'] !== null) {
            $queryParams['execution_plan_id'] = $localVarParams['executionPlanId'];
        }
        if ($localVarParams['clientRequestId'] !== null) {
            $headerParams[$arr['clientRequestId']] = $localVarParams['clientRequestId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['stackName'] !== null) {
            $pathParams['stack_name'] = $localVarParams['stackName'];
        }
        if ($localVarParams['executionPlanName'] !== null) {
            $pathParams['execution_plan_name'] = $localVarParams['executionPlanName'];
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
            $responseType='\HuaweiCloud\SDK\Aos\V1\Model\EstimateExecutionPlanPriceResponse',
            $requestType='\HuaweiCloud\SDK\Aos\V1\Model\EstimateExecutionPlanPriceRequest');
    }

    /**
     * 获取堆栈模板
     *
     * 获取堆栈当前使用的模板
     * 
     * 详细说明请参考华为云API Explorer。
     * Please refer to Huawei cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getStackTemplate($request)
    {
        return $this->getStackTemplateWithHttpInfo($request);
    }

    public function getStackTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/stacks/{stack_name}/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['stackId'] !== null) {
            $queryParams['stack_id'] = $localVarParams['stackId'];
        }
        if ($localVarParams['executor'] !== null) {
            $queryParams['executor'] = $localVarParams['executor'];
        }
        if ($localVarParams['clientRequestId'] !== null) {
            $headerParams[$arr['clientRequestId']] = $localVarParams['clientRequestId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['stackName'] !== null) {
            $pathParams['stack_name'] = $localVarParams['stackName'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Aos\V1\Model\GetStackTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Aos\V1\Model\GetStackTemplateRequest');
    }

    /**
     * 列举执行计划
     *
     * 列举执行计划
     * 
     * 详细说明请参考华为云API Explorer。
     * Please refer to Huawei cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listExecutionPlans($request)
    {
        return $this->listExecutionPlansWithHttpInfo($request);
    }

    public function listExecutionPlansWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/stacks/{stack_name}/execution-plans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['executor'] !== null) {
            $queryParams['executor'] = $localVarParams['executor'];
        }
        if ($localVarParams['stackId'] !== null) {
            $queryParams['stack_id'] = $localVarParams['stackId'];
        }
        if ($localVarParams['clientRequestId'] !== null) {
            $headerParams[$arr['clientRequestId']] = $localVarParams['clientRequestId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['stackName'] !== null) {
            $pathParams['stack_name'] = $localVarParams['stackName'];
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
            $responseType='\HuaweiCloud\SDK\Aos\V1\Model\ListExecutionPlansResponse',
            $requestType='\HuaweiCloud\SDK\Aos\V1\Model\ListExecutionPlansRequest');
    }

    /**
     * 列举堆栈的输出
     *
     * 列举堆栈的输出
     * 
     * 详细说明请参考华为云API Explorer。
     * Please refer to Huawei cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listStackOutputs($request)
    {
        return $this->listStackOutputsWithHttpInfo($request);
    }

    public function listStackOutputsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/stacks/{stack_name}/outputs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['stackId'] !== null) {
            $queryParams['stack_id'] = $localVarParams['stackId'];
        }
        if ($localVarParams['executor'] !== null) {
            $queryParams['executor'] = $localVarParams['executor'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['clientRequestId'] !== null) {
            $headerParams[$arr['clientRequestId']] = $localVarParams['clientRequestId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['stackName'] !== null) {
            $pathParams['stack_name'] = $localVarParams['stackName'];
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
            $responseType='\HuaweiCloud\SDK\Aos\V1\Model\ListStackOutputsResponse',
            $requestType='\HuaweiCloud\SDK\Aos\V1\Model\ListStackOutputsRequest');
    }

    /**
     * 此命令用于解析模板参数
     *
     * 此命令用于解析模板参数
     * 
     * 详细说明请参考华为云API Explorer。
     * Please refer to Huawei cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function parseTemplateVariables($request)
    {
        return $this->parseTemplateVariablesWithHttpInfo($request);
    }

    public function parseTemplateVariablesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/template-analyses/variables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clientRequestId'] !== null) {
            $headerParams[$arr['clientRequestId']] = $localVarParams['clientRequestId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Aos\V1\Model\ParseTemplateVariablesResponse',
            $requestType='\HuaweiCloud\SDK\Aos\V1\Model\ParseTemplateVariablesRequest');
    }

    /**
     * 继续回滚资源栈
     *
     * 如果资源栈开启了自动回滚，在部署失败的时候则会自动回滚。但是自动回滚依然有可能失败，用户可以根据错误信息修复后，调用ContinueRollbackStack触发继续回滚，即重试回滚
     * 
     * * 如果资源栈当前可以回滚，即处于&#x60;ROLLBACK_FAILED&#x60;，则返回202与对应生成的deploymentId，否则将不允许回滚并返回响应的错误码
     * * 继续回滚也有可能会回滚失败。如果失败，用户可以从ListStackEvents获取对应的log，解决后可再次调用ContinueRollbackStack去继续触发回滚
     * 
     * 详细说明请参考华为云API Explorer。
     * Please refer to Huawei cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function continueRollbackStack($request)
    {
        return $this->continueRollbackStackWithHttpInfo($request);
    }

    public function continueRollbackStackWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/stacks/{stack_name}/rollbacks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clientRequestId'] !== null) {
            $headerParams[$arr['clientRequestId']] = $localVarParams['clientRequestId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['stackName'] !== null) {
            $pathParams['stack_name'] = $localVarParams['stackName'];
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
            $responseType='\HuaweiCloud\SDK\Aos\V1\Model\ContinueRollbackStackResponse',
            $requestType='\HuaweiCloud\SDK\Aos\V1\Model\ContinueRollbackStackRequest');
    }

    /**
     * 创建资源栈
     *
     * CreateStack用于生成一个资源栈
     * 
     * * 当请求中不含有模板（template）、参数（vars）等信息，将生成一个无任何资源的空资源栈，返回资源栈ID（stack_id）
     * * 当请求中携带了模板（template）、参数（vars）等信息，则会同时创建并部署资源栈，返回资源栈ID（stack_id）和部署ID（deployment_id）
     * 
     * 详细说明请参考华为云API Explorer。
     * Please refer to Huawei cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createStack($request)
    {
        return $this->createStackWithHttpInfo($request);
    }

    public function createStackWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/stacks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clientRequestId'] !== null) {
            $headerParams[$arr['clientRequestId']] = $localVarParams['clientRequestId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Aos\V1\Model\CreateStackResponse',
            $requestType='\HuaweiCloud\SDK\Aos\V1\Model\CreateStackRequest');
    }

    /**
     * 部署一个已有的资源栈
     *
     * 部署一个已有的资源栈
     * 
     * * 用户可以使用此API更新模板、参数等并触发一个新的部署
     * 
     * * 此API会直接触发部署，如果用户希望先确认部署会发生的时间，请使用执行计划，即使用CreateExecutionPlan以创建执行计划、使用GetExecutionPlan以获取执行计划
     * 
     * * 此API为全量API，即用户每次部署都需要给予所想要使用的template、vars的全量
     * 
     * * 当触发的部署失败时，如果堆栈开启了自动回滚，会触发自动回滚的流程，否则就会停留在部署失败时的状态
     * 
     * 详细说明请参考华为云API Explorer。
     * Please refer to Huawei cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deployStack($request)
    {
        return $this->deployStackWithHttpInfo($request);
    }

    public function deployStackWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/stacks/{stack_name}/deployments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clientRequestId'] !== null) {
            $headerParams[$arr['clientRequestId']] = $localVarParams['clientRequestId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['stackName'] !== null) {
            $pathParams['stack_name'] = $localVarParams['stackName'];
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
            $responseType='\HuaweiCloud\SDK\Aos\V1\Model\DeployStackResponse',
            $requestType='\HuaweiCloud\SDK\Aos\V1\Model\DeployStackRequest');
    }

    /**
     * 列举堆栈
     *
     * ListStacks 列举当前局点下用户所有的堆栈
     * 
     * * 默认按照生成时间排序，最早生成的在最前
     * * 注意：目前暂时返回全量堆栈信息，即不支持分页
     * * 如果没有任何堆栈，则返回空list
     * 
     * ListStacks返回的只有摘要信息（具体摘要信息见ListStacksResponseBody），如果用户需要详细的资源栈元数据请调用GetStackMetadata
     * 
     * 详细说明请参考华为云API Explorer。
     * Please refer to Huawei cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listStacks($request)
    {
        return $this->listStacksWithHttpInfo($request);
    }

    public function listStacksWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/stacks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['executor'] !== null) {
            $queryParams['executor'] = $localVarParams['executor'];
        }
        if ($localVarParams['clientRequestId'] !== null) {
            $headerParams[$arr['clientRequestId']] = $localVarParams['clientRequestId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Aos\V1\Model\ListStacksResponse',
            $requestType='\HuaweiCloud\SDK\Aos\V1\Model\ListStacksRequest');
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