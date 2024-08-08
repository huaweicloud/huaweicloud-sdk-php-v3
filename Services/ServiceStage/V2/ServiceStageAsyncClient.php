<?php

namespace HuaweiCloud\SDK\ServiceStage\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class ServiceStageAsyncClient extends Client
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
       $client = new ClientBuilder(new ServiceStageAsyncClient());
       return $client;
    }

    /**
     * 修改应用信息
     *
     * 此API通过应用ID修改应用信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeApplicationAsync($request)
    {
        return $this->changeApplicationAsyncWithHttpInfo($request);
    }
    
    public function changeApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ChangeApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ChangeApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 修改应用配置信息
     *
     * 通过此API修改应用配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeApplicationConfigurationAsync($request)
    {
        return $this->changeApplicationConfigurationAsyncWithHttpInfo($request);
    }
    
    public function changeApplicationConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ChangeApplicationConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ChangeApplicationConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 根据组件ID修改组件信息
     *
     * 此API通过组件ID修改组件信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeComponentAsync($request)
    {
        return $this->changeComponentAsyncWithHttpInfo($request);
    }
    
    public function changeComponentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/components/{component_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['componentId'] !== null) {
            $pathParams['component_id'] = $localVarParams['componentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ChangeComponentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ChangeComponentRequest',
            $asyncRequest = true);
    }

    /**
     * 修改环境信息
     *
     * 此API通过环境ID修改环境信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeEnvironmentAsync($request)
    {
        return $this->changeEnvironmentAsyncWithHttpInfo($request);
    }
    
    public function changeEnvironmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/environments/{environment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['environmentId'] !== null) {
            $pathParams['environment_id'] = $localVarParams['environmentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ChangeEnvironmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ChangeEnvironmentRequest',
            $asyncRequest = true);
    }

    /**
     * 修改应用组件实例
     *
     * 通过此API修改应用组件实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeInstanceAsync($request)
    {
        return $this->changeInstanceAsyncWithHttpInfo($request);
    }
    
    public function changeInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/components/{component_id}/instances/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['componentId'] !== null) {
            $pathParams['component_id'] = $localVarParams['componentId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ChangeInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ChangeInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 修改环境资源
     *
     * 此API用来修改环境资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeResourceInEnvironmentAsync($request)
    {
        return $this->changeResourceInEnvironmentAsyncWithHttpInfo($request);
    }
    
    public function changeResourceInEnvironmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/environments/{environment_id}/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['environmentId'] !== null) {
            $pathParams['environment_id'] = $localVarParams['environmentId'];
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
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ChangeResourceInEnvironmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ChangeResourceInEnvironmentRequest',
            $asyncRequest = true);
    }

    /**
     * 创建应用
     *
     * 应用是一个功能相对完备的业务系统，由一个或多个特性相关的组件组成。
     * 
     * 此API用来创建应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApplicationAsync($request)
    {
        return $this->createApplicationAsyncWithHttpInfo($request);
    }
    
    public function createApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 创建、更新实例
     *
     * 创建、更新实例
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCamInstanceAsync($request)
    {
        return $this->createCamInstanceAsyncWithHttpInfo($request);
    }
    
    public function createCamInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateCamInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateCamInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 应用中创建组件
     *
     * 应用组件是组成应用的某个业务特性实现，以代码或者软件包为载体，可独立部署运行。
     * 
     * 此API用来在应用中创建组件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createComponentAsync($request)
    {
        return $this->createComponentAsyncWithHttpInfo($request);
    }
    
    public function createComponentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/components';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateComponentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateComponentRequest',
            $asyncRequest = true);
    }

    /**
     * 创建环境
     *
     * 环境是用于应用部署和运行的计算、存储、网络等基础设施的集合。Servicestage把相同VPC下的CCE集群加上多个ELB、RDS、DCS实例组合为一个环境，如：开发环境，测试环境，预生产环境，生产环境。环境内网络互通，可以按环境维度来管理资源、部署服务，减少具体基础设施运维管理的复杂性。
     * 
     * 此API用来创建环境。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEnvironmentAsync($request)
    {
        return $this->createEnvironmentAsyncWithHttpInfo($request);
    }
    
    public function createEnvironmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/environments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateEnvironmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateEnvironmentRequest',
            $asyncRequest = true);
    }

    /**
     * 创建组件实例
     *
     * 此API用来创建应用组件实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInstanceAsync($request)
    {
        return $this->createInstanceAsyncWithHttpInfo($request);
    }
    
    public function createInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/components/{component_id}/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['componentId'] !== null) {
            $pathParams['component_id'] = $localVarParams['componentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 创建模板
     *
     * 创建模板
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTemplateAsync($request)
    {
        return $this->createTemplateAsyncWithHttpInfo($request);
    }
    
    public function createTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 根据应用ID删除应用
     *
     * 此API通过应用ID删除应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApplicationAsync($request)
    {
        return $this->deleteApplicationAsyncWithHttpInfo($request);
    }
    
    public function deleteApplicationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteApplicationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteApplicationRequest',
            $asyncRequest = true);
    }

    /**
     * 删除应用配置
     *
     * 通过此API删除应用配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApplicationConfigurationAsync($request)
    {
        return $this->deleteApplicationConfigurationAsyncWithHttpInfo($request);
    }
    
    public function deleteApplicationConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['environmentId'] !== null) {
            $queryParams['environment_id'] = $localVarParams['environmentId'];
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteApplicationConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteApplicationConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 根据应用组件ID删除应用组件
     *
     * 此API通过应用组件ID删除应用组件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteComponentAsync($request)
    {
        return $this->deleteComponentAsyncWithHttpInfo($request);
    }
    
    public function deleteComponentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/components/{component_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['force'] !== null) {
            $queryParams['force'] = $localVarParams['force'];
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['componentId'] !== null) {
            $pathParams['component_id'] = $localVarParams['componentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteComponentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteComponentRequest',
            $asyncRequest = true);
    }

    /**
     * 根据环境ID删除环境
     *
     * 此API通过环境ID删除环境。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEnvironmentAsync($request)
    {
        return $this->deleteEnvironmentAsyncWithHttpInfo($request);
    }
    
    public function deleteEnvironmentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/environments/{environment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['environmentId'] !== null) {
            $pathParams['environment_id'] = $localVarParams['environmentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteEnvironmentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteEnvironmentRequest',
            $asyncRequest = true);
    }

    /**
     * 删除应用组件实例
     *
     * 通过此API删除应用组件实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceAsync($request)
    {
        return $this->deleteInstanceAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/components/{component_id}/instances/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['force'] !== null) {
            $queryParams['force'] = $localVarParams['force'];
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['componentId'] !== null) {
            $pathParams['component_id'] = $localVarParams['componentId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 删除实例
     *
     * 删除实例
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInstanceByIdAsync($request)
    {
        return $this->deleteInstanceByIdAsyncWithHttpInfo($request);
    }
    
    public function deleteInstanceByIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/instances/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteInstanceByIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteInstanceByIdRequest',
            $asyncRequest = true);
    }

    /**
     * 删除模板
     *
     * 删除模板
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTemplateAsync($request)
    {
        return $this->deleteTemplateAsyncWithHttpInfo($request);
    }
    
    public function deleteTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 部署实例
     *
     * 部署实例
     *
     * @param $request 请求对象
     * @return response
     */
    public function deployInstanceAsync($request)
    {
        return $this->deployInstanceAsyncWithHttpInfo($request);
    }
    
    public function deployInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/instance/deployments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeployInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeployInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 获取所有应用
     *
     * 通过此API可以获取所有已经创建的应用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApplicationsAsync($request)
    {
        return $this->listApplicationsAsyncWithHttpInfo($request);
    }
    
    public function listApplicationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListApplicationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListApplicationsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取应用所有组件部署信息
     *
     * 通过此API获取应用下所有应用组件部署信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listComponentOverviewsAsync($request)
    {
        return $this->listComponentOverviewsAsyncWithHttpInfo($request);
    }
    
    public function listComponentOverviewsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/components/overviews';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListComponentOverviewsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListComponentOverviewsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取应用所有组件
     *
     * 通过此API获取应用下所有应用组件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listComponentsAsync($request)
    {
        return $this->listComponentsAsyncWithHttpInfo($request);
    }
    
    public function listComponentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/components';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListComponentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListComponentsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取所有环境
     *
     * 此API用来获取所有已经创建环境。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnvironmentsAsync($request)
    {
        return $this->listEnvironmentsAsyncWithHttpInfo($request);
    }
    
    public function listEnvironmentsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/environments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListEnvironmentsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListEnvironmentsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取组件实例快照
     *
     * 通过此API获取应用组件实例快照信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstanceSnapshotsAsync($request)
    {
        return $this->listInstanceSnapshotsAsyncWithHttpInfo($request);
    }
    
    public function listInstanceSnapshotsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/components/{component_id}/instances/{instance_id}/snapshots';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['snapshotOrderBy'] !== null) {
            $queryParams['snapshot_order_by'] = $localVarParams['snapshotOrderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['componentId'] !== null) {
            $pathParams['component_id'] = $localVarParams['componentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListInstanceSnapshotsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListInstanceSnapshotsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取应用组件实例
     *
     * 通过此API获取组件下的所有组件实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInstancesAsync($request)
    {
        return $this->listInstancesAsyncWithHttpInfo($request);
    }
    
    public function listInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/components/{component_id}/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['componentId'] !== null) {
            $pathParams['component_id'] = $localVarParams['componentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取应用配置
     *
     * 通过此API获取应用配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApplicationConfigurationAsync($request)
    {
        return $this->showApplicationConfigurationAsyncWithHttpInfo($request);
    }
    
    public function showApplicationConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['environmentId'] !== null) {
            $queryParams['environment_id'] = $localVarParams['environmentId'];
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowApplicationConfigurationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowApplicationConfigurationRequest',
            $asyncRequest = true);
    }

    /**
     * 根据应用ID获取应用详细信息
     *
     * 此API通过应用ID获取应用详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApplicationDetailAsync($request)
    {
        return $this->showApplicationDetailAsyncWithHttpInfo($request);
    }
    
    public function showApplicationDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowApplicationDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowApplicationDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 根据组件ID获取应用组件信息
     *
     * 通过组件ID获取应用组件信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showComponentDetailAsync($request)
    {
        return $this->showComponentDetailAsyncWithHttpInfo($request);
    }
    
    public function showComponentDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/components/{component_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['componentId'] !== null) {
            $pathParams['component_id'] = $localVarParams['componentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowComponentDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowComponentDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 根据环境ID获取环境详细信息
     *
     * 此API通过环境ID获取环境详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEnvironmentDetailAsync($request)
    {
        return $this->showEnvironmentDetailAsyncWithHttpInfo($request);
    }
    
    public function showEnvironmentDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/environments/{environment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['environmentId'] !== null) {
            $pathParams['environment_id'] = $localVarParams['environmentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowEnvironmentDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowEnvironmentDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 根据实例ID获取实例详细信息
     *
     * 此API通过实例ID获取实例详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInstanceDetailAsync($request)
    {
        return $this->showInstanceDetailAsyncWithHttpInfo($request);
    }
    
    public function showInstanceDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/components/{component_id}/instances/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['componentId'] !== null) {
            $pathParams['component_id'] = $localVarParams['componentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowInstanceDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowInstanceDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 获取部署任务详细信息
     *
     * 通过此API获取部署任务详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobDetailAsync($request)
    {
        return $this->showJobDetailAsyncWithHttpInfo($request);
    }
    
    public function showJobDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['desc'] !== null) {
            $queryParams['desc'] = $localVarParams['desc'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowJobDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowJobDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 对组件实例的操作
     *
     * 通过此API获取对组件实例的操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstanceActionAsync($request)
    {
        return $this->updateInstanceActionAsyncWithHttpInfo($request);
    }
    
    public function updateInstanceActionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/applications/{application_id}/components/{component_id}/instances/{instance_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['applicationId'] !== null) {
            $pathParams['application_id'] = $localVarParams['applicationId'];
        }
        if ($localVarParams['componentId'] !== null) {
            $pathParams['component_id'] = $localVarParams['componentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\UpdateInstanceActionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\UpdateInstanceActionRequest',
            $asyncRequest = true);
    }

    /**
     * 更新模板
     *
     * 更新模板
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateTemplateAsync($request)
    {
        return $this->updateTemplateAsyncWithHttpInfo($request);
    }
    
    public function updateTemplateAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/templates/{template_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['templateId'] !== null) {
            $pathParams['template_id'] = $localVarParams['templateId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\UpdateTemplateResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\UpdateTemplateRequest',
            $asyncRequest = true);
    }

    /**
     * 创建仓库文件
     *
     * 在指定仓库项目下创建文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createFileAsync($request)
    {
        return $this->createFileAsyncWithHttpInfo($request);
    }
    
    public function createFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/files/{namespace}/{project}/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ref'] !== null) {
            $queryParams['ref'] = $localVarParams['ref'];
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['project'] !== null) {
            $pathParams['project'] = $localVarParams['project'];
        }
        if ($localVarParams['path'] !== null) {
            $pathParams['path'] = $localVarParams['path'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateFileRequest',
            $asyncRequest = true);
    }

    /**
     * 创建项目hook
     *
     * 创建指定项目的hook。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createHookAsync($request)
    {
        return $this->createHookAsyncWithHttpInfo($request);
    }
    
    public function createHookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/repos/{namespace}/{project}/hooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['project'] !== null) {
            $pathParams['project'] = $localVarParams['project'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateHookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateHookRequest',
            $asyncRequest = true);
    }

    /**
     * 创建OAuth授权
     *
     * 创建指定Git仓库类型的OAuth授权。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOAuthAsync($request)
    {
        return $this->createOAuthAsyncWithHttpInfo($request);
    }
    
    public function createOAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/auths/{repo_type}/oauth';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['repoType'] !== null) {
            $pathParams['repo_type'] = $localVarParams['repoType'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateOAuthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateOAuthRequest',
            $asyncRequest = true);
    }

    /**
     * 创建口令授权
     *
     * 创建指定Git仓库类型的口令授权。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPasswordAuthAsync($request)
    {
        return $this->createPasswordAuthAsyncWithHttpInfo($request);
    }
    
    public function createPasswordAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/auths/{repo_type}/password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repoType'] !== null) {
            $pathParams['repo_type'] = $localVarParams['repoType'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreatePasswordAuthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreatePasswordAuthRequest',
            $asyncRequest = true);
    }

    /**
     * 创建私人令牌授权
     *
     * 创建指定Git仓库类型的私人令牌授权。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPersonalAuthAsync($request)
    {
        return $this->createPersonalAuthAsyncWithHttpInfo($request);
    }
    
    public function createPersonalAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/auths/{repo_type}/personal';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['repoType'] !== null) {
            $pathParams['repo_type'] = $localVarParams['repoType'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreatePersonalAuthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreatePersonalAuthRequest',
            $asyncRequest = true);
    }

    /**
     * 创建软件仓库项目
     *
     * 创建指定组织下的软件仓库项目。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createProjectAsync($request)
    {
        return $this->createProjectAsyncWithHttpInfo($request);
    }
    
    public function createProjectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/repos/{namespace}/projects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateProjectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateProjectRequest',
            $asyncRequest = true);
    }

    /**
     * 创建项目tag标签
     *
     * 创建指定项目的tag标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTagAsync($request)
    {
        return $this->createTagAsyncWithHttpInfo($request);
    }
    
    public function createTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/repos/{namespace}/{project}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ref'] !== null) {
            $queryParams['ref'] = $localVarParams['ref'];
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['project'] !== null) {
            $pathParams['project'] = $localVarParams['project'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\CreateTagRequest',
            $asyncRequest = true);
    }

    /**
     * 删除仓库授权
     *
     * 通过名称删除仓库授权。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAuthorizeAsync($request)
    {
        return $this->deleteAuthorizeAsyncWithHttpInfo($request);
    }
    
    public function deleteAuthorizeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/auths/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteAuthorizeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteAuthorizeRequest',
            $asyncRequest = true);
    }

    /**
     * 删除仓库文件
     *
     * 删除指定项目仓库下的文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteFileAsync($request)
    {
        return $this->deleteFileAsyncWithHttpInfo($request);
    }
    
    public function deleteFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/files/{namespace}/{project}/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ref'] !== null) {
            $queryParams['ref'] = $localVarParams['ref'];
        }
        if ($localVarParams['message'] !== null) {
            $queryParams['message'] = $localVarParams['message'];
        }
        if ($localVarParams['sha'] !== null) {
            $queryParams['sha'] = $localVarParams['sha'];
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['project'] !== null) {
            $pathParams['project'] = $localVarParams['project'];
        }
        if ($localVarParams['path'] !== null) {
            $pathParams['path'] = $localVarParams['path'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteFileRequest',
            $asyncRequest = true);
    }

    /**
     * 删除项目hook
     *
     * 删除指定项目的hook。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHookAsync($request)
    {
        return $this->deleteHookAsyncWithHttpInfo($request);
    }
    
    public function deleteHookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/repos/{namespace}/{project}/hooks/{hook_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['project'] !== null) {
            $pathParams['project'] = $localVarParams['project'];
        }
        if ($localVarParams['hookId'] !== null) {
            $pathParams['hook_id'] = $localVarParams['hookId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteHookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteHookRequest',
            $asyncRequest = true);
    }

    /**
     * 删除项目tag标签
     *
     * 删除指定项目的tag标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTagAsync($request)
    {
        return $this->deleteTagAsyncWithHttpInfo($request);
    }
    
    public function deleteTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/repos/{namespace}/{project}/tags/{tag_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['project'] !== null) {
            $pathParams['project'] = $localVarParams['project'];
        }
        if ($localVarParams['tagName'] !== null) {
            $pathParams['tag_name'] = $localVarParams['tagName'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\DeleteTagRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库授权列表
     *
     * 获取所有Git仓库授权信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAuthorizationsAsync($request)
    {
        return $this->listAuthorizationsAsyncWithHttpInfo($request);
    }
    
    public function listAuthorizationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/auths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListAuthorizationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListAuthorizationsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目分支
     *
     * 获取指定项目的所有分支列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBranchesAsync($request)
    {
        return $this->listBranchesAsyncWithHttpInfo($request);
    }
    
    public function listBranchesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/repos/{namespace}/{project}/branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['project'] !== null) {
            $pathParams['project'] = $localVarParams['project'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListBranchesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListBranchesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目commit提交记录
     *
     * 获取指定项目的最近10次commit提交记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCommitsAsync($request)
    {
        return $this->listCommitsAsyncWithHttpInfo($request);
    }
    
    public function listCommitsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/repos/{namespace}/{project}/commits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ref'] !== null) {
            $queryParams['ref'] = $localVarParams['ref'];
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['project'] !== null) {
            $pathParams['project'] = $localVarParams['project'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListCommitsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListCommitsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目hooks
     *
     * 获取指定项目的所有hooks
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHooksAsync($request)
    {
        return $this->listHooksAsyncWithHttpInfo($request);
    }
    
    public function listHooksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/repos/{namespace}/{project}/hooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['project'] !== null) {
            $pathParams['project'] = $localVarParams['project'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListHooksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListHooksRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库的namespaces
     *
     * 获取仓库的namespaces。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNamespacesAsync($request)
    {
        return $this->listNamespacesAsyncWithHttpInfo($request);
    }
    
    public function listNamespacesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/repos/namespaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListNamespacesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListNamespacesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取组织下所有项目
     *
     * 获取指定组织下的所有项目。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectsAsync($request)
    {
        return $this->listProjectsAsyncWithHttpInfo($request);
    }
    
    public function listProjectsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/repos/{namespace}/projects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListProjectsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListProjectsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取项目的所有tag标签
     *
     * 获取指定项目的所有tag标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTagsAsync($request)
    {
        return $this->listTagsAsyncWithHttpInfo($request);
    }
    
    public function listTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/repos/{namespace}/{project}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['project'] !== null) {
            $pathParams['project'] = $localVarParams['project'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库文件列表
     *
     * 获取指定项目仓库的文件列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTreesAsync($request)
    {
        return $this->listTreesAsyncWithHttpInfo($request);
    }
    
    public function listTreesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/files/{namespace}/{project}/trees';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ref'] !== null) {
            $queryParams['ref'] = $localVarParams['ref'];
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['project'] !== null) {
            $pathParams['project'] = $localVarParams['project'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListTreesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListTreesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取仓库文件内容
     *
     * 获取指定项目仓库下文件的内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showContentAsync($request)
    {
        return $this->showContentAsyncWithHttpInfo($request);
    }
    
    public function showContentAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/files/{namespace}/{project}/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ref'] !== null) {
            $queryParams['ref'] = $localVarParams['ref'];
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['project'] !== null) {
            $pathParams['project'] = $localVarParams['project'];
        }
        if ($localVarParams['path'] !== null) {
            $pathParams['path'] = $localVarParams['path'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowContentResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowContentRequest',
            $asyncRequest = true);
    }

    /**
     * 通过clone url 获取仓库信息
     *
     * 通过指定的clone url 获取仓库信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showProjectDetailAsync($request)
    {
        return $this->showProjectDetailAsyncWithHttpInfo($request);
    }
    
    public function showProjectDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/repos/project-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['cloneUrl'] !== null) {
            $queryParams['clone_url'] = $localVarParams['cloneUrl'];
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowProjectDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowProjectDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 获取授权重定向URL
     *
     * 获取指定Git仓库类型的授权重定向URL。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRedirectUrlAsync($request)
    {
        return $this->showRedirectUrlAsyncWithHttpInfo($request);
    }
    
    public function showRedirectUrlAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/auths/{repo_type}/redirect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['tag'] !== null) {
            $queryParams['tag'] = $localVarParams['tag'];
        }
        if ($localVarParams['repoType'] !== null) {
            $pathParams['repo_type'] = $localVarParams['repoType'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowRedirectUrlResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ShowRedirectUrlRequest',
            $asyncRequest = true);
    }

    /**
     * 更新仓库文件内容
     *
     * 更新指定项目仓库下的文件内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFileAsync($request)
    {
        return $this->updateFileAsyncWithHttpInfo($request);
    }
    
    public function updateFileAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/git/files/{namespace}/{project}/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['ref'] !== null) {
            $queryParams['ref'] = $localVarParams['ref'];
        }
        if ($localVarParams['xRepoAuth'] !== null) {
            $headerParams['x_repo_auth'] = $localVarParams['xRepoAuth'];
        }
        if ($localVarParams['namespace'] !== null) {
            $pathParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['project'] !== null) {
            $pathParams['project'] = $localVarParams['project'];
        }
        if ($localVarParams['path'] !== null) {
            $pathParams['path'] = $localVarParams['path'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\UpdateFileResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\UpdateFileRequest',
            $asyncRequest = true);
    }

    /**
     * 获取所有支持的应用资源规格
     *
     * 通过此API获取所用支持的应用资源规格。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFlavorsAsync($request)
    {
        return $this->listFlavorsAsyncWithHttpInfo($request);
    }
    
    public function listFlavorsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/metadata/flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListFlavorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListFlavorsRequest',
            $asyncRequest = true);
    }

    /**
     * 获取所有支持的应用组件运行时类型
     *
     * 此API用来获取所有支持应用组件运行时类型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRuntimesAsync($request)
    {
        return $this->listRuntimesAsyncWithHttpInfo($request);
    }
    
    public function listRuntimesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/metadata/runtimes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListRuntimesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListRuntimesRequest',
            $asyncRequest = true);
    }

    /**
     * 获取所有支持的应用组件模板
     *
     * 此API用来获取所有内置应用组件模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTemplatesAsync($request)
    {
        return $this->listTemplatesAsyncWithHttpInfo($request);
    }
    
    public function listTemplatesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cas/metadata/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListTemplatesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\ServiceStage\V2\Model\ListTemplatesRequest',
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