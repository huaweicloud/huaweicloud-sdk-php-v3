<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CodeArtsDeployAsyncClient extends Client
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
        return new ClientBuilder(new CodeArtsDeployAsyncClient());
    }

    /**
     * 通过模板新建应用
     *
     * 通过模板新建应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDeployTaskByTemplateAsync($request)
    {
        return $this->createDeployTaskByTemplateAsyncWithHttpInfo($request);
    }
    
    public function createDeployTaskByTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/tasks/template-task';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateDeployTaskByTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateDeployTaskByTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 删除应用
     *
     * 根据部署任务id删除应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeployTaskAsync($request)
    {
        return $this->deleteDeployTaskAsyncWithHttpInfo($request);
    }
    
    public function deleteDeployTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteDeployTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteDeployTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 根据开始时间和结束时间查询项目下指定应用的历史部署记录列表
     *
     * 根据开始时间和结束时间查询项目下指定应用的历史部署记录列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeployTaskHistoryByDateAsync($request)
    {
        return $this->listDeployTaskHistoryByDateAsyncWithHttpInfo($request);
    }
    
    public function listDeployTaskHistoryByDateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/task/{id}/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['startDate'] !== null) {
            $queryParams['start_date'] = $localVarParams['startDate'];
        }
        if ($localVarParams['endDate'] !== null) {
            $queryParams['end_date'] = $localVarParams['endDate'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListDeployTaskHistoryByDateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListDeployTaskHistoryByDateRequest',
            $asyncRequest = true);
    }

    /**
     * 获取应用列表
     *
     * 查询项目下应用列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDeployTasksAsync($request)
    {
        return $this->listDeployTasksAsyncWithHttpInfo($request);
    }
    
    public function listDeployTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/tasks/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['size'] !== null) {
            $queryParams['size'] = $localVarParams['size'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListDeployTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListDeployTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取应用详情
     *
     * 根据部署任务id获取应用详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeployTaskDetailAsync($request)
    {
        return $this->showDeployTaskDetailAsyncWithHttpInfo($request);
    }
    
    public function showDeployTaskDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/tasks/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowDeployTaskDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowDeployTaskDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 部署应用
     *
     * 根据部署任务id部署应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startDeployTaskAsync($request)
    {
        return $this->startDeployTaskAsyncWithHttpInfo($request);
    }
    
    public function startDeployTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/tasks/{task_id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\StartDeployTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\StartDeployTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 新建主机
     *
     * 在指定主机集群下新建主机。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDeploymentHostAsync($request)
    {
        return $this->createDeploymentHostAsyncWithHttpInfo($request);
    }
    
    public function createDeploymentHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateDeploymentHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateDeploymentHostRequest',
            $asyncRequest = true);
    }

    /**
     * 删除主机
     *
     * 根据主机id删除主机。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeploymentHostAsync($request)
    {
        return $this->deleteDeploymentHostAsyncWithHttpInfo($request);
    }
    
    public function deleteDeploymentHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}/hosts/{host_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteDeploymentHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteDeploymentHostRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机列表
     *
     * 根据主机集群id查询指定主机集群下的主机列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostsAsync($request)
    {
        return $this->listHostsAsyncWithHttpInfo($request);
    }
    
    public function listHostsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}/hosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['asProxy'] !== null) {
            $queryParams['as_proxy'] = $localVarParams['asProxy'];
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
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['withAuth'] !== null) {
            $queryParams['with_auth'] = $localVarParams['withAuth'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机详情
     *
     * 根据主机id查询主机详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeploymentHostDetailAsync($request)
    {
        return $this->showDeploymentHostDetailAsyncWithHttpInfo($request);
    }
    
    public function showDeploymentHostDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}/hosts/{host_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowDeploymentHostDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowDeploymentHostDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 修改主机
     *
     * 根据主机id修改主机信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeploymentHostAsync($request)
    {
        return $this->updateDeploymentHostAsyncWithHttpInfo($request);
    }
    
    public function updateDeploymentHostAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}/hosts/{host_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['hostId'] !== null) {
            $pathParams['host_id'] = $localVarParams['hostId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateDeploymentHostResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateDeploymentHostRequest',
            $asyncRequest = true);
    }

    /**
     * 新建主机集群
     *
     * 在项目下新建主机集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDeploymentGroupAsync($request)
    {
        return $this->createDeploymentGroupAsyncWithHttpInfo($request);
    }
    
    public function createDeploymentGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['content_type'] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateDeploymentGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\CreateDeploymentGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 删除主机集群
     *
     * 根据主机集群id删除主机集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDeploymentGroupAsync($request)
    {
        return $this->deleteDeploymentGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteDeploymentGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteDeploymentGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeleteDeploymentGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机集群列表
     *
     * 按条件查询主机集群列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHostGroupsAsync($request)
    {
        return $this->listHostGroupsAsyncWithHttpInfo($request);
    }
    
    public function listHostGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['regionName'] !== null) {
            $queryParams['region_name'] = $localVarParams['regionName'];
        }
        if ($localVarParams['os'] !== null) {
            $queryParams['os'] = $localVarParams['os'];
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
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListHostGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询主机集群
     *
     * 根据主机集群id查询主机集群详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDeploymentGroupDetailAsync($request)
    {
        return $this->showDeploymentGroupDetailAsyncWithHttpInfo($request);
    }
    
    public function showDeploymentGroupDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowDeploymentGroupDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowDeploymentGroupDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 修改主机集群
     *
     * 根据主机集群id修改主机集群信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDeploymentGroupAsync($request)
    {
        return $this->updateDeploymentGroupAsyncWithHttpInfo($request);
    }
    
    public function updateDeploymentGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/host-groups/{group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $headerParams['content_type'] = $localVarParams['contentType'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateDeploymentGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UpdateDeploymentGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 获取指定应用的应用部署成功率
     *
     * 获取指定应用的应用部署成功率
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTaskSuccessRateAsync($request)
    {
        return $this->listTaskSuccessRateAsyncWithHttpInfo($request);
    }
    
    public function listTaskSuccessRateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/tasks/metrics/success-rate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListTaskSuccessRateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ListTaskSuccessRateRequest',
            $asyncRequest = true);
    }

    /**
     * 获取指定项目的应用部署成功率
     *
     * 获取指定项目的应用部署成功率
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectSuccessRateAsync($request)
    {
        return $this->showProjectSuccessRateAsyncWithHttpInfo($request);
    }
    
    public function showProjectSuccessRateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/metrics/success-rate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowProjectSuccessRateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ShowProjectSuccessRateRequest',
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