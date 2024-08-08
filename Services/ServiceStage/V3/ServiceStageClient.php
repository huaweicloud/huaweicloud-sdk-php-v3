<?php

namespace HuaweiCloud\SDK\ServiceStage\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class ServiceStageClient extends Client
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
        $client = new ClientBuilder(new ServiceStageClient());
        return $client;
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
    public function createApplication($request)
    {
        return $this->createApplicationWithHttpInfo($request);
    }

    public function createApplicationWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\CreateApplicationResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\CreateApplicationRequest');
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
    public function deleteApplication($request)
    {
        return $this->deleteApplicationWithHttpInfo($request);
    }

    public function deleteApplicationWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications/{application_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\DeleteApplicationResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\DeleteApplicationRequest');
    }

    /**
     * 根据应用ID删除应用配置
     *
     * 此API通过应用ID删除应用配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApplicationConfiguration($request)
    {
        return $this->deleteApplicationConfigurationWithHttpInfo($request);
    }

    public function deleteApplicationConfigurationWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications/{application_id}/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\DeleteApplicationConfigurationResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\DeleteApplicationConfigurationRequest');
    }

    /**
     * 根据应用ID修改应用信息
     *
     * 此API通过应用ID修改应用信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifyApplication($request)
    {
        return $this->modifyApplicationWithHttpInfo($request);
    }

    public function modifyApplicationWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications/{application_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ModifyApplicationResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ModifyApplicationRequest');
    }

    /**
     * 根据应用ID修改应用配置
     *
     * 此API通过应用ID修改应用配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifyApplicationConfiguration($request)
    {
        return $this->modifyApplicationConfigurationWithHttpInfo($request);
    }

    public function modifyApplicationConfigurationWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications/{application_id}/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ModifyApplicationConfigurationResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ModifyApplicationConfigurationRequest');
    }

    /**
     * 根据应用ID获取应用配置
     *
     * 此API通过应用ID获取应用配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApplicationConfiguration($request)
    {
        return $this->showApplicationConfigurationWithHttpInfo($request);
    }

    public function showApplicationConfigurationWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications/{application_id}/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowApplicationConfigurationResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowApplicationConfigurationRequest');
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
    public function showApplicationInfo($request)
    {
        return $this->showApplicationInfoWithHttpInfo($request);
    }

    public function showApplicationInfoWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications/{application_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowApplicationInfoResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowApplicationInfoRequest');
    }

    /**
     * 获取所用应用
     *
     * 获取所有应用信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApplications($request)
    {
        return $this->showApplicationsWithHttpInfo($request);
    }

    public function showApplicationsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowApplicationsResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowApplicationsRequest');
    }

    /**
     * 应用中创建组件
     *
     * 此API用来在应用中创建组件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createComponent($request)
    {
        return $this->createComponentWithHttpInfo($request);
    }

    public function createComponentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications/{application_id}/components';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\CreateComponentResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\CreateComponentRequest');
    }

    /**
     * 根据组件ID删除组件
     *
     * 此API通过组件ID删除组件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteComponent($request)
    {
        return $this->deleteComponentWithHttpInfo($request);
    }

    public function deleteComponentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications/{application_id}/components/{component_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\DeleteComponentResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\DeleteComponentRequest');
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
    public function modifyComponent($request)
    {
        return $this->modifyComponentWithHttpInfo($request);
    }

    public function modifyComponentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications/{application_id}/components/{component_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ModifyComponentResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ModifyComponentRequest');
    }

    /**
     * 根据组件ID获取组件信息
     *
     * 通过组件ID获取组件信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showComponentInfo($request)
    {
        return $this->showComponentInfoWithHttpInfo($request);
    }

    public function showComponentInfoWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications/{application_id}/components/{component_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['expectFields'] !== null) {
            $queryParams['expect_fields'] = $localVarParams['expectFields'];
        }
        if ($localVarParams['componentId'] !== null) {
            $pathParams['component_id'] = $localVarParams['componentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowComponentInfoResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowComponentInfoRequest');
    }

    /**
     * 通过组件ID获取记录
     *
     * 此API用来通过组件ID获取记录
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showComponentRecords($request)
    {
        return $this->showComponentRecordsWithHttpInfo($request);
    }

    public function showComponentRecordsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications/{application_id}/components/{component_id}/records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['componentId'] !== null) {
            $pathParams['component_id'] = $localVarParams['componentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowComponentRecordsResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowComponentRecordsRequest');
    }

    /**
     * 获取所有组件
     *
     * 此API用来获取所有组件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showComponents($request)
    {
        return $this->showComponentsWithHttpInfo($request);
    }

    public function showComponentsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/components';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['applicationName'] !== null) {
            $queryParams['application_name'] = $localVarParams['applicationName'];
        }
        if ($localVarParams['componentName'] !== null) {
            $queryParams['component_name'] = $localVarParams['componentName'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowComponentsResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowComponentsRequest');
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
    public function showComponentsInApplication($request)
    {
        return $this->showComponentsInApplicationWithHttpInfo($request);
    }

    public function showComponentsInApplicationWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications/{application_id}/components';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowComponentsInApplicationResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowComponentsInApplicationRequest');
    }

    /**
     * 根据组件ID下发组件任务
     *
     * 通过组件ID下发组件任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateComponentAction($request)
    {
        return $this->updateComponentActionWithHttpInfo($request);
    }

    public function updateComponentActionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/applications/{application_id}/components/{component_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\UpdateComponentActionResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\UpdateComponentActionRequest');
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
    public function createEnvironment($request)
    {
        return $this->createEnvironmentWithHttpInfo($request);
    }

    public function createEnvironmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/environments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\CreateEnvironmentResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\CreateEnvironmentRequest');
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
    public function deleteEnvironment($request)
    {
        return $this->deleteEnvironmentWithHttpInfo($request);
    }

    public function deleteEnvironmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/environments/{environment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\DeleteEnvironmentResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\DeleteEnvironmentRequest');
    }

    /**
     * 根据环境ID修改环境
     *
     * 此API通过环境ID修改环境。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifyEnvironment($request)
    {
        return $this->modifyEnvironmentWithHttpInfo($request);
    }

    public function modifyEnvironmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/environments/{environment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ModifyEnvironmentResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ModifyEnvironmentRequest');
    }

    /**
     * 根据环境ID修改环境资源
     *
     * 此API用来通过环境ID修改环境资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifyResourceInEnvironment($request)
    {
        return $this->modifyResourceInEnvironmentWithHttpInfo($request);
    }

    public function modifyResourceInEnvironmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/environments/{environment_id}/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ModifyResourceInEnvironmentResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ModifyResourceInEnvironmentRequest');
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
    public function showEnvironmentInfo($request)
    {
        return $this->showEnvironmentInfoWithHttpInfo($request);
    }

    public function showEnvironmentInfoWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/environments/{environment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowEnvironmentInfoResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowEnvironmentInfoRequest');
    }

    /**
     * 根据环境ID查询环境资源
     *
     * 此API用来根据环境ID查询环境资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEnvironmentResources($request)
    {
        return $this->showEnvironmentResourcesWithHttpInfo($request);
    }

    public function showEnvironmentResourcesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/environments/{environment_id}/resources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowEnvironmentResourcesResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowEnvironmentResourcesRequest');
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
    public function showEnvironments($request)
    {
        return $this->showEnvironmentsWithHttpInfo($request);
    }

    public function showEnvironmentsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/environments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['environmentId'] !== null) {
            $queryParams['environment_id'] = $localVarParams['environmentId'];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowEnvironmentsResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowEnvironmentsRequest');
    }

    /**
     * get cas job infomation
     *
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJobInfo($request)
    {
        return $this->showJobInfoWithHttpInfo($request);
    }

    public function showJobInfoWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowJobInfoResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowJobInfoRequest');
    }

    /**
     * 查询运行时栈
     *
     * 获取运行时信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRuntimeStacks($request)
    {
        return $this->showRuntimeStacksWithHttpInfo($request);
    }

    public function showRuntimeStacksWithHttpInfo($request)
    {
        $resourcePath = '/v3/{project_id}/cas/runtimestacks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowRuntimeStacksResponse',
            $requestType='\HuaweiCloud\SDK\ServiceStage\V3\Model\ShowRuntimeStacksRequest');
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