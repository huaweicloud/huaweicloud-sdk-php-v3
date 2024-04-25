<?php

namespace HuaweiCloud\SDK\Hss\V5;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class HssClient extends Client
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
        return new ClientBuilder(new HssClient());
    }


    /**
     * 创建服务器组
     *
     * 创建服务器组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addHostsGroup($request)
    {
        return $this->addHostsGroupWithHttpInfo($request);
    }

    public function addHostsGroupWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/host-management/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\AddHostsGroupResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\AddHostsGroupRequest');
    }

    /**
     * 部署策略组
     *
     * 部署策略组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associatePolicyGroup($request)
    {
        return $this->associatePolicyGroupWithHttpInfo($request);
    }

    public function associatePolicyGroupWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/policy/deploy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\AssociatePolicyGroupResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\AssociatePolicyGroupRequest');
    }

    /**
     * 批量创建标签
     *
     * 批量创建标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateTags($request)
    {
        return $this->batchCreateTagsWithHttpInfo($request);
    }

    public function batchCreateTagsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/{resource_type}/{resource_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\BatchCreateTagsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\BatchCreateTagsRequest');
    }

    /**
     * 镜像仓库镜像批量扫描
     *
     * 镜像仓库镜像批量扫描
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchScanSwrImage($request)
    {
        return $this->batchScanSwrImageWithHttpInfo($request);
    }

    public function batchScanSwrImageWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/image/batch-scan';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\BatchScanSwrImageResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\BatchScanSwrImageRequest');
    }

    /**
     * 解除已拦截IP
     *
     * 解除已拦截IP
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeBlockedIp($request)
    {
        return $this->changeBlockedIpWithHttpInfo($request);
    }

    public function changeBlockedIpWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/event/blocked-ip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeBlockedIpResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeBlockedIpRequest');
    }

    /**
     * 对未通过的配置检查项进行忽略/取消忽略/修复/验证操作
     *
     * 对未通过的配置检查项进行忽略/取消忽略/修复/验证操作
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeCheckRuleAction($request)
    {
        return $this->changeCheckRuleActionWithHttpInfo($request);
    }

    public function changeCheckRuleActionWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/baseline/check-rule/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeCheckRuleActionResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeCheckRuleActionRequest');
    }

    /**
     * 处理告警事件
     *
     * 处理告警事件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeEvent($request)
    {
        return $this->changeEventWithHttpInfo($request);
    }

    public function changeEventWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/event/operate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['containerName'] !== null) {
            $queryParams['container_name'] = $localVarParams['containerName'];
        }
        if ($localVarParams['containerId'] !== null) {
            $queryParams['container_id'] = $localVarParams['containerId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeEventResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeEventRequest');
    }

    /**
     * 编辑服务器组
     *
     * 编辑服务器组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeHostsGroup($request)
    {
        return $this->changeHostsGroupWithHttpInfo($request);
    }

    public function changeHostsGroupWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/host-management/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeHostsGroupResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeHostsGroupRequest');
    }

    /**
     * 恢复已隔离文件
     *
     * 恢复已隔离文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeIsolatedFile($request)
    {
        return $this->changeIsolatedFileWithHttpInfo($request);
    }

    public function changeIsolatedFileWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/event/isolated-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeIsolatedFileResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeIsolatedFileRequest');
    }

    /**
     * 修改漏洞扫描策略
     *
     * 修改漏洞扫描策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeVulScanPolicy($request)
    {
        return $this->changeVulScanPolicyWithHttpInfo($request);
    }

    public function changeVulScanPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vulnerability/scan-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeVulScanPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeVulScanPolicyRequest');
    }

    /**
     * 修改漏洞的状态
     *
     * 修改漏洞的状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeVulStatus($request)
    {
        return $this->changeVulStatusWithHttpInfo($request);
    }

    public function changeVulStatusWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vulnerability/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeVulStatusResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ChangeVulStatusRequest');
    }

    /**
     * HSS服务创建订单订购配额
     *
     * HSS服务创建订单订购配额，只支持包周期计费模式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createQuotasOrder($request)
    {
        return $this->createQuotasOrderWithHttpInfo($request);
    }

    public function createQuotasOrderWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/quotas/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateQuotasOrderResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateQuotasOrderRequest');
    }

    /**
     * 创建漏洞扫描任务
     *
     * 创建漏洞扫描任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createVulnerabilityScanTask($request)
    {
        return $this->createVulnerabilityScanTaskWithHttpInfo($request);
    }

    public function createVulnerabilityScanTaskWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vulnerability/scan-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\CreateVulnerabilityScanTaskResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\CreateVulnerabilityScanTaskRequest');
    }

    /**
     * 删除服务器组
     *
     * 删除服务器组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHostsGroup($request)
    {
        return $this->deleteHostsGroupWithHttpInfo($request);
    }

    public function deleteHostsGroupWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/host-management/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteHostsGroupResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteHostsGroupRequest');
    }

    /**
     * 删除资源标签
     *
     * 删除单个资源下的标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteResourceInstanceTag($request)
    {
        return $this->deleteResourceInstanceTagWithHttpInfo($request);
    }

    public function deleteResourceInstanceTagWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/{resource_type}/{resource_id}/tags/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['key'] !== null) {
            $pathParams['key'] = $localVarParams['key'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteResourceInstanceTagResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\DeleteResourceInstanceTagRequest');
    }

    /**
     * 查询告警白名单列表
     *
     * 查询告警白名单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmWhiteList($request)
    {
        return $this->listAlarmWhiteListWithHttpInfo($request);
    }

    public function listAlarmWhiteListWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/event/white-list/alarm';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hash'] !== null) {
            $queryParams['hash'] = $localVarParams['hash'];
        }
        if ($localVarParams['eventType'] !== null) {
            $queryParams['event_type'] = $localVarParams['eventType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAlarmWhiteListResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAlarmWhiteListRequest');
    }

    /**
     * 获取软件信息的历史变动记录
     *
     * 获取软件信息的历史变动记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppChangeHistories($request)
    {
        return $this->listAppChangeHistoriesWithHttpInfo($request);
    }

    public function listAppChangeHistoriesWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/app/change-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['variationType'] !== null) {
            $queryParams['variation_type'] = $localVarParams['variationType'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppChangeHistoriesResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppChangeHistoriesRequest');
    }

    /**
     * 查询软件列表
     *
     * 查询软件列表，支持通过软件名称查询对应的服务器数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAppStatistics($request)
    {
        return $this->listAppStatisticsWithHttpInfo($request);
    }

    public function listAppStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/app/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppStatisticsRequest');
    }

    /**
     * 查询软件的服务器列表
     *
     * 查询软件的服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApps($request)
    {
        return $this->listAppsWithHttpInfo($request);
    }

    public function listAppsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['installDir'] !== null) {
            $queryParams['install_dir'] = $localVarParams['installDir'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['partMatch'] !== null) {
            $queryParams['part_match'] = $localVarParams['partMatch'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAppsRequest');
    }

    /**
     * 获取自启动项的历史变动记录
     *
     * 获取自启动项的历史变动记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAutoLaunchChangeHistories($request)
    {
        return $this->listAutoLaunchChangeHistoriesWithHttpInfo($request);
    }

    public function listAutoLaunchChangeHistoriesWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/auto-launch/change-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['autoLaunchName'] !== null) {
            $queryParams['auto_launch_name'] = $localVarParams['autoLaunchName'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['variationType'] !== null) {
            $queryParams['variation_type'] = $localVarParams['variationType'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAutoLaunchChangeHistoriesResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAutoLaunchChangeHistoriesRequest');
    }

    /**
     * 查询自启动项信息
     *
     * 查询自启动信息，支持通过传入自启动名称查询启动类型和服务器数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAutoLaunchStatistics($request)
    {
        return $this->listAutoLaunchStatisticsWithHttpInfo($request);
    }

    public function listAutoLaunchStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/auto-launch/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAutoLaunchStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAutoLaunchStatisticsRequest');
    }

    /**
     * 查询自启动项的服务列表
     *
     * 查询自启动项的服务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAutoLaunchs($request)
    {
        return $this->listAutoLaunchsWithHttpInfo($request);
    }

    public function listAutoLaunchsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/auto-launchs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['partMatch'] !== null) {
            $queryParams['part_match'] = $localVarParams['partMatch'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListAutoLaunchsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListAutoLaunchsRequest');
    }

    /**
     * 查询已拦截IP列表
     *
     * 查询已拦截IP列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBlockedIp($request)
    {
        return $this->listBlockedIpWithHttpInfo($request);
    }

    public function listBlockedIpWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/event/blocked-ip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['lastDays'] !== null) {
            $queryParams['last_days'] = $localVarParams['lastDays'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['srcIp'] !== null) {
            $queryParams['src_ip'] = $localVarParams['srcIp'];
        }
        if ($localVarParams['interceptStatus'] !== null) {
            $queryParams['intercept_status'] = $localVarParams['interceptStatus'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListBlockedIpResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListBlockedIpRequest');
    }

    /**
     * 查询容器节点列表
     *
     * 查询容器节点列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listContainerNodes($request)
    {
        return $this->listContainerNodesWithHttpInfo($request);
    }

    public function listContainerNodesWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/container/nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['agentStatus'] !== null) {
            $queryParams['agent_status'] = $localVarParams['agentStatus'];
        }
        if ($localVarParams['protectStatus'] !== null) {
            $queryParams['protect_status'] = $localVarParams['protectStatus'];
        }
        if ($localVarParams['containerTags'] !== null) {
            $queryParams['container_tags'] = $localVarParams['containerTags'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerNodesResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListContainerNodesRequest');
    }

    /**
     * 查询服务器组列表
     *
     * 查询服务器组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostGroups($request)
    {
        return $this->listHostGroupsWithHttpInfo($request);
    }

    public function listHostGroupsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/host-management/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostGroupsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostGroupsRequest');
    }

    /**
     * 查询主机静态网页防篡改防护动态
     *
     * 查询主机静态网页防篡改防护动态：展示服务器名称、服务器ip、防护策略、检测时间、防护文件、事件描述信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostProtectHistoryInfo($request)
    {
        return $this->listHostProtectHistoryInfoWithHttpInfo($request);
    }

    public function listHostProtectHistoryInfoWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/webtamper/static/protect-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['fileOperation'] !== null) {
            $queryParams['file_operation'] = $localVarParams['fileOperation'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostProtectHistoryInfoResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostProtectHistoryInfoRequest');
    }

    /**
     * 查询主机动态网页防篡改防护动态
     *
     * 查询主机动态网页防篡改防护动态：包含告警级别、服务器ip、服务器名称、威胁类型、告警时间、攻击源ip、攻击源url信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostRaspProtectHistoryInfo($request)
    {
        return $this->listHostRaspProtectHistoryInfoWithHttpInfo($request);
    }

    public function listHostRaspProtectHistoryInfoWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/webtamper/rasp/protect-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['alarmLevel'] !== null) {
            $queryParams['alarm_level'] = $localVarParams['alarmLevel'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['protectStatus'] !== null) {
            $queryParams['protect_status'] = $localVarParams['protectStatus'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostRaspProtectHistoryInfoResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostRaspProtectHistoryInfoRequest');
    }

    /**
     * 查询云服务器列表
     *
     * 查询云服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostStatus($request)
    {
        return $this->listHostStatusWithHttpInfo($request);
    }

    public function listHostStatusWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/host-management/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['agentStatus'] !== null) {
            $queryParams['agent_status'] = $localVarParams['agentStatus'];
        }
        if ($localVarParams['detectResult'] !== null) {
            $queryParams['detect_result'] = $localVarParams['detectResult'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostStatus'] !== null) {
            $queryParams['host_status'] = $localVarParams['hostStatus'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['ipAddr'] !== null) {
            $queryParams['ip_addr'] = $localVarParams['ipAddr'];
        }
        if ($localVarParams['protectStatus'] !== null) {
            $queryParams['protect_status'] = $localVarParams['protectStatus'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['hasIntrusion'] !== null) {
            $queryParams['has_intrusion'] = $localVarParams['hasIntrusion'];
        }
        if ($localVarParams['policyGroupId'] !== null) {
            $queryParams['policy_group_id'] = $localVarParams['policyGroupId'];
        }
        if ($localVarParams['policyGroupName'] !== null) {
            $queryParams['policy_group_name'] = $localVarParams['policyGroupName'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
        }
        if ($localVarParams['refresh'] !== null) {
            $queryParams['refresh'] = $localVarParams['refresh'];
        }
        if ($localVarParams['aboveVersion'] !== null) {
            $queryParams['above_version'] = $localVarParams['aboveVersion'];
        }
        if ($localVarParams['outsideHost'] !== null) {
            $queryParams['outside_host'] = $localVarParams['outsideHost'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['label'] !== null) {
            $queryParams['label'] = $localVarParams['label'];
        }
        if ($localVarParams['serverGroup'] !== null) {
            $queryParams['server_group'] = $localVarParams['serverGroup'];
        }
        if ($localVarParams['agentUpgradable'] !== null) {
            $queryParams['agent_upgradable'] = $localVarParams['agentUpgradable'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostStatusResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostStatusRequest');
    }

    /**
     * 查询单台服务器漏洞信息
     *
     * 查询单台服务器漏洞信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostVuls($request)
    {
        return $this->listHostVulsWithHttpInfo($request);
    }

    public function listHostVulsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vulnerability/host/{host_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['vulName'] !== null) {
            $queryParams['vul_name'] = $localVarParams['vulName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['repairPriority'] !== null) {
            $queryParams['repair_priority'] = $localVarParams['repairPriority'];
        }
        if ($localVarParams['hostId'] !== null) {
            $pathParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostVulsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListHostVulsRequest');
    }

    /**
     * 查询镜像指定安全配置项的检查项列表
     *
     * 查询镜像指定安全配置项的检查项列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImageRiskConfigRules($request)
    {
        return $this->listImageRiskConfigRulesWithHttpInfo($request);
    }

    public function listImageRiskConfigRulesWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/image/baseline/risk-configs/{check_name}/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['imageType'] !== null) {
            $queryParams['image_type'] = $localVarParams['imageType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['imageVersion'] !== null) {
            $queryParams['image_version'] = $localVarParams['imageVersion'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['resultType'] !== null) {
            $queryParams['result_type'] = $localVarParams['resultType'];
        }
        if ($localVarParams['checkRuleName'] !== null) {
            $queryParams['check_rule_name'] = $localVarParams['checkRuleName'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
        }
        if ($localVarParams['checkName'] !== null) {
            $pathParams['check_name'] = $localVarParams['checkName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageRiskConfigRulesResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageRiskConfigRulesRequest');
    }

    /**
     * 查询镜像安全配置检测结果列表
     *
     * 查询镜像安全配置检测结果列表,当前支持检测CentOS 7、Debian 10、EulerOS和Ubuntu16镜像的系统配置项、SSH应用配置项。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImageRiskConfigs($request)
    {
        return $this->listImageRiskConfigsWithHttpInfo($request);
    }

    public function listImageRiskConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/image/baseline/risk-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['imageType'] !== null) {
            $queryParams['image_type'] = $localVarParams['imageType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['imageVersion'] !== null) {
            $queryParams['image_version'] = $localVarParams['imageVersion'];
        }
        if ($localVarParams['checkName'] !== null) {
            $queryParams['check_name'] = $localVarParams['checkName'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageRiskConfigsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageRiskConfigsRequest');
    }

    /**
     * 查询镜像的漏洞信息
     *
     * 查询镜像的漏洞信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImageVulnerabilities($request)
    {
        return $this->listImageVulnerabilitiesWithHttpInfo($request);
    }

    public function listImageVulnerabilitiesWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/image/{image_id}/vulnerabilities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['imageType'] !== null) {
            $queryParams['image_type'] = $localVarParams['imageType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['tagName'] !== null) {
            $queryParams['tag_name'] = $localVarParams['tagName'];
        }
        if ($localVarParams['repairNecessity'] !== null) {
            $queryParams['repair_necessity'] = $localVarParams['repairNecessity'];
        }
        if ($localVarParams['vulId'] !== null) {
            $queryParams['vul_id'] = $localVarParams['vulId'];
        }
        if ($localVarParams['appName'] !== null) {
            $queryParams['app_name'] = $localVarParams['appName'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageVulnerabilitiesResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListImageVulnerabilitiesRequest');
    }

    /**
     * 查询已隔离文件列表
     *
     * 查询已隔离文件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIsolatedFile($request)
    {
        return $this->listIsolatedFileWithHttpInfo($request);
    }

    public function listIsolatedFileWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/event/isolated-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['filePath'] !== null) {
            $queryParams['file_path'] = $localVarParams['filePath'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['fileHash'] !== null) {
            $queryParams['file_hash'] = $localVarParams['fileHash'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListIsolatedFileResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListIsolatedFileRequest');
    }

    /**
     * 查询指定中间件的服务器列表
     *
     * 查询指定中间件的服务器列表，通过传入中间件名称参数，返回对应的中间件服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJarPackageHostInfo($request)
    {
        return $this->listJarPackageHostInfoWithHttpInfo($request);
    }

    public function listJarPackageHostInfoWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/midwares/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fileName'] !== null) {
            $queryParams['file_name'] = $localVarParams['fileName'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['partMatch'] !== null) {
            $queryParams['part_match'] = $localVarParams['partMatch'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListJarPackageHostInfoResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListJarPackageHostInfoRequest');
    }

    /**
     * 查询中间件列表
     *
     * 查询中间件列表，支持通过中间件名称查询对应的服务器树
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJarPackageStatistics($request)
    {
        return $this->listJarPackageStatisticsWithHttpInfo($request);
    }

    public function listJarPackageStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/midwares';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fileName'] !== null) {
            $queryParams['file_name'] = $localVarParams['fileName'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListJarPackageStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListJarPackageStatisticsRequest');
    }

    /**
     * 查询口令复杂度策略检测报告
     *
     * 查询口令复杂度策略检测报告
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPasswordComplexity($request)
    {
        return $this->listPasswordComplexityWithHttpInfo($request);
    }

    public function listPasswordComplexityWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/baseline/password-complexity';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListPasswordComplexityResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListPasswordComplexityRequest');
    }

    /**
     * 查询策略组列表
     *
     * 查询策略组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPolicyGroup($request)
    {
        return $this->listPolicyGroupWithHttpInfo($request);
    }

    public function listPolicyGroupWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/policy/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['containerMode'] !== null) {
            $queryParams['container_mode'] = $localVarParams['containerMode'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListPolicyGroupResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListPolicyGroupRequest');
    }

    /**
     * 资产指纹-端口-服务器列表
     *
     * 具备该端口的主机/容器信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPortHost($request)
    {
        return $this->listPortHostWithHttpInfo($request);
    }

    public function listPortHostWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/ports/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['port'] !== null) {
            $queryParams['port'] = $localVarParams['port'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListPortHostResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListPortHostRequest');
    }

    /**
     * 查询开放端口统计信息
     *
     * 查询开放端口列表，支持通过传入端口或协议类型查询服务器数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPortStatistics($request)
    {
        return $this->listPortStatisticsWithHttpInfo($request);
    }

    public function listPortStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/port/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['port'] !== null) {
            $queryParams['port'] = $localVarParams['port'];
        }
        if ($localVarParams['portString'] !== null) {
            $queryParams['port_string'] = $localVarParams['portString'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListPortStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListPortStatisticsRequest');
    }

    /**
     * 查询单服务器的开放端口列表
     *
     * 查询单服务器的开放端口列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPorts($request)
    {
        return $this->listPortsWithHttpInfo($request);
    }

    public function listPortsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/ports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['port'] !== null) {
            $queryParams['port'] = $localVarParams['port'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListPortsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListPortsRequest');
    }

    /**
     * 查询进程列表
     *
     * 查询进程列表，通过传入进程路径参数查询对应的服务器数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProcessStatistics($request)
    {
        return $this->listProcessStatisticsWithHttpInfo($request);
    }

    public function listProcessStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/process/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListProcessStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListProcessStatisticsRequest');
    }

    /**
     * 资产指纹-进程-服务器列表
     *
     * 具备该进程的主机/容器信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProcessesHost($request)
    {
        return $this->listProcessesHostWithHttpInfo($request);
    }

    public function listProcessesHostWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/processes/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListProcessesHostResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListProcessesHostRequest');
    }

    /**
     * 查询勒索病毒的防护策略列表
     *
     * 查询勒索病毒的防护策略列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProtectionPolicy($request)
    {
        return $this->listProtectionPolicyWithHttpInfo($request);
    }

    public function listProtectionPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/ransomware/protection/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
        if ($localVarParams['policyName'] !== null) {
            $queryParams['policy_name'] = $localVarParams['policyName'];
        }
        if ($localVarParams['protectPolicyId'] !== null) {
            $queryParams['protect_policy_id'] = $localVarParams['protectPolicyId'];
        }
        if ($localVarParams['operatingSystem'] !== null) {
            $queryParams['operating_system'] = $localVarParams['operatingSystem'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListProtectionPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListProtectionPolicyRequest');
    }

    /**
     * 查询勒索防护服务器列表
     *
     * 查询勒索防护服务器列表，与云备份服务配合使用。因此使用勒索相关接口之前确保该局点有云备份服务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProtectionServer($request)
    {
        return $this->listProtectionServerWithHttpInfo($request);
    }

    public function listProtectionServerWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/ransomware/server';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['hostStatus'] !== null) {
            $queryParams['host_status'] = $localVarParams['hostStatus'];
        }
        if ($localVarParams['lastDays'] !== null) {
            $queryParams['last_days'] = $localVarParams['lastDays'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListProtectionServerResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListProtectionServerRequest');
    }

    /**
     * 查询配额详情
     *
     * 查询配额详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQuotasDetail($request)
    {
        return $this->listQuotasDetailWithHttpInfo($request);
    }

    public function listQuotasDetailWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/billing/quotas-detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['quotaStatus'] !== null) {
            $queryParams['quota_status'] = $localVarParams['quotaStatus'];
        }
        if ($localVarParams['usedStatus'] !== null) {
            $queryParams['used_status'] = $localVarParams['usedStatus'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListQuotasDetailResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListQuotasDetailRequest');
    }

    /**
     * 查询指定安全配置项的检查项列表
     *
     * 查询指定安全配置项的检查项列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRiskConfigCheckRules($request)
    {
        return $this->listRiskConfigCheckRulesWithHttpInfo($request);
    }

    public function listRiskConfigCheckRulesWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/baseline/risk-config/{check_name}/check-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['resultType'] !== null) {
            $queryParams['result_type'] = $localVarParams['resultType'];
        }
        if ($localVarParams['checkRuleName'] !== null) {
            $queryParams['check_rule_name'] = $localVarParams['checkRuleName'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['checkName'] !== null) {
            $pathParams['check_name'] = $localVarParams['checkName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListRiskConfigCheckRulesResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListRiskConfigCheckRulesRequest');
    }

    /**
     * 查询指定安全配置项的受影响服务器列表
     *
     * 查询指定安全配置项的受影响服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRiskConfigHosts($request)
    {
        return $this->listRiskConfigHostsWithHttpInfo($request);
    }

    public function listRiskConfigHostsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/baseline/risk-config/{check_name}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['checkName'] !== null) {
            $pathParams['check_name'] = $localVarParams['checkName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListRiskConfigHostsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListRiskConfigHostsRequest');
    }

    /**
     * 查询租户的服务器安全配置检测结果列表
     *
     * 查询租户的服务器安全配置检测结果列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRiskConfigs($request)
    {
        return $this->listRiskConfigsWithHttpInfo($request);
    }

    public function listRiskConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/baseline/risk-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['checkName'] !== null) {
            $queryParams['check_name'] = $localVarParams['checkName'];
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListRiskConfigsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListRiskConfigsRequest');
    }

    /**
     * 查入侵事件列表
     *
     * 查入侵事件列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecurityEvents($request)
    {
        return $this->listSecurityEventsWithHttpInfo($request);
    }

    public function listSecurityEventsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/event/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['lastDays'] !== null) {
            $queryParams['last_days'] = $localVarParams['lastDays'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['containerName'] !== null) {
            $queryParams['container_name'] = $localVarParams['containerName'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['eventTypes'] !== null) {
            $queryParams['event_types'] = $localVarParams['eventTypes'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['beginTime'] !== null) {
            $queryParams['begin_time'] = $localVarParams['beginTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['eventClassIds'] !== null) {
            $queryParams['event_class_ids'] = $localVarParams['eventClassIds'];
        }
        if ($localVarParams['severityList'] !== null) {
            $queryParams['severity_list'] = $localVarParams['severityList'];
        }
        if ($localVarParams['attackTag'] !== null) {
            $queryParams['attack_tag'] = $localVarParams['attackTag'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['tagList'] !== null) {
            $queryParams['tag_list'] = $localVarParams['tagList'];
        }
        if ($localVarParams['attCk'] !== null) {
            $queryParams['att_ck'] = $localVarParams['attCk'];
        }
        if ($localVarParams['eventName'] !== null) {
            $queryParams['event_name'] = $localVarParams['eventName'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListSecurityEventsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListSecurityEventsRequest');
    }

    /**
     * 查询swr镜像仓库镜像列表
     *
     * 查询swr镜像仓库镜像列表,如果需要从swr同步最新镜像，需要先调用“从swr同步镜像”接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSwrImageRepository($request)
    {
        return $this->listSwrImageRepositoryWithHttpInfo($request);
    }

    public function listSwrImageRepositoryWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/image/swr-repository';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['imageVersion'] !== null) {
            $queryParams['image_version'] = $localVarParams['imageVersion'];
        }
        if ($localVarParams['latestVersion'] !== null) {
            $queryParams['latest_version'] = $localVarParams['latestVersion'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['imageType'] !== null) {
            $queryParams['image_type'] = $localVarParams['imageType'];
        }
        if ($localVarParams['scanStatus'] !== null) {
            $queryParams['scan_status'] = $localVarParams['scanStatus'];
        }
        if ($localVarParams['instanceName'] !== null) {
            $queryParams['instance_name'] = $localVarParams['instanceName'];
        }
        if ($localVarParams['imageSize'] !== null) {
            $queryParams['image_size'] = $localVarParams['imageSize'];
        }
        if ($localVarParams['startLatestUpdateTime'] !== null) {
            $queryParams['start_latest_update_time'] = $localVarParams['startLatestUpdateTime'];
        }
        if ($localVarParams['endLatestUpdateTime'] !== null) {
            $queryParams['end_latest_update_time'] = $localVarParams['endLatestUpdateTime'];
        }
        if ($localVarParams['startLatestScanTime'] !== null) {
            $queryParams['start_latest_scan_time'] = $localVarParams['startLatestScanTime'];
        }
        if ($localVarParams['endLatestScanTime'] !== null) {
            $queryParams['end_latest_scan_time'] = $localVarParams['endLatestScanTime'];
        }
        if ($localVarParams['hasMaliciousFile'] !== null) {
            $queryParams['has_malicious_file'] = $localVarParams['hasMaliciousFile'];
        }
        if ($localVarParams['hasUnsafeSetting'] !== null) {
            $queryParams['has_unsafe_setting'] = $localVarParams['hasUnsafeSetting'];
        }
        if ($localVarParams['hasVul'] !== null) {
            $queryParams['has_vul'] = $localVarParams['hasVul'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListSwrImageRepositoryResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListSwrImageRepositoryRequest');
    }

    /**
     * 获取账户变动历史信息
     *
     * 获取账户变动历史记录信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUserChangeHistories($request)
    {
        return $this->listUserChangeHistoriesWithHttpInfo($request);
    }

    public function listUserChangeHistoriesWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/user/change-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['rootPermission'] !== null) {
            $queryParams['root_permission'] = $localVarParams['rootPermission'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['changeType'] !== null) {
            $queryParams['change_type'] = $localVarParams['changeType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListUserChangeHistoriesResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListUserChangeHistoriesRequest');
    }

    /**
     * 查询账号信息列表
     *
     * 查询账号信息列表，支持通过传入账号名称参数查询对应的服务器数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUserStatistics($request)
    {
        return $this->listUserStatisticsWithHttpInfo($request);
    }

    public function listUserStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/user/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListUserStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListUserStatisticsRequest');
    }

    /**
     * 查询账号的服务器列表
     *
     * 查询账号的服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUsers($request)
    {
        return $this->listUsersWithHttpInfo($request);
    }

    public function listUsersWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['loginPermission'] !== null) {
            $queryParams['login_permission'] = $localVarParams['loginPermission'];
        }
        if ($localVarParams['rootPermission'] !== null) {
            $queryParams['root_permission'] = $localVarParams['rootPermission'];
        }
        if ($localVarParams['userGroup'] !== null) {
            $queryParams['user_group'] = $localVarParams['userGroup'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
        }
        if ($localVarParams['partMatch'] !== null) {
            $queryParams['part_match'] = $localVarParams['partMatch'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListUsersResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListUsersRequest');
    }

    /**
     * 查询单个漏洞影响的云服务器信息
     *
     * 查询单个漏洞影响的云服务器信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVulHosts($request)
    {
        return $this->listVulHostsWithHttpInfo($request);
    }

    public function listVulHostsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vulnerability/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['vulId'] !== null) {
            $queryParams['vul_id'] = $localVarParams['vulId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['severityLevel'] !== null) {
            $queryParams['severity_level'] = $localVarParams['severityLevel'];
        }
        if ($localVarParams['isAffectBusiness'] !== null) {
            $queryParams['is_affect_business'] = $localVarParams['isAffectBusiness'];
        }
        if ($localVarParams['repairPriority'] !== null) {
            $queryParams['repair_priority'] = $localVarParams['repairPriority'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulHostsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulHostsRequest');
    }

    /**
     * 查询漏洞扫描任务列表
     *
     * 查询漏洞扫描任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVulScanTask($request)
    {
        return $this->listVulScanTaskWithHttpInfo($request);
    }

    public function listVulScanTaskWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vulnerability/scan-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['scanType'] !== null) {
            $queryParams['scan_type'] = $localVarParams['scanType'];
        }
        if ($localVarParams['taskId'] !== null) {
            $queryParams['task_id'] = $localVarParams['taskId'];
        }
        if ($localVarParams['minStartTime'] !== null) {
            $queryParams['min_start_time'] = $localVarParams['minStartTime'];
        }
        if ($localVarParams['maxStartTime'] !== null) {
            $queryParams['max_start_time'] = $localVarParams['maxStartTime'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulScanTaskResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulScanTaskRequest');
    }

    /**
     * 查询漏洞扫描任务对应的主机列表
     *
     * 查询漏洞扫描任务对应的主机列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVulScanTaskHost($request)
    {
        return $this->listVulScanTaskHostWithHttpInfo($request);
    }

    public function listVulScanTaskHostWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vulnerability/scan-task/{task_id}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['scanStatus'] !== null) {
            $queryParams['scan_status'] = $localVarParams['scanStatus'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulScanTaskHostResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulScanTaskHostRequest');
    }

    /**
     * 查询漏洞列表
     *
     * 查询漏洞列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVulnerabilities($request)
    {
        return $this->listVulnerabilitiesWithHttpInfo($request);
    }

    public function listVulnerabilitiesWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vulnerability/vulnerabilities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['vulId'] !== null) {
            $queryParams['vul_id'] = $localVarParams['vulId'];
        }
        if ($localVarParams['vulName'] !== null) {
            $queryParams['vul_name'] = $localVarParams['vulName'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['repairPriority'] !== null) {
            $queryParams['repair_priority'] = $localVarParams['repairPriority'];
        }
        if ($localVarParams['handleStatus'] !== null) {
            $queryParams['handle_status'] = $localVarParams['handleStatus'];
        }
        if ($localVarParams['cveId'] !== null) {
            $queryParams['cve_id'] = $localVarParams['cveId'];
        }
        if ($localVarParams['labelList'] !== null) {
            $queryParams['label_list'] = $localVarParams['labelList'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['assetValue'] !== null) {
            $queryParams['asset_value'] = $localVarParams['assetValue'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulnerabilitiesResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulnerabilitiesRequest');
    }

    /**
     * 漏洞对应cve信息
     *
     * 漏洞对应cve信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listVulnerabilityCve($request)
    {
        return $this->listVulnerabilityCveWithHttpInfo($request);
    }

    public function listVulnerabilityCveWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/image/vulnerability/{vul_id}/cve';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
        }
        if ($localVarParams['vulId'] !== null) {
            $pathParams['vul_id'] = $localVarParams['vulId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulnerabilityCveResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListVulnerabilityCveRequest');
    }

    /**
     * 查询弱口令检测结果列表
     *
     * 查询弱口令检测结果列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWeakPasswordUsers($request)
    {
        return $this->listWeakPasswordUsersWithHttpInfo($request);
    }

    public function listWeakPasswordUsersWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/baseline/weak-password-users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostIp'] !== null) {
            $queryParams['host_ip'] = $localVarParams['hostIp'];
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListWeakPasswordUsersResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListWeakPasswordUsersRequest');
    }

    /**
     * 查询防护列表
     *
     * 查询防护列表：查询网页防篡改主机防护状态列表信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWtpProtectHost($request)
    {
        return $this->listWtpProtectHostWithHttpInfo($request);
    }

    public function listWtpProtectHostWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/webtamper/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostName'] !== null) {
            $queryParams['host_name'] = $localVarParams['hostName'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['publicIp'] !== null) {
            $queryParams['public_ip'] = $localVarParams['publicIp'];
        }
        if ($localVarParams['privateIp'] !== null) {
            $queryParams['private_ip'] = $localVarParams['privateIp'];
        }
        if ($localVarParams['groupName'] !== null) {
            $queryParams['group_name'] = $localVarParams['groupName'];
        }
        if ($localVarParams['osType'] !== null) {
            $queryParams['os_type'] = $localVarParams['osType'];
        }
        if ($localVarParams['protectStatus'] !== null) {
            $queryParams['protect_status'] = $localVarParams['protectStatus'];
        }
        if ($localVarParams['agentStatus'] !== null) {
            $queryParams['agent_status'] = $localVarParams['agentStatus'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ListWtpProtectHostResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ListWtpProtectHostRequest');
    }

    /**
     * 从SWR服务同步镜像列表
     *
     * 从SWR服务同步镜像列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runImageSynchronize($request)
    {
        return $this->runImageSynchronizeWithHttpInfo($request);
    }

    public function runImageSynchronizeWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/image/synchronize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\RunImageSynchronizeResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\RunImageSynchronizeRequest');
    }

    /**
     * 开启/关闭动态网页防篡改防护
     *
     * 开启/关闭动态网页防篡改防护，下发/清空动态网页防篡改策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setRaspSwitch($request)
    {
        return $this->setRaspSwitchWithHttpInfo($request);
    }

    public function setRaspSwitchWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/webtamper/rasp/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SetRaspSwitchResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SetRaspSwitchRequest');
    }

    /**
     * 开启关闭网页防篡改防护
     *
     * 开启/关闭网页防篡改功能防护，下发/清空网页防篡改策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function setWtpProtectionStatusInfo($request)
    {
        return $this->setWtpProtectionStatusInfoWithHttpInfo($request);
    }

    public function setWtpProtectionStatusInfoWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/webtamper/static/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SetWtpProtectionStatusInfoResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SetWtpProtectionStatusInfoRequest');
    }

    /**
     * 统计资产信息，账号、端口、进程等
     *
     * 资产统计信息，账号、端口、进程等
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAssetStatistic($request)
    {
        return $this->showAssetStatisticWithHttpInfo($request);
    }

    public function showAssetStatisticWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/asset/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['category'] !== null) {
            $queryParams['category'] = $localVarParams['category'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAssetStatisticResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowAssetStatisticRequest');
    }

    /**
     * 查询HSS存储库绑定的备份策略信息
     *
     * 查询HSS存储库绑定的备份策略信息,确保已经购买了勒索防护存储库，可以从cbr云备份服务进行验证，确保已经存在HSS_projectid命名的存储库已经购买
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBackupPolicyInfo($request)
    {
        return $this->showBackupPolicyInfoWithHttpInfo($request);
    }

    public function showBackupPolicyInfoWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/backup/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowBackupPolicyInfoResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowBackupPolicyInfoRequest');
    }

    /**
     * 查询配置检查项检测报告
     *
     * 查询配置检查项检测报告
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCheckRuleDetail($request)
    {
        return $this->showCheckRuleDetailWithHttpInfo($request);
    }

    public function showCheckRuleDetailWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/baseline/check-rule/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['checkName'] !== null) {
            $queryParams['check_name'] = $localVarParams['checkName'];
        }
        if ($localVarParams['checkType'] !== null) {
            $queryParams['check_type'] = $localVarParams['checkType'];
        }
        if ($localVarParams['checkRuleId'] !== null) {
            $queryParams['check_rule_id'] = $localVarParams['checkRuleId'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'appcation/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'appcation/json'],
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowCheckRuleDetailResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowCheckRuleDetailRequest');
    }

    /**
     * 查询镜像配置检查项检测报告
     *
     * 查询镜像配置检查项检测报告
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showImageCheckRuleDetail($request)
    {
        return $this->showImageCheckRuleDetailWithHttpInfo($request);
    }

    public function showImageCheckRuleDetailWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/image/baseline/check-rule/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['imageType'] !== null) {
            $queryParams['image_type'] = $localVarParams['imageType'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['imageVersion'] !== null) {
            $queryParams['image_version'] = $localVarParams['imageVersion'];
        }
        if ($localVarParams['checkName'] !== null) {
            $queryParams['check_name'] = $localVarParams['checkName'];
        }
        if ($localVarParams['checkType'] !== null) {
            $queryParams['check_type'] = $localVarParams['checkType'];
        }
        if ($localVarParams['checkRuleId'] !== null) {
            $queryParams['check_rule_id'] = $localVarParams['checkRuleId'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'appcation/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'appcation/json'],
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowImageCheckRuleDetailResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowImageCheckRuleDetailRequest');
    }

    /**
     * 查询产商品信息
     *
     * 查询产商品信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProductdataOfferingInfos($request)
    {
        return $this->showProductdataOfferingInfosWithHttpInfo($request);
    }

    public function showProductdataOfferingInfosWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/product/productdata/offering-infos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['siteCode'] !== null) {
            $queryParams['site_code'] = $localVarParams['siteCode'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowProductdataOfferingInfosResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowProductdataOfferingInfosRequest');
    }

    /**
     * 查询配额信息
     *
     * 查询配额信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceQuotas($request)
    {
        return $this->showResourceQuotasWithHttpInfo($request);
    }

    public function showResourceQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/billing/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowResourceQuotasResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowResourceQuotasRequest');
    }

    /**
     * 查询指定安全配置项的检查结果
     *
     * 查询指定安全配置项的检查结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRiskConfigDetail($request)
    {
        return $this->showRiskConfigDetailWithHttpInfo($request);
    }

    public function showRiskConfigDetailWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/baseline/risk-config/{check_name}/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['standard'] !== null) {
            $queryParams['standard'] = $localVarParams['standard'];
        }
        if ($localVarParams['hostId'] !== null) {
            $queryParams['host_id'] = $localVarParams['hostId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['checkName'] !== null) {
            $pathParams['check_name'] = $localVarParams['checkName'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowRiskConfigDetailResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowRiskConfigDetailRequest');
    }

    /**
     * 查询漏洞扫描策略
     *
     * 查询漏洞扫描策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVulScanPolicy($request)
    {
        return $this->showVulScanPolicyWithHttpInfo($request);
    }

    public function showVulScanPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vulnerability/scan-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowVulScanPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowVulScanPolicyRequest');
    }

    /**
     * 查询漏洞管理统计数据
     *
     * 查询漏洞管理统计数据
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVulStatics($request)
    {
        return $this->showVulStaticsWithHttpInfo($request);
    }

    public function showVulStaticsWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/vulnerability/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\ShowVulStaticsResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\ShowVulStaticsRequest');
    }

    /**
     * 开启勒索病毒防护
     *
     * 开启勒索病毒防护,请保证该region有cbr云备份服务，勒索服务与云备份服务有关联关系
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startProtection($request)
    {
        return $this->startProtectionWithHttpInfo($request);
    }

    public function startProtectionWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/ransomware/protection/open';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\StartProtectionResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\StartProtectionRequest');
    }

    /**
     * 关闭勒索病毒防护
     *
     * 关闭勒索病毒防护
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopProtection($request)
    {
        return $this->stopProtectionWithHttpInfo($request);
    }

    public function stopProtectionWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/ransomware/protection/close';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\StopProtectionResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\StopProtectionRequest');
    }

    /**
     * 切换防护状态
     *
     * 切换防护状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchHostsProtectStatus($request)
    {
        return $this->switchHostsProtectStatusWithHttpInfo($request);
    }

    public function switchHostsProtectStatusWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/host-management/protection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchHostsProtectStatusResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\SwitchHostsProtectStatusRequest');
    }

    /**
     * 修改存储库绑定的备份策略
     *
     * 修改存储库绑定的备份策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBackupPolicyInfo($request)
    {
        return $this->updateBackupPolicyInfoWithHttpInfo($request);
    }

    public function updateBackupPolicyInfoWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/backup/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateBackupPolicyInfoResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateBackupPolicyInfoRequest');
    }

    /**
     * 修改勒索防护策略
     *
     * 修改勒索防护策略
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateProtectionPolicy($request)
    {
        return $this->updateProtectionPolicyWithHttpInfo($request);
    }

    public function updateProtectionPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v5/{project_id}/ransomware/protection/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['region'] !== null) {
            $headerParams[$arr['region']] = $localVarParams['region'];
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
            $responseType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateProtectionPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Hss\V5\Model\UpdateProtectionPolicyRequest');
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