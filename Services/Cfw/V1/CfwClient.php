<?php

namespace HuaweiCloud\SDK\Cfw\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CfwClient extends Client
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
        $client = new ClientBuilder(new CfwClient(), "GlobalCredentials");
        return $client;
    }


    /**
     * 取消抓包任务
     *
     * 取消抓包任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelCaptureTask($request)
    {
        return $this->cancelCaptureTaskWithHttpInfo($request);
    }

    public function cancelCaptureTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/capture-task/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\CancelCaptureTaskResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\CancelCaptureTaskRequest');
    }

    /**
     * 创建抓包任务
     *
     * 创建抓包任务，每个任务只能执行一次。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCaptureTask($request)
    {
        return $this->createCaptureTaskWithHttpInfo($request);
    }

    public function createCaptureTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/capture-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateCaptureTaskResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateCaptureTaskRequest');
    }

    /**
     * 批量删除抓包任务
     *
     * 批量删除抓包任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCaptureTask($request)
    {
        return $this->deleteCaptureTaskWithHttpInfo($request);
    }

    public function deleteCaptureTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/capture-task/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteCaptureTaskResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteCaptureTaskRequest');
    }

    /**
     * 删除已经导入的IP黑名单
     *
     * 删除流量过滤功能下已经导入的IP黑名单，指定生效范围进行删除。 标准版的墙只会存在生效范围为EIP的IP黑名单，专业版的墙会存在生效范围为EIP和NAT的IP黑名单。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteIpBlacklist($request)
    {
        return $this->deleteIpBlacklistWithHttpInfo($request);
    }

    public function deleteIpBlacklistWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ptf/ip-blacklist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteIpBlacklistResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteIpBlacklistRequest');
    }

    /**
     * 开启或者关闭流量过滤的IP黑名单功能
     *
     * 开启或者关闭流量过滤功能，当前流量过滤是通过导入IP黑名单实现的。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableIpBlacklist($request)
    {
        return $this->enableIpBlacklistWithHttpInfo($request);
    }

    public function enableIpBlacklistWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ptf/ip-blacklist/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\EnableIpBlacklistResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\EnableIpBlacklistRequest');
    }

    /**
     * 导出用于流量过滤的IP黑名单
     *
     * 指定IP黑名单的名字进行导出，当前只有两种文件名，在EIP生效的文件名为ip-blacklist-eip.txt，在 NAT生效的文件名为ip-blacklist-nat.txt。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportIpBlacklist($request)
    {
        return $this->exportIpBlacklistWithHttpInfo($request);
    }

    public function exportIpBlacklistWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ptf/ip-blacklist/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain'],
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ExportIpBlacklistResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ExportIpBlacklistRequest');
    }

    /**
     * 导入IP黑名单用于流量过滤
     *
     * 此接口用来导入IP黑名单，IP列表保存在request的body中，IP列表支持的格式如下：
     * 单个IP地址，例如：100.1.1.10
     * 连续的IP地址段，例如：80.1.1.3-80.1.1.30
     * 掩码格式的网段，例如：6.6.6.0/24
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importIpBlacklist($request)
    {
        return $this->importIpBlacklistWithHttpInfo($request);
    }

    public function importIpBlacklistWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ptf/ip-blacklist/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ImportIpBlacklistResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ImportIpBlacklistRequest');
    }

    /**
     * 获取抓包任务结果
     *
     * 获取抓包任务结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCaptureResult($request)
    {
        return $this->listCaptureResultWithHttpInfo($request);
    }

    public function listCaptureResultWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/capture-task/capture-result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $queryParams['task_id'] = $localVarParams['taskId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['ip'] !== null) {
            $queryParams['ip'] = $localVarParams['ip'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListCaptureResultResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListCaptureResultRequest');
    }

    /**
     * 查询抓包任务
     *
     * 查询抓包任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCaptureTask($request)
    {
        return $this->listCaptureTaskWithHttpInfo($request);
    }

    public function listCaptureTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/capture-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListCaptureTaskResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListCaptureTaskRequest');
    }

    /**
     * 获取导入的IP黑名单列表信息
     *
     * 获取防火墙实例中已经导入的IP黑名单信息，标准版防火墙只会显示一条EIP的记录，专业版防火墙可能显示EIP、NAT或EIP和NAT的记录，根据导入的情况确定。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIpBlacklist($request)
    {
        return $this->listIpBlacklistWithHttpInfo($request);
    }

    public function listIpBlacklistWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ptf/ip-blacklist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpBlacklistResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpBlacklistRequest');
    }

    /**
     * 获取流量过滤功能的开关信息
     *
     * 流量过滤功能可以打开或者关闭，通过此接口可以获取当前的开关信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIpBlacklistSwitch($request)
    {
        return $this->listIpBlacklistSwitchWithHttpInfo($request);
    }

    public function listIpBlacklistSwitchWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ptf/ip-blacklist/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpBlacklistSwitchResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpBlacklistSwitchRequest');
    }

    /**
     * 查询标签信息
     *
     * 查询标签信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectTags($request)
    {
        return $this->listProjectTagsWithHttpInfo($request);
    }

    public function listProjectTagsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/cfw-cfw/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListProjectTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListProjectTagsRequest');
    }

    /**
     * 查询资源标签信息
     *
     * 查询资源标签信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceTags($request)
    {
        return $this->listResourceTagsWithHttpInfo($request);
    }

    public function listResourceTagsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/cfw-cfw/{fw_instance_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListResourceTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListResourceTagsRequest');
    }

    /**
     * 用于流量过滤的IP黑名单导入失败后进行重新导入
     *
     * 用于流量过滤的IP黑名单导入失败后，调用此接口进行重试。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function retryIpBlacklist($request)
    {
        return $this->retryIpBlacklistWithHttpInfo($request);
    }

    public function retryIpBlacklistWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ptf/ip-blacklist/retry';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\RetryIpBlacklistResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\RetryIpBlacklistRequest');
    }

    /**
     * 保存资源标签接口
     *
     * 保存资源标签接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function saveTags($request)
    {
        return $this->saveTagsWithHttpInfo($request);
    }

    public function saveTagsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/cfw-cfw/{fw_instance_id}/tags/save';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\SaveTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\SaveTagsRequest');
    }

    /**
     * 获取告警配置信息
     *
     * 获取告警配置信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAlarmConfig($request)
    {
        return $this->showAlarmConfigWithHttpInfo($request);
    }

    public function showAlarmConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/alarm/config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAlarmConfigResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAlarmConfigRequest');
    }

    /**
     * 获取防火墙反病毒规则信息
     *
     * 获取防火墙反病毒规则信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAntiVirusRule($request)
    {
        return $this->showAntiVirusRuleWithHttpInfo($request);
    }

    public function showAntiVirusRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/anti-virus/rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
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
        if ($localVarParams['engineType'] !== null) {
            $queryParams['engine_type'] = $localVarParams['engineType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAntiVirusRuleResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAntiVirusRuleRequest');
    }

    /**
     * 查看反病毒开关
     *
     * 查看反病毒开关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAntiVirusSwitch($request)
    {
        return $this->showAntiVirusSwitchWithHttpInfo($request);
    }

    public function showAntiVirusSwitchWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/anti-virus/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAntiVirusSwitchResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAntiVirusSwitchRequest');
    }

    /**
     * 修改告警配置接口
     *
     * 修改告警配置接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAlarmConfig($request)
    {
        return $this->updateAlarmConfigWithHttpInfo($request);
    }

    public function updateAlarmConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/alarm/config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAlarmConfigResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAlarmConfigRequest');
    }

    /**
     * 修改反病毒规则
     *
     * 修改反病毒规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAntiVirusRule($request)
    {
        return $this->updateAntiVirusRuleWithHttpInfo($request);
    }

    public function updateAntiVirusRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/anti-virus/rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAntiVirusRuleResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAntiVirusRuleRequest');
    }

    /**
     * 修改反病毒开关
     *
     * 修改反病毒开关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAntiVirusSwitch($request)
    {
        return $this->updateAntiVirusSwitchWithHttpInfo($request);
    }

    public function updateAntiVirusSwitchWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/anti-virus/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAntiVirusSwitchResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAntiVirusSwitchRequest');
    }

    /**
     * 创建ACL规则
     *
     * 创建ACL规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addAclRule($request)
    {
        return $this->addAclRuleWithHttpInfo($request);
    }

    public function addAclRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddAclRuleResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddAclRuleRequest');
    }

    /**
     * 批量删除Acl规则
     *
     * 批量删除Acl规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteAclRules($request)
    {
        return $this->batchDeleteAclRulesWithHttpInfo($request);
    }

    public function batchDeleteAclRulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteAclRulesResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteAclRulesRequest');
    }

    /**
     * 批量更新规则动作
     *
     * 批量更新规则动作
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateAclRuleActions($request)
    {
        return $this->batchUpdateAclRuleActionsWithHttpInfo($request);
    }

    public function batchUpdateAclRuleActionsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchUpdateAclRuleActionsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchUpdateAclRuleActionsRequest');
    }

    /**
     * 删除ACL规则
     *
     * 删除ACL规则组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAclRule($request)
    {
        return $this->deleteAclRuleWithHttpInfo($request);
    }

    public function deleteAclRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/{acl_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['aclRuleId'] !== null) {
            $pathParams['acl_rule_id'] = $localVarParams['aclRuleId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAclRuleResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAclRuleRequest');
    }

    /**
     * 删除规则击中次数
     *
     * 清除规则击中次数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAclRuleHitCount($request)
    {
        return $this->deleteAclRuleHitCountWithHttpInfo($request);
    }

    public function deleteAclRuleHitCountWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAclRuleHitCountResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAclRuleHitCountRequest');
    }

    /**
     * 下载导出结果
     *
     * 下载导出结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadExportResult($request)
    {
        return $this->downloadExportResultWithHttpInfo($request);
    }

    public function downloadExportResultWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/export-result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.ms-excel']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.ms-excel'],
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DownloadExportResultResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DownloadExportResultRequest');
    }

    /**
     * 下载导入规则
     *
     * 下载导入规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadImportResult($request)
    {
        return $this->downloadImportResultWithHttpInfo($request);
    }

    public function downloadImportResultWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/import-result';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.ms-excel']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.ms-excel'],
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DownloadImportResultResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DownloadImportResultRequest');
    }

    /**
     * 下载导入模板
     *
     * 下载导入模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadImportTemplate($request)
    {
        return $this->downloadImportTemplateWithHttpInfo($request);
    }

    public function downloadImportTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/import-template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.ms-excel']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.ms-excel'],
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DownloadImportTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DownloadImportTemplateRequest');
    }

    /**
     * 导出访问控制规则
     *
     * 导出访问控制规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportRuleAcl($request)
    {
        return $this->exportRuleAclWithHttpInfo($request);
    }

    public function exportRuleAclWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ExportRuleAclResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ExportRuleAclRequest');
    }

    /**
     * 导入访问控制规则
     *
     * 导入访问控制规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importRuleAcl($request)
    {
        return $this->importRuleAclWithHttpInfo($request);
    }

    public function importRuleAclWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/import';
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
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ImportRuleAclResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ImportRuleAclRequest');
    }

    /**
     * 获取规则击中次数
     *
     * 获取规则击中次数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAclRuleHitCount($request)
    {
        return $this->listAclRuleHitCountWithHttpInfo($request);
    }

    public function listAclRuleHitCountWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAclRuleHitCountResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAclRuleHitCountRequest');
    }

    /**
     * 获取规则的命中次数和最后一次命中时间
     *
     * 获取规则的命中次数和最后一次命中时间
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAclRuleHitStatus($request)
    {
        return $this->listAclRuleHitStatusWithHttpInfo($request);
    }

    public function listAclRuleHitStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/{fw_instance_id}/acl-rule/hit-info/batch-query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAclRuleHitStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAclRuleHitStatusRequest');
    }

    /**
     * 查询防护规则
     *
     * 查询防护规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAclRules($request)
    {
        return $this->listAclRulesWithHttpInfo($request);
    }

    public function listAclRulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['ip'] !== null) {
            $queryParams['ip'] = $localVarParams['ip'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['actionType'] !== null) {
            $queryParams['action_type'] = $localVarParams['actionType'];
        }
        if ($localVarParams['addressType'] !== null) {
            $queryParams['address_type'] = $localVarParams['addressType'];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['tagsId'] !== null) {
            $queryParams['tags_id'] = $localVarParams['tagsId'];
        }
        if ($localVarParams['source'] !== null) {
            $queryParams['source'] = $localVarParams['source'];
        }
        if ($localVarParams['destination'] !== null) {
            $queryParams['destination'] = $localVarParams['destination'];
        }
        if ($localVarParams['service'] !== null) {
            $queryParams['service'] = $localVarParams['service'];
        }
        if ($localVarParams['application'] !== null) {
            $queryParams['application'] = $localVarParams['application'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAclRulesResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAclRulesRequest');
    }

    /**
     * 查看region列表
     *
     * 查看region列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRegions($request)
    {
        return $this->listRegionsWithHttpInfo($request);
    }

    public function listRegionsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/regions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListRegionsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListRegionsRequest');
    }

    /**
     * 查询规则标签
     *
     * 查询规则标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRuleAclTags($request)
    {
        return $this->listRuleAclTagsWithHttpInfo($request);
    }

    public function listRuleAclTagsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/cfw-acl/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListRuleAclTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListRuleAclTagsRequest');
    }

    /**
     * 查询导出结果
     *
     * 查询导出结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showExportStatus($request)
    {
        return $this->showExportStatusWithHttpInfo($request);
    }

    public function showExportStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/export-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowExportStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowExportStatusRequest');
    }

    /**
     * 查看导入状态接口
     *
     * 查看导入状态接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showImportStatus($request)
    {
        return $this->showImportStatusWithHttpInfo($request);
    }

    public function showImportStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/import-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowImportStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowImportStatusRequest');
    }

    /**
     * 更新ACL规则
     *
     * 更新ACL规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAclRule($request)
    {
        return $this->updateAclRuleWithHttpInfo($request);
    }

    public function updateAclRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/{acl_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['aclRuleId'] !== null) {
            $pathParams['acl_rule_id'] = $localVarParams['aclRuleId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAclRuleResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAclRuleRequest');
    }

    /**
     * ACL防护规则优先级设置
     *
     * ACL防护规则优先级设置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAclRuleOrder($request)
    {
        return $this->updateAclRuleOrderWithHttpInfo($request);
    }

    public function updateAclRuleOrderWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/acl-rule/order/{acl_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['aclRuleId'] !== null) {
            $pathParams['acl_rule_id'] = $localVarParams['aclRuleId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAclRuleOrderResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAclRuleOrderRequest');
    }

    /**
     * 添加地址组成员
     *
     * 添加地址组成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addAddressItem($request)
    {
        return $this->addAddressItemWithHttpInfo($request);
    }

    public function addAddressItemWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddAddressItemResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddAddressItemRequest');
    }

    /**
     * 添加地址组
     *
     * 添加地址组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addAddressSet($request)
    {
        return $this->addAddressSetWithHttpInfo($request);
    }

    public function addAddressSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-set';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddAddressSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddAddressSetRequest');
    }

    /**
     * 批量删除地址组成员
     *
     * 批量删除地址组成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteAddressItems($request)
    {
        return $this->batchDeleteAddressItemsWithHttpInfo($request);
    }

    public function batchDeleteAddressItemsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteAddressItemsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteAddressItemsRequest');
    }

    /**
     * 批量删除地址组
     *
     * 批量删除地址组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteAddressSets($request)
    {
        return $this->batchDeleteAddressSetsWithHttpInfo($request);
    }

    public function batchDeleteAddressSetsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-sets/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteAddressSetsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteAddressSetsRequest');
    }

    /**
     * 删除地址组成员
     *
     * 删除地址组成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAddressItem($request)
    {
        return $this->deleteAddressItemWithHttpInfo($request);
    }

    public function deleteAddressItemWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-items/{item_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['itemId'] !== null) {
            $pathParams['item_id'] = $localVarParams['itemId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAddressItemResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAddressItemRequest');
    }

    /**
     * 删除地址组
     *
     * 删除地址组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAddressSet($request)
    {
        return $this->deleteAddressSetWithHttpInfo($request);
    }

    public function deleteAddressSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-sets/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAddressSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteAddressSetRequest');
    }

    /**
     * 查询地址组成员
     *
     * 查询地址组成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAddressItems($request)
    {
        return $this->listAddressItemsWithHttpInfo($request);
    }

    public function listAddressItemsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['setId'] !== null) {
            $queryParams['set_id'] = $localVarParams['setId'];
        }
        if ($localVarParams['keyWord'] !== null) {
            $queryParams['key_word'] = $localVarParams['keyWord'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['address'] !== null) {
            $queryParams['address'] = $localVarParams['address'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['queryAddressSetType'] !== null) {
            $queryParams['query_address_set_type'] = $localVarParams['queryAddressSetType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAddressItemsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAddressItemsRequest');
    }

    /**
     * 查询地址组详细信息
     *
     * 查询地址组详细
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAddressSetDetail($request)
    {
        return $this->listAddressSetDetailWithHttpInfo($request);
    }

    public function listAddressSetDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-sets/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['queryAddressSetType'] !== null) {
            $queryParams['query_address_set_type'] = $localVarParams['queryAddressSetType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAddressSetDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAddressSetDetailRequest');
    }

    /**
     * 查询地址组列表
     *
     * 查询地址组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAddressSets($request)
    {
        return $this->listAddressSetsWithHttpInfo($request);
    }

    public function listAddressSetsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-sets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['keyWord'] !== null) {
            $queryParams['key_word'] = $localVarParams['keyWord'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['address'] !== null) {
            $queryParams['address'] = $localVarParams['address'];
        }
        if ($localVarParams['addressType'] !== null) {
            $queryParams['address_type'] = $localVarParams['addressType'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['queryAddressSetType'] !== null) {
            $queryParams['query_address_set_type'] = $localVarParams['queryAddressSetType'];
        }
        if ($localVarParams['addressSetType'] !== null) {
            $queryParams['address_set_type'] = $localVarParams['addressSetType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAddressSetsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAddressSetsRequest');
    }

    /**
     * 更新地址组信息
     *
     * 更新地址组信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAddressSet($request)
    {
        return $this->updateAddressSetWithHttpInfo($request);
    }

    public function updateAddressSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/address-sets/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAddressSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAddressSetRequest');
    }

    /**
     * 更新对象配置描述
     *
     * 更新对象配置描述
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateObjectConfigDesc($request)
    {
        return $this->updateObjectConfigDescWithHttpInfo($request);
    }

    public function updateObjectConfigDescWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/config/object/description';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateObjectConfigDescResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateObjectConfigDescRequest');
    }

    /**
     * 创建黑白名单规则
     *
     * 创建黑白名单规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addBlackWhiteList($request)
    {
        return $this->addBlackWhiteListWithHttpInfo($request);
    }

    public function addBlackWhiteListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/black-white-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddBlackWhiteListResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddBlackWhiteListRequest');
    }

    /**
     * 批量添加黑白名单列表
     *
     * 批量添加黑白名单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateBlackWhiteList($request)
    {
        return $this->batchCreateBlackWhiteListWithHttpInfo($request);
    }

    public function batchCreateBlackWhiteListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/black-white-lists';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchCreateBlackWhiteListResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchCreateBlackWhiteListRequest');
    }

    /**
     * 批量删除黑白名单列表
     *
     * 批量删除黑白名单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteBlackWhiteLists($request)
    {
        return $this->batchDeleteBlackWhiteListsWithHttpInfo($request);
    }

    public function batchDeleteBlackWhiteListsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/black-white-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteBlackWhiteListsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteBlackWhiteListsRequest');
    }

    /**
     * 删除黑白名单规则
     *
     * 删除黑白名单规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBlackWhiteList($request)
    {
        return $this->deleteBlackWhiteListWithHttpInfo($request);
    }

    public function deleteBlackWhiteListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/black-white-list/{list_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['listId'] !== null) {
            $pathParams['list_id'] = $localVarParams['listId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteBlackWhiteListResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteBlackWhiteListRequest');
    }

    /**
     * 查询黑白名单列表
     *
     * 查询黑白名单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBlackWhiteLists($request)
    {
        return $this->listBlackWhiteListsWithHttpInfo($request);
    }

    public function listBlackWhiteListsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/black-white-lists';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['listType'] !== null) {
            $queryParams['list_type'] = $localVarParams['listType'];
        }
        if ($localVarParams['addressType'] !== null) {
            $queryParams['address_type'] = $localVarParams['addressType'];
        }
        if ($localVarParams['address'] !== null) {
            $queryParams['address'] = $localVarParams['address'];
        }
        if ($localVarParams['port'] !== null) {
            $queryParams['port'] = $localVarParams['port'];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListBlackWhiteListsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListBlackWhiteListsRequest');
    }

    /**
     * 更新黑白名单列表
     *
     * 更新黑白名单列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBlackWhiteList($request)
    {
        return $this->updateBlackWhiteListWithHttpInfo($request);
    }

    public function updateBlackWhiteListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/black-white-list/{list_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['listId'] !== null) {
            $pathParams['list_id'] = $localVarParams['listId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateBlackWhiteListResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateBlackWhiteListRequest');
    }

    /**
     * 添加指定DNS服务器
     *
     * 添加指定DNS服务器
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addCustomDnsServer($request)
    {
        return $this->addCustomDnsServerWithHttpInfo($request);
    }

    public function addCustomDnsServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dns/server/{server_ip}/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['serverIp'] !== null) {
            $pathParams['server_ip'] = $localVarParams['serverIp'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddCustomDnsServerResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddCustomDnsServerRequest');
    }

    /**
     * 添加域名组
     *
     * 添加域名组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDomainSet($request)
    {
        return $this->addDomainSetWithHttpInfo($request);
    }

    public function addDomainSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-set';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddDomainSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddDomainSetRequest');
    }

    /**
     * 添加域名列表
     *
     * 添加域名列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addDomains($request)
    {
        return $this->addDomainsWithHttpInfo($request);
    }

    public function addDomainsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-set/domains/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddDomainsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddDomainsRequest');
    }

    /**
     * 批量删除域名组
     *
     * 批量删除域名组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteDomainSet($request)
    {
        return $this->batchDeleteDomainSetWithHttpInfo($request);
    }

    public function batchDeleteDomainSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-sets/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteDomainSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteDomainSetRequest');
    }

    /**
     * 删除域名组
     *
     * 删除域名组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDomainSet($request)
    {
        return $this->deleteDomainSetWithHttpInfo($request);
    }

    public function deleteDomainSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-set/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteDomainSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteDomainSetRequest');
    }

    /**
     * 删除域名列表
     *
     * 删除域名列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDomains($request)
    {
        return $this->deleteDomainsWithHttpInfo($request);
    }

    public function deleteDomainsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-set/domains/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteDomainsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteDomainsRequest');
    }

    /**
     * 查询DNS服务器列表
     *
     * 查询DNS服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDnsServers($request)
    {
        return $this->listDnsServersWithHttpInfo($request);
    }

    public function listDnsServersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dns/servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDnsServersResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDnsServersRequest');
    }

    /**
     * 查询域名解析IP地址
     *
     * 测试域名有效性
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomainParseDetail($request)
    {
        return $this->listDomainParseDetailWithHttpInfo($request);
    }

    public function listDomainParseDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain/parse/{domain_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['addressType'] !== null) {
            $queryParams['address_type'] = $localVarParams['addressType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['domainName'] !== null) {
            $pathParams['domain_name'] = $localVarParams['domainName'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainParseDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainParseDetailRequest');
    }

    /**
     * 获取域名地址解析结果
     *
     * 获取域名地址解析结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomainParseIp($request)
    {
        return $this->listDomainParseIpWithHttpInfo($request);
    }

    public function listDomainParseIpWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain/parse-ip-list/{domain_address_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['addressType'] !== null) {
            $queryParams['address_type'] = $localVarParams['addressType'];
        }
        if ($localVarParams['domainSetId'] !== null) {
            $queryParams['domain_set_id'] = $localVarParams['domainSetId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['domainAddressId'] !== null) {
            $pathParams['domain_address_id'] = $localVarParams['domainAddressId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainParseIpResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainParseIpRequest');
    }

    /**
     * 获取域名解析结果
     *
     * 获取域名解析结果
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomainResolveIp($request)
    {
        return $this->listDomainResolveIpWithHttpInfo($request);
    }

    public function listDomainResolveIpWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/rule/domain/resolve-ip-list/{domain_address_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['addressType'] !== null) {
            $queryParams['address_type'] = $localVarParams['addressType'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['domainAddressId'] !== null) {
            $pathParams['domain_address_id'] = $localVarParams['domainAddressId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainResolveIpResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainResolveIpRequest');
    }

    /**
     * 查询域名组列表
     *
     * 查询域名组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomainSets($request)
    {
        return $this->listDomainSetsWithHttpInfo($request);
    }

    public function listDomainSetsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-sets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['keyWord'] !== null) {
            $queryParams['key_word'] = $localVarParams['keyWord'];
        }
        if ($localVarParams['domainSetType'] !== null) {
            $queryParams['domain_set_type'] = $localVarParams['domainSetType'];
        }
        if ($localVarParams['configStatus'] !== null) {
            $queryParams['config_status'] = $localVarParams['configStatus'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainSetsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainSetsRequest');
    }

    /**
     * 获取域名组下域名列表
     *
     * 获取域名组下域名列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDomains($request)
    {
        return $this->listDomainsWithHttpInfo($request);
    }

    public function listDomainsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-set/domains/{domain_set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['domainName'] !== null) {
            $queryParams['domain_name'] = $localVarParams['domainName'];
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_Id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['domainSetId'] !== null) {
            $pathParams['domain_set_id'] = $localVarParams['domainSetId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListDomainsRequest');
    }

    /**
     * 查看域名组详情
     *
     * 查看域名组详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDomainSetDetail($request)
    {
        return $this->showDomainSetDetailWithHttpInfo($request);
    }

    public function showDomainSetDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-set/{domain_set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['domainSetId'] !== null) {
            $pathParams['domain_set_id'] = $localVarParams['domainSetId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowDomainSetDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowDomainSetDetailRequest');
    }

    /**
     * 更新DNS服务器列表
     *
     * 更新DNS服务器列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDnsServers($request)
    {
        return $this->updateDnsServersWithHttpInfo($request);
    }

    public function updateDnsServersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dns/servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateDnsServersResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateDnsServersRequest');
    }

    /**
     * 更新域名组
     *
     * 更新域名组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDomainSet($request)
    {
        return $this->updateDomainSetWithHttpInfo($request);
    }

    public function updateDomainSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/domain-set/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateDomainSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateDomainSetRequest');
    }

    /**
     * 添加EIP告警白名单
     *
     * 添加EIP告警白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addEipAlarmWhitelist($request)
    {
        return $this->addEipAlarmWhitelistWithHttpInfo($request);
    }

    public function addEipAlarmWhitelistWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eip/alarm-whitelist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddEipAlarmWhitelistResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddEipAlarmWhitelistRequest');
    }

    /**
     * 弹性IP开启关闭
     *
     * 开启关闭EIP，客户购买EIP后首次开启EIP防护前需使用ListEips同步EIP资产，sync字段设置为1。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeEipStatus($request)
    {
        return $this->changeEipStatusWithHttpInfo($request);
    }

    public function changeEipStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eip/protect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeEipStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeEipStatusRequest');
    }

    /**
     * 查看EIP告警白名单
     *
     * 查看EIP告警白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlarmWhitelist($request)
    {
        return $this->listAlarmWhitelistWithHttpInfo($request);
    }

    public function listAlarmWhitelistWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eip/alarm-whitelist/{fw_instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ipAddress'] !== null) {
            $queryParams['ip_address'] = $localVarParams['ipAddress'];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAlarmWhitelistResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAlarmWhitelistRequest');
    }

    /**
     * 查询EIP数量
     *
     * 查询EIP数量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEipCount($request)
    {
        return $this->listEipCountWithHttpInfo($request);
    }

    public function listEipCountWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eip-count/{object_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['objectId'] !== null) {
            $pathParams['object_id'] = $localVarParams['objectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListEipCountResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListEipCountRequest');
    }

    /**
     * 弹性IP列表查询
     *
     * 弹性IP列表查询
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEips($request)
    {
        return $this->listEipsWithHttpInfo($request);
    }

    public function listEipsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eips/protect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['keyWord'] !== null) {
            $queryParams['key_word'] = $localVarParams['keyWord'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['sync'] !== null) {
            $queryParams['sync'] = $localVarParams['sync'];
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
        if ($localVarParams['deviceKey'] !== null) {
            $queryParams['device_key'] = $localVarParams['deviceKey'];
        }
        if ($localVarParams['addressType'] !== null) {
            $queryParams['address_type'] = $localVarParams['addressType'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['fwKeyWord'] !== null) {
            $queryParams['fw_key_word'] = $localVarParams['fwKeyWord'];
        }
        if ($localVarParams['epsId'] !== null) {
            $queryParams['eps_id'] = $localVarParams['epsId'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListEipsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListEipsRequest');
    }

    /**
     * 获取EIP自动防护状态信息
     *
     * 获取EIP自动防护状态信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAutoProtectStatus($request)
    {
        return $this->showAutoProtectStatusWithHttpInfo($request);
    }

    public function showAutoProtectStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eip/auto-protect-status/{object_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['objectId'] !== null) {
            $pathParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAutoProtectStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAutoProtectStatusRequest');
    }

    /**
     * 修改EIP自动防护开关
     *
     * 修改EIP自动防护开关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchAutoProtectStatus($request)
    {
        return $this->switchAutoProtectStatusWithHttpInfo($request);
    }

    public function switchAutoProtectStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eip/auto-protect-status/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\SwitchAutoProtectStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\SwitchAutoProtectStatusRequest');
    }

    /**
     * 一键逃生/一键恢复开关
     *
     * 一键逃生/一键恢复开关
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchFirewallEipProtection($request)
    {
        return $this->switchFirewallEipProtectionWithHttpInfo($request);
    }

    public function switchFirewallEipProtectionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eip/protect/all/{fw_instance_id}/operation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\SwitchFirewallEipProtectionResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\SwitchFirewallEipProtectionRequest');
    }

    /**
     * 创建东西向防火墙
     *
     * 创建东西向防火墙
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEastWestFirewall($request)
    {
        return $this->createEastWestFirewallWithHttpInfo($request);
    }

    public function createEastWestFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/firewall/east-west';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateEastWestFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateEastWestFirewallRequest');
    }

    /**
     * 创建防火墙
     *
     * 创建防火墙
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFirewall($request)
    {
        return $this->createFirewallWithHttpInfo($request);
    }

    public function createFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/firewall';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateFirewallRequest');
    }

    /**
     * 标签创建接口
     *
     * 创建标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTag($request)
    {
        return $this->createTagWithHttpInfo($request);
    }

    public function createTagWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/cfw-cfw/{fw_instance_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateTagResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateTagRequest');
    }

    /**
     * 删除防火墙
     *
     * 删除防火墙，仅按需生效
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFirewall($request)
    {
        return $this->deleteFirewallWithHttpInfo($request);
    }

    public function deleteFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/firewall/{resource_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteFirewallRequest');
    }

    /**
     * 删除标签
     *
     * 删除标签
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTag($request)
    {
        return $this->deleteTagWithHttpInfo($request);
    }

    public function deleteTagWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/cfw-cfw/{fw_instance_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteTagResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteTagRequest');
    }

    /**
     * 获取东西向防火墙信息
     *
     * 获取东西向防火墙信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEastWestFirewall($request)
    {
        return $this->listEastWestFirewallWithHttpInfo($request);
    }

    public function listEastWestFirewallWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/firewall/east-west';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListEastWestFirewallResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListEastWestFirewallRequest');
    }

    /**
     * 查询防火墙详细信息
     *
     * 查询防火墙实例
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFirewallDetail($request)
    {
        return $this->listFirewallDetailWithHttpInfo($request);
    }

    public function listFirewallDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/firewall/exist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceType'] !== null) {
            $queryParams['service_type'] = $localVarParams['serviceType'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFirewallDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFirewallDetailRequest');
    }

    /**
     * 查询防火墙列表
     *
     * 查询防火墙列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFirewallList($request)
    {
        return $this->listFirewallListWithHttpInfo($request);
    }

    public function listFirewallListWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/firewalls/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFirewallListResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFirewallListRequest');
    }

    /**
     * 获取CFW任务执行状态
     *
     * 获取CFW任务执行状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJob($request)
    {
        return $this->listJobWithHttpInfo($request);
    }

    public function listJobWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListJobResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListJobRequest');
    }

    /**
     * 查询防护VPC数
     *
     * 查询防护vpc信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProtectedVpcs($request)
    {
        return $this->listProtectedVpcsWithHttpInfo($request);
    }

    public function listProtectedVpcsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/vpcs/protection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListProtectedVpcsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListProtectedVpcsRequest');
    }

    /**
     * 查询防火墙配额信息
     *
     * 查询防火墙配额信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showConfigQuota($request)
    {
        return $this->showConfigQuotaWithHttpInfo($request);
    }

    public function showConfigQuotaWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/cfw/{fw_instance_id}/quota';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['configType'] !== null) {
            $queryParams['config_type'] = $localVarParams['configType'];
        }
        if ($localVarParams['setId'] !== null) {
            $queryParams['set_id'] = $localVarParams['setId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowConfigQuotaResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowConfigQuotaRequest');
    }

    /**
     * 查询南北向防火墙防护状态
     *
     * 查询南北向防火墙防护状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSnFirewallProtectionStatus($request)
    {
        return $this->showSnFirewallProtectionStatusWithHttpInfo($request);
    }

    public function showSnFirewallProtectionStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/eip/protection-status/{fw_instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowSnFirewallProtectionStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowSnFirewallProtectionStatusRequest');
    }

    /**
     * 更改防火墙名称
     *
     * 更改防火墙名称
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFirewallName($request)
    {
        return $this->updateFirewallNameWithHttpInfo($request);
    }

    public function updateFirewallNameWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/firewall/name';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateFirewallNameResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateFirewallNameRequest');
    }

    /**
     * 批量删除自定义IPS规则
     *
     * 批量删除自定义IPS规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteCustomerIps($request)
    {
        return $this->batchDeleteCustomerIpsWithHttpInfo($request);
    }

    public function batchDeleteCustomerIpsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/custom-rule/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteCustomerIpsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteCustomerIpsRequest');
    }

    /**
     * 批量更新自定义IPS规则的动作
     *
     * 批量更新自定义IPS规则的动作
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateCustomerIpsAction($request)
    {
        return $this->batchUpdateCustomerIpsActionWithHttpInfo($request);
    }

    public function batchUpdateCustomerIpsActionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/custom-rule/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchUpdateCustomerIpsActionResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchUpdateCustomerIpsActionRequest');
    }

    /**
     * 切换防护模式
     *
     * 切换防护模式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeIpsProtectMode($request)
    {
        return $this->changeIpsProtectModeWithHttpInfo($request);
    }

    public function changeIpsProtectModeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/protect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeIpsProtectModeResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeIpsProtectModeRequest');
    }

    /**
     * 改变IPS规则模式
     *
     * 改变IPS规则模式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeIpsRuleMode($request)
    {
        return $this->changeIpsRuleModeWithHttpInfo($request);
    }

    public function changeIpsRuleModeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips-rule/mode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeIpsRuleModeResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeIpsRuleModeRequest');
    }

    /**
     * IPS特性开关操作
     *
     * 切换开关状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeIpsSwitchStatus($request)
    {
        return $this->changeIpsSwitchStatusWithHttpInfo($request);
    }

    public function changeIpsSwitchStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeIpsSwitchStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeIpsSwitchStatusRequest');
    }

    /**
     * 创建自定义IPS规则
     *
     * 创建自定义IPS规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCustomerIps($request)
    {
        return $this->createCustomerIpsWithHttpInfo($request);
    }

    public function createCustomerIpsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/custom-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateCustomerIpsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateCustomerIpsRequest');
    }

    /**
     * 查询频率IPS规则信息
     *
     * 查询频率IPS规则信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAdvancedIpsRules($request)
    {
        return $this->listAdvancedIpsRulesWithHttpInfo($request);
    }

    public function listAdvancedIpsRulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/advanced-ips-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAdvancedIpsRulesResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAdvancedIpsRulesRequest');
    }

    /**
     * 查看自定义IPS规则列表
     *
     * 查看自定义IPS规则列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerIps($request)
    {
        return $this->listCustomerIpsWithHttpInfo($request);
    }

    public function listCustomerIpsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/custom-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['actionType'] !== null) {
            $queryParams['action_type'] = $localVarParams['actionType'];
        }
        if ($localVarParams['affectedOs'] !== null) {
            $queryParams['affected_os'] = $localVarParams['affectedOs'];
        }
        if ($localVarParams['attackType'] !== null) {
            $queryParams['attack_type'] = $localVarParams['attackType'];
        }
        if ($localVarParams['ipsName'] !== null) {
            $queryParams['ips_name'] = $localVarParams['ipsName'];
        }
        if ($localVarParams['ipsId'] !== null) {
            $queryParams['ips_id'] = $localVarParams['ipsId'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['severity'] !== null) {
            $queryParams['severity'] = $localVarParams['severity'];
        }
        if ($localVarParams['software'] !== null) {
            $queryParams['software'] = $localVarParams['software'];
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListCustomerIpsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListCustomerIpsRequest');
    }

    /**
     * 查询防护模式
     *
     * 查询防护模式
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIpsProtectMode($request)
    {
        return $this->listIpsProtectModeWithHttpInfo($request);
    }

    public function listIpsProtectModeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/protect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpsProtectModeResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpsProtectModeRequest');
    }

    /**
     * 获取IPS规则列表
     *
     * 获取IPS规则列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIpsRules($request)
    {
        return $this->listIpsRulesWithHttpInfo($request);
    }

    public function listIpsRulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['affectedApplicationLike'] !== null) {
            $queryParams['affected_application_like'] = $localVarParams['affectedApplicationLike'];
        }
        if ($localVarParams['createTime'] !== null) {
            $queryParams['create_time'] = $localVarParams['createTime'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['ipsCveLike'] !== null) {
            $queryParams['ips_cve_like'] = $localVarParams['ipsCveLike'];
        }
        if ($localVarParams['ipsGroup'] !== null) {
            $queryParams['ips_group'] = $localVarParams['ipsGroup'];
        }
        if ($localVarParams['ipsId'] !== null) {
            $queryParams['ips_id'] = $localVarParams['ipsId'];
        }
        if ($localVarParams['ipsLevel'] !== null) {
            $queryParams['ips_level'] = $localVarParams['ipsLevel'];
        }
        if ($localVarParams['ipsNameLike'] !== null) {
            $queryParams['ips_name_like'] = $localVarParams['ipsNameLike'];
        }
        if ($localVarParams['ipsRulesTypeLike'] !== null) {
            $queryParams['ips_rules_type_like'] = $localVarParams['ipsRulesTypeLike'];
        }
        if ($localVarParams['ipsStatus'] !== null) {
            $queryParams['ips_status'] = $localVarParams['ipsStatus'];
        }
        if ($localVarParams['isUpdatedIpsRuleQueried'] !== null) {
            $queryParams['is_updated_ips_rule_queried'] = $localVarParams['isUpdatedIpsRuleQueried'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpsRulesResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpsRulesRequest');
    }

    /**
     * 查询IPS特性开关状态
     *
     * 查询IPS特性开关状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIpsSwitchStatus($request)
    {
        return $this->listIpsSwitchStatusWithHttpInfo($request);
    }

    public function listIpsSwitchStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpsSwitchStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpsSwitchStatusRequest');
    }

    /**
     * 查询自定义IPS规则详情
     *
     * 功能说明：自定义IPS规则详情，特性:根据路径输入的IPS ID查看对应的自定义IPS详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCustomerIpsInfo($request)
    {
        return $this->showCustomerIpsInfoWithHttpInfo($request);
    }

    public function showCustomerIpsInfoWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/custom-rule/{ips_cfw_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['ipsCfwId'] !== null) {
            $pathParams['ips_cfw_id'] = $localVarParams['ipsCfwId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowCustomerIpsInfoResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowCustomerIpsInfoRequest');
    }

    /**
     * 获取IPS规则细节
     *
     * 获取IPS规则细节
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIpsUpdateTime($request)
    {
        return $this->showIpsUpdateTimeWithHttpInfo($request);
    }

    public function showIpsUpdateTimeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips-rule/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowIpsUpdateTimeResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowIpsUpdateTimeRequest');
    }

    /**
     * 创建频率IPS规则
     *
     * 创建频率IPS规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAdvancedIpsRule($request)
    {
        return $this->updateAdvancedIpsRuleWithHttpInfo($request);
    }

    public function updateAdvancedIpsRuleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/advanced-ips-rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAdvancedIpsRuleResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateAdvancedIpsRuleRequest');
    }

    /**
     * 更新自定义IPS规则
     *
     * 更新自定义IPS规则
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCustomerIps($request)
    {
        return $this->updateCustomerIpsWithHttpInfo($request);
    }

    public function updateCustomerIpsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/ips/custom-rule/{ips_cfw_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ipsCfwId'] !== null) {
            $pathParams['ips_cfw_id'] = $localVarParams['ipsCfwId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateCustomerIpsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateCustomerIpsRequest');
    }

    /**
     * 批量添加IPS白名单
     *
     * 批量添加IPS白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateIpsWhitelist($request)
    {
        return $this->batchCreateIpsWhitelistWithHttpInfo($request);
    }

    public function batchCreateIpsWhitelistWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/{fw_instance_id}/ips/whitelist/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchCreateIpsWhitelistResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchCreateIpsWhitelistRequest');
    }

    /**
     * 批量删除IPS白名单
     *
     * 批量删除IPS白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteIpsWhitelist($request)
    {
        return $this->batchDeleteIpsWhitelistWithHttpInfo($request);
    }

    public function batchDeleteIpsWhitelistWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/{fw_instance_id}/ips/whitelist/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteIpsWhitelistResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteIpsWhitelistRequest');
    }

    /**
     * 查询IPS白名单列表详情
     *
     * 查询IPS白名单列表详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIpsWhitelists($request)
    {
        return $this->listIpsWhitelistsWithHttpInfo($request);
    }

    public function listIpsWhitelistsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/{fw_instance_id}/ips/whitelist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sourceAddress'] !== null) {
            $queryParams['source_address'] = $localVarParams['sourceAddress'];
        }
        if ($localVarParams['destAddress'] !== null) {
            $queryParams['dest_address'] = $localVarParams['destAddress'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpsWhitelistsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListIpsWhitelistsRequest');
    }

    /**
     * 更新IPS白名单
     *
     * 更新IPS白名单
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateIpsWhitelist($request)
    {
        return $this->updateIpsWhitelistWithHttpInfo($request);
    }

    public function updateIpsWhitelistWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/{fw_instance_id}/ips/whitelist/{list_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['listId'] !== null) {
            $pathParams['list_id'] = $localVarParams['listId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateIpsWhitelistResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateIpsWhitelistRequest');
    }

    /**
     * 查询攻击统计
     *
     * 根据防火墙攻击日志，查询攻击统计信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAttackStatistic($request)
    {
        return $this->listAttackStatisticWithHttpInfo($request);
    }

    public function listAttackStatisticWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/attack-statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['range'] !== null) {
            $queryParams['range'] = $localVarParams['range'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['item'] !== null) {
            $queryParams['item'] = $localVarParams['item'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAttackStatisticResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAttackStatisticRequest');
    }

    /**
     * 查询流量日志统计
     *
     * 查询流量日志统计
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFlowStatistic($request)
    {
        return $this->listFlowStatisticWithHttpInfo($request);
    }

    public function listFlowStatisticWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/flow-statistic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['range'] !== null) {
            $queryParams['range'] = $localVarParams['range'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['assetType'] !== null) {
            $queryParams['asset_type'] = $localVarParams['assetType'];
        }
        if ($localVarParams['item'] !== null) {
            $queryParams['item'] = $localVarParams['item'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFlowStatisticResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFlowStatisticRequest');
    }

    /**
     * 查询访问控制统计详情
     *
     * 查询访问控制统计详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAccessDetail($request)
    {
        return $this->showAccessDetailWithHttpInfo($request);
    }

    public function showAccessDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/top-access-detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['range'] !== null) {
            $queryParams['range'] = $localVarParams['range'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['item'] !== null) {
            $queryParams['item'] = $localVarParams['item'];
        }
        if ($localVarParams['itemId'] !== null) {
            $queryParams['item_id'] = $localVarParams['itemId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAccessDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAccessDetailRequest');
    }

    /**
     * 查询访问日志统计信息
     *
     * 获取访问日志的TOP统计信息，如TOP命中规则等
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAccessTop($request)
    {
        return $this->showAccessTopWithHttpInfo($request);
    }

    public function showAccessTopWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/access-top';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['range'] !== null) {
            $queryParams['range'] = $localVarParams['range'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['item'] !== null) {
            $queryParams['item'] = $localVarParams['item'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $queryParams['rule_id'] = $localVarParams['ruleId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAccessTopResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAccessTopRequest');
    }

    /**
     * 查询攻击日志统计详情
     *
     * 查询攻击日志统计详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAttackDetail($request)
    {
        return $this->showAttackDetailWithHttpInfo($request);
    }

    public function showAttackDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/attack-detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['range'] !== null) {
            $queryParams['range'] = $localVarParams['range'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['item'] !== null) {
            $queryParams['item'] = $localVarParams['item'];
        }
        if ($localVarParams['value'] !== null) {
            $queryParams['value'] = $localVarParams['value'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAttackDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAttackDetailRequest');
    }

    /**
     * 查询攻击日志TOP统计
     *
     * 查询攻击日志TOP统计
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAttackTop($request)
    {
        return $this->showAttackTopWithHttpInfo($request);
    }

    public function showAttackTopWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/top-attack';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['range'] !== null) {
            $queryParams['range'] = $localVarParams['range'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['item'] !== null) {
            $queryParams['item'] = $localVarParams['item'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAttackTopResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAttackTopRequest');
    }

    /**
     * 查询攻击概览
     *
     * 查询攻击概览
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAttackTotal($request)
    {
        return $this->showAttackTotalWithHttpInfo($request);
    }

    public function showAttackTotalWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/total-attack';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['range'] !== null) {
            $queryParams['range'] = $localVarParams['range'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAttackTotalResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAttackTotalRequest');
    }

    /**
     * 查询攻击趋势
     *
     * 查询攻击趋势
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAttackTrend($request)
    {
        return $this->showAttackTrendWithHttpInfo($request);
    }

    public function showAttackTrendWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/trend-attack';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['range'] !== null) {
            $queryParams['range'] = $localVarParams['range'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAttackTrendResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowAttackTrendRequest');
    }

    /**
     * 查询流量日志统计详情
     *
     * 查询流量日志统计详情，如统计某个源IP访问详情
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFlowDetail($request)
    {
        return $this->showFlowDetailWithHttpInfo($request);
    }

    public function showFlowDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/flow-detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['range'] !== null) {
            $queryParams['range'] = $localVarParams['range'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['assetType'] !== null) {
            $queryParams['asset_type'] = $localVarParams['assetType'];
        }
        if ($localVarParams['item'] !== null) {
            $queryParams['item'] = $localVarParams['item'];
        }
        if ($localVarParams['value'] !== null) {
            $queryParams['value'] = $localVarParams['value'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowFlowDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowFlowDetailRequest');
    }

    /**
     * 查询流量TOP统计
     *
     * 查询流量TOP统计
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFlowTop($request)
    {
        return $this->showFlowTopWithHttpInfo($request);
    }

    public function showFlowTopWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/flow-top';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['range'] !== null) {
            $queryParams['range'] = $localVarParams['range'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['assetType'] !== null) {
            $queryParams['asset_type'] = $localVarParams['assetType'];
        }
        if ($localVarParams['item'] !== null) {
            $queryParams['item'] = $localVarParams['item'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowFlowTopResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowFlowTopRequest');
    }

    /**
     * 查询会话趋势
     *
     * 查询会话趋势
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFlowTrend($request)
    {
        return $this->showFlowTrendWithHttpInfo($request);
    }

    public function showFlowTrendWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/flow-trend';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['range'] !== null) {
            $queryParams['range'] = $localVarParams['range'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['assetType'] !== null) {
            $queryParams['asset_type'] = $localVarParams['assetType'];
        }
        if ($localVarParams['ip'] !== null) {
            $queryParams['ip'] = $localVarParams['ip'];
        }
        if ($localVarParams['vpc'] !== null) {
            $queryParams['vpc'] = $localVarParams['vpc'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowFlowTrendResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowFlowTrendRequest');
    }

    /**
     * 查询日志数量
     *
     * 统计日志数量，如统计风险IP的数量
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLogsCount($request)
    {
        return $this->showLogsCountWithHttpInfo($request);
    }

    public function showLogsCountWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/logs/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['range'] !== null) {
            $queryParams['range'] = $localVarParams['range'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['item'] !== null) {
            $queryParams['item'] = $localVarParams['item'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowLogsCountResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowLogsCountRequest');
    }

    /**
     * 查询流量趋势
     *
     * 查询流量趋势，包括南北向、EIP、东西向的流量趋势
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrafficTrend($request)
    {
        return $this->showTrafficTrendWithHttpInfo($request);
    }

    public function showTrafficTrendWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/traffic-trend';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['range'] !== null) {
            $queryParams['range'] = $localVarParams['range'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['vgwId'] !== null) {
            $queryParams['vgw_id'] = $localVarParams['vgwId'];
        }
        if ($localVarParams['aggType'] !== null) {
            $queryParams['agg_type'] = $localVarParams['aggType'];
        }
        if ($localVarParams['ip'] !== null) {
            $queryParams['ip'] = $localVarParams['ip'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowTrafficTrendResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowTrafficTrendRequest');
    }

    /**
     * 创建日志配置
     *
     * 创建日志配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addLogConfig($request)
    {
        return $this->addLogConfigWithHttpInfo($request);
    }

    public function addLogConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddLogConfigResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddLogConfigRequest');
    }

    /**
     * 导出防火墙日志
     *
     * 导出防火墙日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportLogs($request)
    {
        return $this->exportLogsWithHttpInfo($request);
    }

    public function exportLogsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/{fw_instance_id}/logs/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ExportLogsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ExportLogsRequest');
    }

    /**
     * 查询访问控制日志
     *
     * 查询访问控制日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccessControlLogs($request)
    {
        return $this->listAccessControlLogsWithHttpInfo($request);
    }

    public function listAccessControlLogsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/access-control';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['ruleId'] !== null) {
            $queryParams['rule_id'] = $localVarParams['ruleId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['srcIp'] !== null) {
            $queryParams['src_ip'] = $localVarParams['srcIp'];
        }
        if ($localVarParams['srcPort'] !== null) {
            $queryParams['src_port'] = $localVarParams['srcPort'];
        }
        if ($localVarParams['dstIp'] !== null) {
            $queryParams['dst_ip'] = $localVarParams['dstIp'];
        }
        if ($localVarParams['dstPort'] !== null) {
            $queryParams['dst_port'] = $localVarParams['dstPort'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['logId'] !== null) {
            $queryParams['log_id'] = $localVarParams['logId'];
        }
        if ($localVarParams['nextDate'] !== null) {
            $queryParams['next_date'] = $localVarParams['nextDate'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['dstHost'] !== null) {
            $queryParams['dst_host'] = $localVarParams['dstHost'];
        }
        if ($localVarParams['ruleName'] !== null) {
            $queryParams['rule_name'] = $localVarParams['ruleName'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['srcRegionName'] !== null) {
            $queryParams['src_region_name'] = $localVarParams['srcRegionName'];
        }
        if ($localVarParams['dstRegionName'] !== null) {
            $queryParams['dst_region_name'] = $localVarParams['dstRegionName'];
        }
        if ($localVarParams['srcProvinceName'] !== null) {
            $queryParams['src_province_name'] = $localVarParams['srcProvinceName'];
        }
        if ($localVarParams['dstProvinceName'] !== null) {
            $queryParams['dst_province_name'] = $localVarParams['dstProvinceName'];
        }
        if ($localVarParams['srcCityName'] !== null) {
            $queryParams['src_city_name'] = $localVarParams['srcCityName'];
        }
        if ($localVarParams['dstCityName'] !== null) {
            $queryParams['dst_city_name'] = $localVarParams['dstCityName'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAccessControlLogsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAccessControlLogsRequest');
    }

    /**
     * 查询攻击日志
     *
     * 查询攻击日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAttackLogs($request)
    {
        return $this->listAttackLogsWithHttpInfo($request);
    }

    public function listAttackLogsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/attack';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['srcIp'] !== null) {
            $queryParams['src_ip'] = $localVarParams['srcIp'];
        }
        if ($localVarParams['srcPort'] !== null) {
            $queryParams['src_port'] = $localVarParams['srcPort'];
        }
        if ($localVarParams['dstIp'] !== null) {
            $queryParams['dst_ip'] = $localVarParams['dstIp'];
        }
        if ($localVarParams['dstPort'] !== null) {
            $queryParams['dst_port'] = $localVarParams['dstPort'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['logId'] !== null) {
            $queryParams['log_id'] = $localVarParams['logId'];
        }
        if ($localVarParams['nextDate'] !== null) {
            $queryParams['next_date'] = $localVarParams['nextDate'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['attackType'] !== null) {
            $queryParams['attack_type'] = $localVarParams['attackType'];
        }
        if ($localVarParams['attackRule'] !== null) {
            $queryParams['attack_rule'] = $localVarParams['attackRule'];
        }
        if ($localVarParams['level'] !== null) {
            $queryParams['level'] = $localVarParams['level'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['dstHost'] !== null) {
            $queryParams['dst_host'] = $localVarParams['dstHost'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['attackRuleId'] !== null) {
            $queryParams['attack_rule_id'] = $localVarParams['attackRuleId'];
        }
        if ($localVarParams['srcRegionName'] !== null) {
            $queryParams['src_region_name'] = $localVarParams['srcRegionName'];
        }
        if ($localVarParams['dstRegionName'] !== null) {
            $queryParams['dst_region_name'] = $localVarParams['dstRegionName'];
        }
        if ($localVarParams['srcProvinceName'] !== null) {
            $queryParams['src_province_name'] = $localVarParams['srcProvinceName'];
        }
        if ($localVarParams['dstProvinceName'] !== null) {
            $queryParams['dst_province_name'] = $localVarParams['dstProvinceName'];
        }
        if ($localVarParams['srcCityName'] !== null) {
            $queryParams['src_city_name'] = $localVarParams['srcCityName'];
        }
        if ($localVarParams['dstCityName'] !== null) {
            $queryParams['dst_city_name'] = $localVarParams['dstCityName'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAttackLogsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAttackLogsRequest');
    }

    /**
     * 查询流日志
     *
     * 查询流日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFlowLogs($request)
    {
        return $this->listFlowLogsWithHttpInfo($request);
    }

    public function listFlowLogsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/flow';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['direction'] !== null) {
            $queryParams['direction'] = $localVarParams['direction'];
        }
        if ($localVarParams['logType'] !== null) {
            $queryParams['log_type'] = $localVarParams['logType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['srcIp'] !== null) {
            $queryParams['src_ip'] = $localVarParams['srcIp'];
        }
        if ($localVarParams['srcPort'] !== null) {
            $queryParams['src_port'] = $localVarParams['srcPort'];
        }
        if ($localVarParams['dstIp'] !== null) {
            $queryParams['dst_ip'] = $localVarParams['dstIp'];
        }
        if ($localVarParams['dstPort'] !== null) {
            $queryParams['dst_port'] = $localVarParams['dstPort'];
        }
        if ($localVarParams['protocol'] !== null) {
            $queryParams['protocol'] = $localVarParams['protocol'];
        }
        if ($localVarParams['app'] !== null) {
            $queryParams['app'] = $localVarParams['app'];
        }
        if ($localVarParams['logId'] !== null) {
            $queryParams['log_id'] = $localVarParams['logId'];
        }
        if ($localVarParams['nextDate'] !== null) {
            $queryParams['next_date'] = $localVarParams['nextDate'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['dstHost'] !== null) {
            $queryParams['dst_host'] = $localVarParams['dstHost'];
        }
        if ($localVarParams['srcRegionName'] !== null) {
            $queryParams['src_region_name'] = $localVarParams['srcRegionName'];
        }
        if ($localVarParams['dstRegionName'] !== null) {
            $queryParams['dst_region_name'] = $localVarParams['dstRegionName'];
        }
        if ($localVarParams['srcProvinceName'] !== null) {
            $queryParams['src_province_name'] = $localVarParams['srcProvinceName'];
        }
        if ($localVarParams['dstProvinceName'] !== null) {
            $queryParams['dst_province_name'] = $localVarParams['dstProvinceName'];
        }
        if ($localVarParams['srcCityName'] !== null) {
            $queryParams['src_city_name'] = $localVarParams['srcCityName'];
        }
        if ($localVarParams['dstCityName'] !== null) {
            $queryParams['dst_city_name'] = $localVarParams['dstCityName'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFlowLogsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListFlowLogsRequest');
    }

    /**
     * 获取日志配置
     *
     * 获取日志配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogConfig($request)
    {
        return $this->listLogConfigWithHttpInfo($request);
    }

    public function listLogConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListLogConfigResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListLogConfigRequest');
    }

    /**
     * 查询防火墙日志
     *
     * 查询防火墙日志
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogs($request)
    {
        return $this->listLogsWithHttpInfo($request);
    }

    public function listLogsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/{fw_instance_id}/logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListLogsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListLogsRequest');
    }

    /**
     * 更新日志配置
     *
     * 更新日志配置
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLogConfig($request)
    {
        return $this->updateLogConfigWithHttpInfo($request);
    }

    public function updateLogConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cfw/logs/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateLogConfigResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateLogConfigRequest');
    }

    /**
     * 批量添加账号
     *
     * 批量添加账号
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAddAccounts($request)
    {
        return $this->batchAddAccountsWithHttpInfo($request);
    }

    public function batchAddAccountsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/system/multi-account/accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchAddAccountsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchAddAccountsRequest');
    }

    /**
     * 批量移除账号
     *
     * 批量移除账号
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchRemoveAccounts($request)
    {
        return $this->batchRemoveAccountsWithHttpInfo($request);
    }

    public function batchRemoveAccountsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/system/multi-account/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchRemoveAccountsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchRemoveAccountsRequest');
    }

    /**
     * 开启多账号管理
     *
     * 开启多账号管理
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableMultiAccount($request)
    {
        return $this->enableMultiAccountWithHttpInfo($request);
    }

    public function enableMultiAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/system/multi-account/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\EnableMultiAccountResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\EnableMultiAccountRequest');
    }

    /**
     * 查询账号列表
     *
     * 查询账号列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccounts($request)
    {
        return $this->listAccountsWithHttpInfo($request);
    }

    public function listAccountsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/system/multi-account/accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAccountsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListAccountsRequest');
    }

    /**
     * 查询组织账号列表
     *
     * 查询组织账号列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOrganizationAccounts($request)
    {
        return $this->listOrganizationAccountsWithHttpInfo($request);
    }

    public function listOrganizationAccountsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/system/multi-account/organization-accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['parentId'] !== null) {
            $queryParams['parent_id'] = $localVarParams['parentId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListOrganizationAccountsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListOrganizationAccountsRequest');
    }

    /**
     * 查询组织结构
     *
     * 查询组织结构
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOrganizationTree($request)
    {
        return $this->listOrganizationTreeWithHttpInfo($request);
    }

    public function listOrganizationTreeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/system/multi-account/organization-tree';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['parentId'] !== null) {
            $queryParams['parent_id'] = $localVarParams['parentId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListOrganizationTreeResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListOrganizationTreeRequest');
    }

    /**
     * 批量删除时间表
     *
     * 批量删除时间表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteSchedules($request)
    {
        return $this->batchDeleteSchedulesWithHttpInfo($request);
    }

    public function batchDeleteSchedulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schedules/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteSchedulesResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteSchedulesRequest');
    }

    /**
     * 创建时间表
     *
     * 创建时间表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSchedule($request)
    {
        return $this->createScheduleWithHttpInfo($request);
    }

    public function createScheduleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schedule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateScheduleResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateScheduleRequest');
    }

    /**
     * 删除时间表
     *
     * 删除时间表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSchedule($request)
    {
        return $this->deleteScheduleWithHttpInfo($request);
    }

    public function deleteScheduleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schedule/{schedule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['scheduleId'] !== null) {
            $pathParams['schedule_id'] = $localVarParams['scheduleId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteScheduleResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteScheduleRequest');
    }

    /**
     * 查询时间表列表
     *
     * 查询时间表列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSchedules($request)
    {
        return $this->listSchedulesWithHttpInfo($request);
    }

    public function listSchedulesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schedules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['desc'] !== null) {
            $queryParams['desc'] = $localVarParams['desc'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListSchedulesResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListSchedulesRequest');
    }

    /**
     * 更新时间表
     *
     * 更新时间表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSchedule($request)
    {
        return $this->updateScheduleWithHttpInfo($request);
    }

    public function updateScheduleWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/schedule/{schedule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['scheduleId'] !== null) {
            $pathParams['schedule_id'] = $localVarParams['scheduleId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateScheduleResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateScheduleRequest');
    }

    /**
     * 创建安全报告模板
     *
     * 创建安全报告模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createReportProfile($request)
    {
        return $this->createReportProfileWithHttpInfo($request);
    }

    public function createReportProfileWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/report-profile';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateReportProfileResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\CreateReportProfileRequest');
    }

    /**
     * 删除安全报告模板
     *
     * 删除安全报告模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteReportProfile($request)
    {
        return $this->deleteReportProfileWithHttpInfo($request);
    }

    public function deleteReportProfileWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/report-profile/{report_profile_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['reportProfileId'] !== null) {
            $pathParams['report_profile_id'] = $localVarParams['reportProfileId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteReportProfileResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteReportProfileRequest');
    }

    /**
     * 查询安全报告发送历史
     *
     * 查询安全报告发送历史
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listReportHistory($request)
    {
        return $this->listReportHistoryWithHttpInfo($request);
    }

    public function listReportHistoryWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/report/history/{report_profile_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['reportProfileId'] !== null) {
            $pathParams['report_profile_id'] = $localVarParams['reportProfileId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListReportHistoryResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListReportHistoryRequest');
    }

    /**
     * 查询安全报告模板列表
     *
     * 查询安全报告模板列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listReportProfiles($request)
    {
        return $this->listReportProfilesWithHttpInfo($request);
    }

    public function listReportProfilesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/report-profile';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListReportProfilesResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListReportProfilesRequest');
    }

    /**
     * 查询安全报告
     *
     * 查询安全报告
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFirewallReport($request)
    {
        return $this->showFirewallReportWithHttpInfo($request);
    }

    public function showFirewallReportWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/report/{report_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['reportProfileId'] !== null) {
            $queryParams['report_profile_id'] = $localVarParams['reportProfileId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['reportId'] !== null) {
            $pathParams['report_id'] = $localVarParams['reportId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowFirewallReportResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowFirewallReportRequest');
    }

    /**
     * 获取安全报告模板
     *
     * 获取安全报告模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showReportProfile($request)
    {
        return $this->showReportProfileWithHttpInfo($request);
    }

    public function showReportProfileWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/report-profile/{report_profile_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['reportProfileId'] !== null) {
            $pathParams['report_profile_id'] = $localVarParams['reportProfileId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowReportProfileResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowReportProfileRequest');
    }

    /**
     * 更新安全报告模板
     *
     * 更新安全报告模板
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateReportProfile($request)
    {
        return $this->updateReportProfileWithHttpInfo($request);
    }

    public function updateReportProfileWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/report-profile/{report_profile_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['reportProfileId'] !== null) {
            $pathParams['report_profile_id'] = $localVarParams['reportProfileId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateReportProfileResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateReportProfileRequest');
    }

    /**
     * 新建服务成员
     *
     * 批量添加服务组成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addServiceItems($request)
    {
        return $this->addServiceItemsWithHttpInfo($request);
    }

    public function addServiceItemsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddServiceItemsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddServiceItemsRequest');
    }

    /**
     * 新建服务组
     *
     * 创建服务组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addServiceSet($request)
    {
        return $this->addServiceSetWithHttpInfo($request);
    }

    public function addServiceSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-set';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\AddServiceSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\AddServiceSetRequest');
    }

    /**
     * 批量删除服务组成员信息
     *
     * 批量删除服务组成员信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteServiceItems($request)
    {
        return $this->batchDeleteServiceItemsWithHttpInfo($request);
    }

    public function batchDeleteServiceItemsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteServiceItemsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteServiceItemsRequest');
    }

    /**
     * 批量删除服务组
     *
     * 批量删除服务组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteServiceSets($request)
    {
        return $this->batchDeleteServiceSetsWithHttpInfo($request);
    }

    public function batchDeleteServiceSetsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-sets/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteServiceSetsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeleteServiceSetsRequest');
    }

    /**
     * 删除服务组成员
     *
     * 删除服务组成员
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteServiceItem($request)
    {
        return $this->deleteServiceItemWithHttpInfo($request);
    }

    public function deleteServiceItemWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-items/{item_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['itemId'] !== null) {
            $pathParams['item_id'] = $localVarParams['itemId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteServiceItemResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteServiceItemRequest');
    }

    /**
     * 删除服务组
     *
     * 删除服务组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteServiceSet($request)
    {
        return $this->deleteServiceSetWithHttpInfo($request);
    }

    public function deleteServiceSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-sets/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteServiceSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\DeleteServiceSetRequest');
    }

    /**
     * 查询服务成员列表
     *
     * 查询服务组成员列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServiceItems($request)
    {
        return $this->listServiceItemsWithHttpInfo($request);
    }

    public function listServiceItemsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['setId'] !== null) {
            $queryParams['set_id'] = $localVarParams['setId'];
        }
        if ($localVarParams['keyWord'] !== null) {
            $queryParams['key_word'] = $localVarParams['keyWord'];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['queryServiceSetType'] !== null) {
            $queryParams['query_service_set_type'] = $localVarParams['queryServiceSetType'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListServiceItemsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListServiceItemsRequest');
    }

    /**
     * 查询服务组详情
     *
     * 查询服务组细节
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServiceSetDetail($request)
    {
        return $this->listServiceSetDetailWithHttpInfo($request);
    }

    public function listServiceSetDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-sets/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['queryServiceSetType'] !== null) {
            $queryParams['query_service_set_type'] = $localVarParams['queryServiceSetType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListServiceSetDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListServiceSetDetailRequest');
    }

    /**
     * 获取服务组列表
     *
     * 获取服务组列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServiceSets($request)
    {
        return $this->listServiceSetsWithHttpInfo($request);
    }

    public function listServiceSetsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-sets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['objectId'] !== null) {
            $queryParams['object_id'] = $localVarParams['objectId'];
        }
        if ($localVarParams['keyWord'] !== null) {
            $queryParams['key_word'] = $localVarParams['keyWord'];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['queryServiceSetType'] !== null) {
            $queryParams['query_service_set_type'] = $localVarParams['queryServiceSetType'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListServiceSetsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListServiceSetsRequest');
    }

    /**
     * 修改服务组
     *
     * 更新服务组
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateServiceSet($request)
    {
        return $this->updateServiceSetWithHttpInfo($request);
    }

    public function updateServiceSetWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/service-sets/{set_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['setId'] !== null) {
            $pathParams['set_id'] = $localVarParams['setId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateServiceSetResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdateServiceSetRequest');
    }

    /**
     * 创建私网网段
     *
     * 添加私网网段的接口，添加私网网段后该网段的流量将引流到VPC防火墙防护
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreatePrivateNetworkSegments($request)
    {
        return $this->batchCreatePrivateNetworkSegmentsWithHttpInfo($request);
    }

    public function batchCreatePrivateNetworkSegmentsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/firewall/{fw_instance_id}/east-west/private-network-segments/batch-create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchCreatePrivateNetworkSegmentsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchCreatePrivateNetworkSegmentsRequest');
    }

    /**
     * 删除私网网段信息
     *
     * 删除私网网段的接口，根据用户输入的私网网段conf_id，删除对应ID的私网网段
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeletePrivateNetworkSegments($request)
    {
        return $this->batchDeletePrivateNetworkSegmentsWithHttpInfo($request);
    }

    public function batchDeletePrivateNetworkSegmentsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/firewall/{fw_instance_id}/east-west/private-network-segments/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeletePrivateNetworkSegmentsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\BatchDeletePrivateNetworkSegmentsRequest');
    }

    /**
     * 更新VPC间防火墙防护状态
     *
     * 更新VPC间防火墙防护状态
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeEastWestFirewallStatus($request)
    {
        return $this->changeEastWestFirewallStatusWithHttpInfo($request);
    }

    public function changeEastWestFirewallStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/firewall/east-west/protect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeEastWestFirewallStatusResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ChangeEastWestFirewallStatusRequest');
    }

    /**
     * 获取私网网段的信息
     *
     * 东西向私网网段查询接口
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPrivateNetworkSegments($request)
    {
        return $this->listPrivateNetworkSegmentsWithHttpInfo($request);
    }

    public function listPrivateNetworkSegmentsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/firewall/{fw_instance_id}/east-west/private-network-segments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ListPrivateNetworkSegmentsResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ListPrivateNetworkSegmentsRequest');
    }

    /**
     * 查询VPC间防火墙使用的企业路由器信息
     *
     * 查询VPC间防火墙使用的企业路由器信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEwAssociatedEr($request)
    {
        return $this->showEwAssociatedErWithHttpInfo($request);
    }

    public function showEwAssociatedErWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/firewall/east-west/enterprise-router';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowEwAssociatedErResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowEwAssociatedErRequest');
    }

    /**
     * 查询VPC边界防火墙使用的引流VPC信息
     *
     * 查询VPC边界防火墙使用的引流VPC信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEwAssociatedVpc($request)
    {
        return $this->showEwAssociatedVpcWithHttpInfo($request);
    }

    public function showEwAssociatedVpcWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/firewall/east-west/inspection-vpc';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $queryParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowEwAssociatedVpcResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\ShowEwAssociatedVpcRequest');
    }

    /**
     * 更新私网网段
     *
     * 更新私网网段的REST接口，主要特性：
     * * 根据私网网段ID，更新对应的私网网段信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePrivateNetworkSegment($request)
    {
        return $this->updatePrivateNetworkSegmentWithHttpInfo($request);
    }

    public function updatePrivateNetworkSegmentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/firewall/{fw_instance_id}/east-west/private-network-segments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['fwInstanceId'] !== null) {
            $pathParams['fw_instance_id'] = $localVarParams['fwInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdatePrivateNetworkSegmentResponse',
            $requestType='\HuaweiCloud\SDK\Cfw\V1\Model\UpdatePrivateNetworkSegmentRequest');
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