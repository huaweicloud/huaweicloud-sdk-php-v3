<?php

namespace HuaweiCloud\SDK\Oms\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class OmsClient extends Client
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
        return new ClientBuilder(new OmsClient());
    }


    /**
     * 批量更新任务
     *
     * 批量更新迁移任务，可指定单个迁移任务组下所有的迁移任务或通过迁移任务ID来执行。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdateTasks($request)
    {
        return $this->batchUpdateTasksWithHttpInfo($request);
    }

    public function batchUpdateTasksWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/tasks/batch-update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\BatchUpdateTasksResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\BatchUpdateTasksRequest');
    }

    /**
     * 检查前缀是否在源端桶中存在
     *
     * 检查前缀是否在源端桶中存在
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkPrefix($request)
    {
        return $this->checkPrefixWithHttpInfo($request);
    }

    public function checkPrefixWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/objectstorage/buckets/prefix';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\CheckPrefixResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\CheckPrefixRequest');
    }

    /**
     * 创建同步事件
     *
     * 源端有对象需要进行同步时，调用该接口创建一个同步事件，系统将根据同步事件中包含的对象名称进行同步(目前只支持华北-北京四、华东-上海一地区)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSyncEvents($request)
    {
        return $this->createSyncEventsWithHttpInfo($request);
    }

    public function createSyncEventsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/sync-tasks/{sync_task_id}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['syncTaskId'] !== null) {
            $pathParams['sync_task_id'] = $localVarParams['syncTaskId'];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\CreateSyncEventsResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\CreateSyncEventsRequest');
    }

    /**
     * 创建同步任务
     *
     * 创建同步任务，创建成功后，任务会被自动启动，不需要额外调用启动任务命令。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSyncTask($request)
    {
        return $this->createSyncTaskWithHttpInfo($request);
    }

    public function createSyncTaskWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/sync-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\CreateSyncTaskResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\CreateSyncTaskRequest');
    }

    /**
     * 创建迁移任务
     *
     * 创建迁移任务，创建成功后，任务会被自动启动，不需要额外调用启动任务命令。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTask($request)
    {
        return $this->createTaskWithHttpInfo($request);
    }

    public function createTaskWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\CreateTaskResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\CreateTaskRequest');
    }

    /**
     * 创建迁移任务组
     *
     * 创建迁移任务组，创建成功后，迁移任务组会自动创建迁移任务，不需要额外调用启动任务命令。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTaskGroup($request)
    {
        return $this->createTaskGroupWithHttpInfo($request);
    }

    public function createTaskGroupWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/taskgroups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\CreateTaskGroupResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\CreateTaskGroupRequest');
    }

    /**
     * 删除同步任务
     *
     * 调用该接口删除同步任务。
     * 正在同步的任务不允许删除，如果删除会返回失败；若要删除，请先行暂停任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSyncTask($request)
    {
        return $this->deleteSyncTaskWithHttpInfo($request);
    }

    public function deleteSyncTaskWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/sync-tasks/{sync_task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['syncTaskId'] !== null) {
            $pathParams['sync_task_id'] = $localVarParams['syncTaskId'];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\DeleteSyncTaskResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\DeleteSyncTaskRequest');
    }

    /**
     * 删除迁移任务
     *
     * 调用该接口删除迁移任务。
     * 正在运行的任务不允许删除，如果删除会返回失败；若要删除，请先行暂停任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTask($request)
    {
        return $this->deleteTaskWithHttpInfo($request);
    }

    public function deleteTaskWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\DeleteTaskResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\DeleteTaskRequest');
    }

    /**
     * 删除指定id的迁移任务组
     *
     * 删除指定的迁移任务组.
     * 创建任务中、监控中、暂停中状态的任务不允许删除，如果删除会返回失败；若要删除，请先行暂停任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTaskGroup($request)
    {
        return $this->deleteTaskGroupWithHttpInfo($request);
    }

    public function deleteTaskGroupWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/taskgroups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\DeleteTaskGroupResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\DeleteTaskGroupRequest');
    }

    /**
     * 查询指定ID的同步任务统计数据
     *
     * 查询指定ID同步任务的接收同步请求对象数、同步成功对象数、同步失败对象数、同步跳过对象数、同步成功对象容量统计数据(目前只支持华北-北京四、华东-上海一地区)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSyncTaskStatistic($request)
    {
        return $this->listSyncTaskStatisticWithHttpInfo($request);
    }

    public function listSyncTaskStatisticWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/sync-tasks/{sync_task_id}/statistics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['dataType'] !== null) {
            $queryParams['data_type'] = $localVarParams['dataType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['syncTaskId'] !== null) {
            $pathParams['sync_task_id'] = $localVarParams['syncTaskId'];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ListSyncTaskStatisticResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ListSyncTaskStatisticRequest');
    }

    /**
     * 查询同步任务列表
     *
     * 查询用户名下所有同步任务信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSyncTasks($request)
    {
        return $this->listSyncTasksWithHttpInfo($request);
    }

    public function listSyncTasksWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/sync-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ListSyncTasksResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ListSyncTasksRequest');
    }

    /**
     * 查询迁移任务组列表
     *
     * 查询用户账户下的任务组信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTaskGroup($request)
    {
        return $this->listTaskGroupWithHttpInfo($request);
    }

    public function listTaskGroupWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/taskgroups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ListTaskGroupResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ListTaskGroupRequest');
    }

    /**
     * 查询迁移任务列表
     *
     * 查询用户账户下的所有任务信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTasks($request)
    {
        return $this->listTasksWithHttpInfo($request);
    }

    public function listTasksWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $queryParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ListTasksResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ListTasksRequest');
    }

    /**
     * 对已经失败的指定id迁移任务组进行重启
     *
     * 当迁移任务组处于迁移失败状态时，调用该接口重启指定id的迁移任务组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function retryTaskGroup($request)
    {
        return $this->retryTaskGroupWithHttpInfo($request);
    }

    public function retryTaskGroupWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/taskgroups/{group_id}/retry';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\RetryTaskGroupResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\RetryTaskGroupRequest');
    }

    /**
     * 查询桶列表
     *
     * 查询桶列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBucketList($request)
    {
        return $this->showBucketListWithHttpInfo($request);
    }

    public function showBucketListWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/objectstorage/buckets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ShowBucketListResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ShowBucketListRequest');
    }

    /**
     * 查询桶对象列表
     *
     * 查询桶对象列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBucketObjects($request)
    {
        return $this->showBucketObjectsWithHttpInfo($request);
    }

    public function showBucketObjectsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/objectstorage/buckets/objects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ShowBucketObjectsResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ShowBucketObjectsRequest');
    }

    /**
     * 查询桶对应的region
     *
     * 查询桶对应的region
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBucketRegion($request)
    {
        return $this->showBucketRegionWithHttpInfo($request);
    }

    public function showBucketRegionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/objectstorage/buckets/regions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ShowBucketRegionResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ShowBucketRegionRequest');
    }

    /**
     * 查桶对应的CDN信息
     *
     * 查桶对应的CDN信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCdnInfo($request)
    {
        return $this->showCdnInfoWithHttpInfo($request);
    }

    public function showCdnInfoWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/objectstorage/buckets/cdn-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ShowCdnInfoResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ShowCdnInfoRequest');
    }

    /**
     * 查询所有支持的云厂商
     *
     * 查询所有支持的云厂商
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCloudType($request)
    {
        return $this->showCloudTypeWithHttpInfo($request);
    }

    public function showCloudTypeWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/objectstorage/cloud-type';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ShowCloudTypeResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ShowCloudTypeRequest');
    }

    /**
     * 查询云厂商支持的reigon
     *
     * 查询云厂商支持的reigon
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRegionInfo($request)
    {
        return $this->showRegionInfoWithHttpInfo($request);
    }

    public function showRegionInfoWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/objectstorage/data-center';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ShowRegionInfoResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ShowRegionInfoRequest');
    }

    /**
     * 查询指定ID的同步任务详情
     *
     * 查询指定ID的同步任务详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSyncTask($request)
    {
        return $this->showSyncTaskWithHttpInfo($request);
    }

    public function showSyncTaskWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/sync-tasks/{sync_task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['queryTime'] !== null) {
            $queryParams['query_time'] = $localVarParams['queryTime'];
        }
        if ($localVarParams['syncTaskId'] !== null) {
            $pathParams['sync_task_id'] = $localVarParams['syncTaskId'];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ShowSyncTaskResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ShowSyncTaskRequest');
    }

    /**
     * 查询指定ID的任务详情
     *
     * 查询指定ID的任务详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTask($request)
    {
        return $this->showTaskWithHttpInfo($request);
    }

    public function showTaskWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ShowTaskResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ShowTaskRequest');
    }

    /**
     * 获取指定id的taskgroup信息
     *
     * 获取指定id的taskgroup信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTaskGroup($request)
    {
        return $this->showTaskGroupWithHttpInfo($request);
    }

    public function showTaskGroupWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/taskgroups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ShowTaskGroupResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ShowTaskGroupRequest');
    }

    /**
     * 启动同步任务
     *
     * 同步任务停止后，调用该接口以启动同步任务(目前只支持华北-北京四、华东-上海一地区)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startSyncTask($request)
    {
        return $this->startSyncTaskWithHttpInfo($request);
    }

    public function startSyncTaskWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/sync-tasks/{sync_task_id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['syncTaskId'] !== null) {
            $pathParams['sync_task_id'] = $localVarParams['syncTaskId'];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\StartSyncTaskResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\StartSyncTaskRequest');
    }

    /**
     * 启动迁移任务
     *
     * 迁移任务暂停或失败后，调用该接口以启动任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startTask($request)
    {
        return $this->startTaskWithHttpInfo($request);
    }

    public function startTaskWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/tasks/{task_id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\StartTaskResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\StartTaskRequest');
    }

    /**
     * 恢复指定id的迁移任务组
     *
     * 当迁移任务组处于暂停状态时，调用该接口启动指定id的迁移任务组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startTaskGroup($request)
    {
        return $this->startTaskGroupWithHttpInfo($request);
    }

    public function startTaskGroupWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/taskgroups/{group_id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\StartTaskGroupResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\StartTaskGroupRequest');
    }

    /**
     * 暂停同步任务
     *
     * 当同步任务处于同步中时，调用该接口停止任务(目前只支持华北-北京四、华东-上海一地区)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopSyncTask($request)
    {
        return $this->stopSyncTaskWithHttpInfo($request);
    }

    public function stopSyncTaskWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/sync-tasks/{sync_task_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['syncTaskId'] !== null) {
            $pathParams['sync_task_id'] = $localVarParams['syncTaskId'];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\StopSyncTaskResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\StopSyncTaskRequest');
    }

    /**
     * 暂停迁移任务
     *
     * 当迁移任务处于迁移中时，调用该接口停止任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopTask($request)
    {
        return $this->stopTaskWithHttpInfo($request);
    }

    public function stopTaskWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/tasks/{task_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\StopTaskResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\StopTaskRequest');
    }

    /**
     * 暂停指定id的迁移任务组
     *
     * 当迁移任务组处于创建任务中或监控中时，调用该接口暂停指定迁移任务组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopTaskGroup($request)
    {
        return $this->stopTaskGroupWithHttpInfo($request);
    }

    public function stopTaskGroupWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/taskgroups/{group_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\StopTaskGroupResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\StopTaskGroupRequest');
    }

    /**
     * 更新任务带宽策略
     *
     * 当迁移任务未执行完成时，修改迁移任务的流量控制策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBandwidthPolicy($request)
    {
        return $this->updateBandwidthPolicyWithHttpInfo($request);
    }

    public function updateBandwidthPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/tasks/{task_id}/bandwidth-policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\UpdateBandwidthPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\UpdateBandwidthPolicyRequest');
    }

    /**
     * 更新指定id的迁移任务组的流控策略
     *
     * 当迁移任务组未执行完成时，修改迁移任务组的流量控制策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTaskGroup($request)
    {
        return $this->updateTaskGroupWithHttpInfo($request);
    }

    public function updateTaskGroupWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/taskgroups/{group_id}/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\UpdateTaskGroupResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\UpdateTaskGroupRequest');
    }

    /**
     * 查询API版本信息列表
     *
     * 查询对象存储迁移服务的API版本信息。
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
        $resourcePath = '/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ListApiVersionsResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ListApiVersionsRequest');
    }

    /**
     * 查询指定API版本信息
     *
     * 查询对象存储迁移服务指定API版本信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApiInfo($request)
    {
        return $this->showApiInfoWithHttpInfo($request);
    }

    public function showApiInfoWithHttpInfo($request)
    {
        $resourcePath = '/{version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['version'] !== null) {
            $pathParams['version'] = $localVarParams['version'];
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
            $responseType='\HuaweiCloud\SDK\Oms\V2\Model\ShowApiInfoResponse',
            $requestType='\HuaweiCloud\SDK\Oms\V2\Model\ShowApiInfoRequest');
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