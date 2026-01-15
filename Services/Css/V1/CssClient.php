<?php

namespace HuaweiCloud\SDK\Css\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CssClient extends Client
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
        $client = new ClientBuilder(new CssClient());
        return $client;
    }


    /**
     * 添加独立master、client
     *
     * 由于集群数据面业务的增长或者不确定性，很难在一开始就能够把集群的规模形态想明白，该接口能够在非独立master和client的集群上面独立master、client角色。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addIndependentNode($request)
    {
        return $this->addIndependentNodeWithHttpInfo($request);
    }

    public function addIndependentNodeWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/type/{type}/independent';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['type'] !== null) {
            $pathParams['type'] = $localVarParams['type'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\AddIndependentNodeResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\AddIndependentNodeRequest');
    }

    /**
     * 切换集群子网
     *
     * 该接口可以在集群创建成功后，切换集群子网，扩容等添加节点场景下使用新子网绑定新增节点。
     * 
     * &gt;同VPC下的子网默认网络联通，请确保新子网与您业务系统的网络连通性。另：开启了自动创建ipv6地址的集群只支持切换到开启了ipv6的新子网。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeClusterSubnet($request)
    {
        return $this->changeClusterSubnetWithHttpInfo($request);
    }

    public function changeClusterSubnetWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/subnet/change';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ChangeClusterSubnetResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ChangeClusterSubnetRequest');
    }

    /**
     * 安全模式修改
     *
     * 该接口用于切换集群的安全模式。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeMode($request)
    {
        return $this->changeModeWithHttpInfo($request);
    }

    public function changeModeWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/mode/change';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ChangeModeResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ChangeModeRequest');
    }

    /**
     * 切换安全组
     *
     * 该接口可以在集群创建成功后，修改安全组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeSecurityGroup($request)
    {
        return $this->changeSecurityGroupWithHttpInfo($request);
    }

    public function changeSecurityGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/sg/change';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ChangeSecurityGroupResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ChangeSecurityGroupRequest');
    }

    /**
     * 关闭智能运维定时检测
     *
     * CSS服务提供智能运维功能的定时检测，支持每日定时检测集群的潜在风险。此接口用于关闭智能运维定时检测。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function closeAiOpsSetting($request)
    {
        return $this->closeAiOpsSettingWithHttpInfo($request);
    }

    public function closeAiOpsSettingWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ai-ops/close';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\CloseAiOpsSettingResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\CloseAiOpsSettingRequest');
    }

    /**
     * 自动创建委托
     *
     * 当CSS预置委托不存在时，自动创建委托并赋予CSS依赖的权限。
     * 当CSS预置委托存在时，去除依赖的高风险权限，设置为最小化权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAgency($request)
    {
        return $this->createAgencyWithHttpInfo($request);
    }

    public function createAgencyWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/agency/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\CreateAgencyResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\CreateAgencyRequest');
    }

    /**
     * 创建一次集群检测任务
     *
     * 该接口用于创建一个集群检测任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAiOps($request)
    {
        return $this->createAiOpsWithHttpInfo($request);
    }

    public function createAiOpsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ai-ops';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\CreateAiOpsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\CreateAiOpsRequest');
    }

    /**
     * 设置自动创建快照策略
     *
     * 该接口用于设置自动创建快照，默认一天创建一个快照。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAutoCreatePolicy($request)
    {
        return $this->createAutoCreatePolicyWithHttpInfo($request);
    }

    public function createAutoCreatePolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/index_snapshot/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\CreateAutoCreatePolicyResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\CreateAutoCreatePolicyRequest');
    }

    /**
     * 开启公网访问
     *
     * 该接口用于开启公网访问。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBindPublic($request)
    {
        return $this->createBindPublicWithHttpInfo($request);
    }

    public function createBindPublicWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/public/open';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\CreateBindPublicResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\CreateBindPublicRequest');
    }

    /**
     * 创建集群
     *
     * 该接口用于创建集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCluster($request)
    {
        return $this->createClusterWithHttpInfo($request);
    }

    public function createClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\CreateClusterResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\CreateClusterRequest');
    }

    /**
     * 添加指定集群标签
     *
     * 该接口用于给指定集群添加标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createClustersTags($request)
    {
        return $this->createClustersTagsWithHttpInfo($request);
    }

    public function createClustersTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/{resource_type}/{cluster_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\CreateClustersTagsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\CreateClustersTagsRequest');
    }

    /**
     * 集群负载均衡监听器配置。
     *
     * 该接口用于集群负载均衡监听器配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createElbListener($request)
    {
        return $this->createElbListenerWithHttpInfo($request);
    }

    public function createElbListenerWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/es-listeners';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\CreateElbListenerResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\CreateElbListenerRequest');
    }

    /**
     * 加载自定义词库
     *
     * 该接口用于加载存放于OBS的自定义词库。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLoadIkThesaurus($request)
    {
        return $this->createLoadIkThesaurusWithHttpInfo($request);
    }

    public function createLoadIkThesaurusWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/thesaurus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\CreateLoadIkThesaurusResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\CreateLoadIkThesaurusRequest');
    }

    /**
     * 备份日志
     *
     * 该接口用于备份日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLogBackup($request)
    {
        return $this->createLogBackupWithHttpInfo($request);
    }

    public function createLogBackupWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/logs/collect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\CreateLogBackupResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\CreateLogBackupRequest');
    }

    /**
     * 手动创建快照
     *
     * 该接口用于手动创建一个快照。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSnapshot($request)
    {
        return $this->createSnapshotWithHttpInfo($request);
    }

    public function createSnapshotWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/index_snapshot';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\CreateSnapshotResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\CreateSnapshotRequest');
    }

    /**
     * 删除一个检测任务记录
     *
     * 该接口用于删除一个检测任务记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAiOps($request)
    {
        return $this->deleteAiOpsWithHttpInfo($request);
    }

    public function deleteAiOpsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ai-ops/{aiops_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['aiopsId'] !== null) {
            $pathParams['aiops_id'] = $localVarParams['aiopsId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\DeleteAiOpsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\DeleteAiOpsRequest');
    }

    /**
     * 删除集群
     *
     * 此接口用于删除集群。集群删除将释放此集群的所有资源，包括客户数据。如果需要保留客户集群数据，建议在删除集群前先创建快照。
     * 
     * &gt;此接口亦可用于包年/包月集群退订。公安冻结的集群不能删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCluster($request)
    {
        return $this->deleteClusterWithHttpInfo($request);
    }

    public function deleteClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\DeleteClusterResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\DeleteClusterRequest');
    }

    /**
     * 删除集群标签
     *
     * 此接口用于删除集群标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteClustersTags($request)
    {
        return $this->deleteClustersTagsWithHttpInfo($request);
    }

    public function deleteClustersTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/{resource_type}/{cluster_id}/tags/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\DeleteClustersTagsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\DeleteClustersTagsRequest');
    }

    /**
     * 删除自定义词库
     *
     * 该接口用于删除自定义词库。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteIkThesaurus($request)
    {
        return $this->deleteIkThesaurusWithHttpInfo($request);
    }

    public function deleteIkThesaurusWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/thesaurus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\DeleteIkThesaurusResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\DeleteIkThesaurusRequest');
    }

    /**
     * 删除快照
     *
     * 该接口用于删除快照。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSnapshot($request)
    {
        return $this->deleteSnapshotWithHttpInfo($request);
    }

    public function deleteSnapshotWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/index_snapshot/{snapshot_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['snapshotId'] !== null) {
            $pathParams['snapshot_id'] = $localVarParams['snapshotId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\DeleteSnapshotResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\DeleteSnapshotRequest');
    }

    /**
     * 下载安全证书
     *
     * 该接口用于下载安全证书。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadCert($request)
    {
        return $this->downloadCertWithHttpInfo($request);
    }

    public function downloadCertWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/cer/download';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['multipart/form-data', 'application/octet-stream']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data', 'application/octet-stream'],
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\DownloadCertResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\DownloadCertRequest');
    }

    /**
     * 为集群打开或关闭负载均衡器
     *
     * 该接口为集群打开或关闭负载均衡器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableOrDisableElb($request)
    {
        return $this->enableOrDisableElbWithHttpInfo($request);
    }

    public function enableOrDisableElbWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/loadbalancers/es-switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\EnableOrDisableElbResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\EnableOrDisableElbRequest');
    }

    /**
     * 获取智能运维任务列表及详情
     *
     * CSS服务提供智能运维功能，支持检测集群潜在风险。检测任务完成后，可以查看集群存在的风险项详情，根据风险建议及时处理集群存在的风险。此接口用于获取智能运维任务列表及详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAiOps($request)
    {
        return $this->listAiOpsWithHttpInfo($request);
    }

    public function listAiOpsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ai-ops';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['report'] !== null) {
            $queryParams['report'] = $localVarParams['report'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListAiOpsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListAiOpsRequest');
    }

    /**
     * 查询集群列表
     *
     * 该接口用于查询并显示集群列表以及集群的状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClustersDetails($request)
    {
        return $this->listClustersDetailsWithHttpInfo($request);
    }

    public function listClustersDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['datastoreType'] !== null) {
            $queryParams['datastoreType'] = $localVarParams['datastoreType'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListClustersDetailsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListClustersDetailsRequest');
    }

    /**
     * 查询所有标签
     *
     * 该接口用于查询指定region下的所有标签集合。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listClustersTags($request)
    {
        return $this->listClustersTagsWithHttpInfo($request);
    }

    public function listClustersTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/{resource_type}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListClustersTagsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListClustersTagsRequest');
    }

    /**
     * 查询证书列表
     *
     * 该接口用于查询证书列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listElbCerts($request)
    {
        return $this->listElbCertsWithHttpInfo($request);
    }

    public function listElbCertsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/elb/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListElbCertsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListElbCertsRequest');
    }

    /**
     * 查询集群支持的elbv3负载均衡器
     *
     * 展示查询集群支持的elbv3负载均衡器
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listElbs($request)
    {
        return $this->listElbsWithHttpInfo($request);
    }

    public function listElbsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/loadbalancers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListElbsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListElbsRequest');
    }

    /**
     * 获取实例规格列表
     *
     * 该接口用于查询并显示支持的实例规格对应的ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFlavors($request)
    {
        return $this->listFlavorsWithHttpInfo($request);
    }

    public function listFlavorsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/es-flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListFlavorsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListFlavorsRequest');
    }

    /**
     * 获取可升级的目标镜像ID
     *
     * 该接口用于获取当前集群的可升级目标镜像ID。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImages($request)
    {
        return $this->listImagesWithHttpInfo($request);
    }

    public function listImagesWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/target/{upgrade_type}/images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['upgradeType'] !== null) {
            $pathParams['upgrade_type'] = $localVarParams['upgradeType'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListImagesResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListImagesRequest');
    }

    /**
     * 查询作业列表
     *
     * 该接口用于查询具体某个集群的日志任务记录列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLogsJob($request)
    {
        return $this->listLogsJobWithHttpInfo($request);
    }

    public function listLogsJobWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/logs/records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListLogsJobResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListLogsJobRequest');
    }

    /**
     * 获取集群路由
     *
     * 该接口用于获取集群路由。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRoutes($request)
    {
        return $this->listRoutesWithHttpInfo($request);
    }

    public function listRoutesWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/route';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListRoutesResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListRoutesRequest');
    }

    /**
     * 获取智能运维告警可用的SMN主题
     *
     * 该接口用于获取智能运维告警可用的SMN主题。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSmnTopics($request)
    {
        return $this->listSmnTopicsWithHttpInfo($request);
    }

    public function listSmnTopicsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/domains/{domain_id}/ai-ops/smn-topics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListSmnTopicsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListSmnTopicsRequest');
    }

    /**
     * 查询快照列表
     *
     * 该接口用于查询集群的所有快照。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSnapshots($request)
    {
        return $this->listSnapshotsWithHttpInfo($request);
    }

    public function listSnapshotsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/index_snapshots';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListSnapshotsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListSnapshotsRequest');
    }

    /**
     * 获取参数配置列表
     *
     * 该接口用于获取当前集群现有的参数配置列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listYmls($request)
    {
        return $this->listYmlsWithHttpInfo($request);
    }

    public function listYmlsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ymls/template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListYmlsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListYmlsRequest');
    }

    /**
     * 获取参数配置任务列表
     *
     * 该接口可获取参数配置的任务操作列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listYmlsJob($request)
    {
        return $this->listYmlsJobWithHttpInfo($request);
    }

    public function listYmlsJobWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ymls/joblists';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListYmlsJobResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListYmlsJobRequest');
    }

    /**
     * 修改密码
     *
     * 该接口用于修改集群密码。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetPassword($request)
    {
        return $this->resetPasswordWithHttpInfo($request);
    }

    public function resetPasswordWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/password/reset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ResetPasswordResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ResetPasswordRequest');
    }

    /**
     * 重启集群
     *
     * 此接口用于重启集群，重启集群将导致业务中断。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restartCluster($request)
    {
        return $this->restartClusterWithHttpInfo($request);
    }

    public function restartClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/restart';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\RestartClusterResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\RestartClusterRequest');
    }

    /**
     * 恢复快照
     *
     * 该接口用于手动恢复一个快照。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restoreSnapshot($request)
    {
        return $this->restoreSnapshotWithHttpInfo($request);
    }

    public function restoreSnapshotWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/index_snapshot/{snapshot_id}/restore';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['snapshotId'] !== null) {
            $pathParams['snapshot_id'] = $localVarParams['snapshotId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\RestoreSnapshotResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\RestoreSnapshotRequest');
    }

    /**
     * 重试升级失败任务
     *
     * 由于升级过程时间较长，可能由于网络等原因导致升级失败，可以通过该接口重试该任务或终止该任务的影响。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function retryUpgradeTask($request)
    {
        return $this->retryUpgradeTaskWithHttpInfo($request);
    }

    public function retryUpgradeTaskWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/upgrade/{action_id}/retry';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['retryMode'] !== null) {
            $queryParams['retry_mode'] = $localVarParams['retryMode'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['actionId'] !== null) {
            $pathParams['action_id'] = $localVarParams['actionId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\RetryUpgradeTaskResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\RetryUpgradeTaskRequest');
    }

    /**
     * 查看智能运维检测项
     *
     * CSS服务提供智能运维功能，支持检测集群潜在风险。此接口用于获取智能运维的检测项。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAiOpsDetector($request)
    {
        return $this->showAiOpsDetectorWithHttpInfo($request);
    }

    public function showAiOpsDetectorWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ai-ops/detector';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowAiOpsDetectorResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowAiOpsDetectorRequest');
    }

    /**
     * 查看智能运维定时检测设置
     *
     * CSS服务提供智能运维功能的定时检测，支持每日定时检测集群的潜在风险。此接口用于获取智能运维定时检测设置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAiOpsSetting($request)
    {
        return $this->showAiOpsSettingWithHttpInfo($request);
    }

    public function showAiOpsSettingWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ai-ops/setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowAiOpsSettingResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowAiOpsSettingRequest');
    }

    /**
     * 查询自动创建快照的策略
     *
     * 该接口用于查询自动创建快照策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAutoCreatePolicy($request)
    {
        return $this->showAutoCreatePolicyWithHttpInfo($request);
    }

    public function showAutoCreatePolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/index_snapshot/policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowAutoCreatePolicyResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowAutoCreatePolicyRequest');
    }

    /**
     * 查询集群详情
     *
     * 该接口用于查询并显示单个集群详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterDetail($request)
    {
        return $this->showClusterDetailWithHttpInfo($request);
    }

    public function showClusterDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowClusterDetailResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowClusterDetailRequest');
    }

    /**
     * 查询指定集群的标签
     *
     * 该接口用于查询指定集群的标签信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterTag($request)
    {
        return $this->showClusterTagWithHttpInfo($request);
    }

    public function showClusterTagWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/{resource_type}/{cluster_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowClusterTagResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowClusterTagRequest');
    }

    /**
     * 查询集群磁盘使用情况
     *
     * 查询集群磁盘使用情况
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showClusterVolumeUsage($request)
    {
        return $this->showClusterVolumeUsageWithHttpInfo($request);
    }

    public function showClusterVolumeUsageWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/volume';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowClusterVolumeUsageResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowClusterVolumeUsageRequest');
    }

    /**
     * 查询指定引擎支持的规格。
     *
     * 查询指定引擎支持的规格。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDataStoreFlavorDetail($request)
    {
        return $this->showDataStoreFlavorDetailWithHttpInfo($request);
    }

    public function showDataStoreFlavorDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/datastore/{datastore_id}/flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['datastoreVersionId'] !== null) {
            $queryParams['datastore_version_id'] = $localVarParams['datastoreVersionId'];
        }
        if ($localVarParams['datastoreId'] !== null) {
            $pathParams['datastore_id'] = $localVarParams['datastoreId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowDataStoreFlavorDetailResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowDataStoreFlavorDetailRequest');
    }

    /**
     * 获取集群的负载均衡器信息
     *
     * 该接口用于获取集群的负载均衡器信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showElbDetail($request)
    {
        return $this->showElbDetailWithHttpInfo($request);
    }

    public function showElbDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/es-listeners';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowElbDetailResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowElbDetailRequest');
    }

    /**
     * 查询规格详情
     *
     * 查询规格详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showFlavorDetail($request)
    {
        return $this->showFlavorDetailWithHttpInfo($request);
    }

    public function showFlavorDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/flavors/{flavor_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['flavorId'] !== null) {
            $pathParams['flavor_id'] = $localVarParams['flavorId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowFlavorDetailResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowFlavorDetailRequest');
    }

    /**
     * 查询日志基础配置
     *
     * 该接口用于日志基础配置查询。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGetLogSetting($request)
    {
        return $this->showGetLogSettingWithHttpInfo($request);
    }

    public function showGetLogSettingWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/logs/settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowGetLogSettingResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowGetLogSettingRequest');
    }

    /**
     * 查询自定义词库状态
     *
     * 该接口用于查询自定义词库的加载状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showIkThesaurus($request)
    {
        return $this->showIkThesaurusWithHttpInfo($request);
    }

    public function showIkThesaurusWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/thesaurus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowIkThesaurusResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowIkThesaurusRequest');
    }

    /**
     * 查询日志
     *
     * 该接口用于查询日志信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLogBackup($request)
    {
        return $this->showLogBackupWithHttpInfo($request);
    }

    public function showLogBackupWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/logs/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowLogBackupResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowLogBackupRequest');
    }

    /**
     * 查询指定集群的可变更规格列表
     *
     * 查询指定集群可以变更到哪些规格
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResizeFlavors($request)
    {
        return $this->showResizeFlavorsWithHttpInfo($request);
    }

    public function showResizeFlavorsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/resize-flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $queryParams['clusterId'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowResizeFlavorsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowResizeFlavorsRequest');
    }

    /**
     * 获取终端节点连接
     *
     * 该接口用于获取终端节点连接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showVpcepConnection($request)
    {
        return $this->showVpcepConnectionWithHttpInfo($request);
    }

    public function showVpcepConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/vpcepservice/connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowVpcepConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowVpcepConnectionRequest');
    }

    /**
     * 自动设置集群快照的基础配置（不推荐使用）
     *
     * 该接口用于自动设置集群快照的基础配置，包括配置OBS桶和IAM委托。
     * 
     * 
     * - “OBS桶”：快照存储的OBS桶位置。
     * 
     * - “备份路径”：快照在OBS桶中的存放路径。
     * 
     * - “IAM委托”：由于需要将快照保存在OBS中，所以需要在IAM中设置对应的委托获取对OBS服务的授权。
     * 
     * &gt;自动设置集群快照接口将会自动创建快照OBS桶和委托。如果有多个集群，每个集群使用这个接口都会创建一个不一样的OBS桶，可能会导致OBS的配额不够，较多的OBS桶也难以维护。建议可以直接使用[修改集群快照的基础配置](UpdateSnapshotSetting.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startAutoSetting($request)
    {
        return $this->startAutoSettingWithHttpInfo($request);
    }

    public function startAutoSettingWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/index_snapshot/auto_setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StartAutoSettingResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StartAutoSettingRequest');
    }

    /**
     * 开启日志自动备份策略
     *
     * 该接口用于日志自动备份策略开启。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startLogAutoBackupPolicy($request)
    {
        return $this->startLogAutoBackupPolicyWithHttpInfo($request);
    }

    public function startLogAutoBackupPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/logs/policy/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StartLogAutoBackupPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StartLogAutoBackupPolicyRequest');
    }

    /**
     * 开启日志备份或日志采集功能
     *
     * 该接口用于开启集群的日志备份或日志采集功能开关。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startLogs($request)
    {
        return $this->startLogsWithHttpInfo($request);
    }

    public function startLogsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/logs/open';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['action'] !== null) {
            $queryParams['action'] = $localVarParams['action'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StartLogsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StartLogsRequest');
    }

    /**
     * 开启公网访问控制白名单
     *
     * 该接口用于开启公网访问控制白名单。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startPublicWhitelist($request)
    {
        return $this->startPublicWhitelistWithHttpInfo($request);
    }

    public function startPublicWhitelistWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/public/whitelist/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StartPublicWhitelistResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StartPublicWhitelistRequest');
    }

    /**
     * 连通性测试。
     *
     * 该接口用于连通性测试。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startTargetClusterConnectivityTest($request)
    {
        return $this->startTargetClusterConnectivityTestWithHttpInfo($request);
    }

    public function startTargetClusterConnectivityTestWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/logs/connectivity';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StartTargetClusterConnectivityTestResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StartTargetClusterConnectivityTestRequest');
    }

    /**
     * 开启终端节点服务
     *
     * 该接口用于开启终端节点服务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startVpecp($request)
    {
        return $this->startVpecpWithHttpInfo($request);
    }

    public function startVpecpWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/vpcepservice/open';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StartVpecpResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StartVpecpRequest');
    }

    /**
     * 关闭日志自动备份策略
     *
     * 该接口用于日志自动备份策略关闭。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopLogAutoBackupPolicy($request)
    {
        return $this->stopLogAutoBackupPolicyWithHttpInfo($request);
    }

    public function stopLogAutoBackupPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/logs/policy/close';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StopLogAutoBackupPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StopLogAutoBackupPolicyRequest');
    }

    /**
     * 关闭日志功能
     *
     * 该接口用于关闭日志功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopLogs($request)
    {
        return $this->stopLogsWithHttpInfo($request);
    }

    public function stopLogsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/logs/close';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StopLogsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StopLogsRequest');
    }

    /**
     * 关闭公网访问控制白名单
     *
     * 该接口用于关闭公网访问控制白名单。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopPublicWhitelist($request)
    {
        return $this->stopPublicWhitelistWithHttpInfo($request);
    }

    public function stopPublicWhitelistWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/public/whitelist/close';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StopPublicWhitelistResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StopPublicWhitelistRequest');
    }

    /**
     * 停用快照功能
     *
     * 该接口用于停用快照功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopSnapshot($request)
    {
        return $this->stopSnapshotWithHttpInfo($request);
    }

    public function stopSnapshotWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/index_snapshots';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StopSnapshotResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StopSnapshotRequest');
    }

    /**
     * 关闭终端节点服务
     *
     * 该接口用于关闭终端节点服务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopVpecp($request)
    {
        return $this->stopVpecpWithHttpInfo($request);
    }

    public function stopVpecpWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/vpcepservice/close';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StopVpecpResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StopVpecpRequest');
    }

    /**
     * 更新智能运维定时检测设置
     *
     * CSS服务提供智能运维功能的定时检测，支持每日定时检测集群的潜在风险。此接口用于设置智能运维定时检测。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAiOpsSetting($request)
    {
        return $this->updateAiOpsSettingWithHttpInfo($request);
    }

    public function updateAiOpsSettingWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ai-ops/setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateAiOpsSettingResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateAiOpsSettingRequest');
    }

    /**
     * 切换集群实例可用区
     *
     * 该接口通过指定节点类型切换AZ。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAzByInstanceType($request)
    {
        return $this->updateAzByInstanceTypeWithHttpInfo($request);
    }

    public function updateAzByInstanceTypeWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/inst-type/{inst_type}/azmigrate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['instType'] !== null) {
            $pathParams['inst_type'] = $localVarParams['instType'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateAzByInstanceTypeResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateAzByInstanceTypeRequest');
    }

    /**
     * 批量添加或删除集群标签
     *
     * 该接口用于对集群批量添加或删除标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBatchClustersTags($request)
    {
        return $this->updateBatchClustersTagsWithHttpInfo($request);
    }

    public function updateBatchClustersTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/{resource_type}/{cluster_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateBatchClustersTagsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateBatchClustersTagsRequest');
    }

    /**
     * 修改集群名称或描述
     *
     * 该接口用于修改集群名称或描述。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateClusterName($request)
    {
        return $this->updateClusterNameWithHttpInfo($request);
    }

    public function updateClusterNameWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/changename';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateClusterNameResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateClusterNameRequest');
    }

    /**
     * 更新集群负载均衡监听器
     *
     * 该接口用于更新集群负载均衡监听器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateEsListener($request)
    {
        return $this->updateEsListenerWithHttpInfo($request);
    }

    public function updateEsListenerWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/es-listeners/{listener_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['listenerId'] !== null) {
            $pathParams['listener_id'] = $localVarParams['listenerId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateEsListenerResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateEsListenerRequest');
    }

    /**
     * 扩容集群
     *
     * 该接口用于集群扩容实例（仅支持扩容elasticsearch实例）。只扩容普通节点，且只针对要扩容的集群实例不存在特殊节点（Master、Client、冷数据节点）的情况。
     * 
     * 集群扩容实例的数量和存储容量，请参考[扩容实例的数量和存储容量](UpdateExtendInstanceStorage.xml)。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateExtendCluster($request)
    {
        return $this->updateExtendClusterWithHttpInfo($request);
    }

    public function updateExtendClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/extend';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateExtendClusterResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateExtendClusterRequest');
    }

    /**
     * 扩容实例的数量和存储容量
     *
     * 该接口用于集群扩容不同类型实例的个数以及存储容量。已经存在独立Master、Client、冷数据节点的集群使用该接口扩容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateExtendInstanceStorage($request)
    {
        return $this->updateExtendInstanceStorageWithHttpInfo($request);
    }

    public function updateExtendInstanceStorageWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/role_extend';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateExtendInstanceStorageResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateExtendInstanceStorageRequest');
    }

    /**
     * 变更规格
     *
     * 该接口用于变更集群规格。只支持变更ess节点类型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFlavor($request)
    {
        return $this->updateFlavorWithHttpInfo($request);
    }

    public function updateFlavorWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/flavor';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateFlavorResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateFlavorRequest');
    }

    /**
     * 指定节点类型规格变更
     *
     * 修改集群规格。支持修改:
     * - ess： 数据节点。
     * - ess-cold: 冷数据节点。
     * - ess-client: Client节点。
     * - ess-master: Master节点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateFlavorByType($request)
    {
        return $this->updateFlavorByTypeWithHttpInfo($request);
    }

    public function updateFlavorByTypeWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/{types}/flavor';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['types'] !== null) {
            $pathParams['types'] = $localVarParams['types'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateFlavorByTypeResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateFlavorByTypeRequest');
    }

    /**
     * 节点替换
     *
     * 该接口用于替换失败节点。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInstance($request)
    {
        return $this->updateInstanceWithHttpInfo($request);
    }

    public function updateInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/instance/{instance_id}/replace';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['migrateData'] !== null) {
            $queryParams['migrateData'] = $localVarParams['migrateData'];
        }
        if ($localVarParams['agency'] !== null) {
            $queryParams['agency'] = $localVarParams['agency'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateInstanceRequest');
    }

    /**
     * 修改日志基础配置
     *
     * 该接口用于修改日志基础配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLogSetting($request)
    {
        return $this->updateLogSettingWithHttpInfo($request);
    }

    public function updateLogSettingWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/logs/settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateLogSettingResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateLogSettingRequest');
    }

    /**
     * 按需集群转包周期
     *
     * 该接口用于按需集群转包周期集群。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateOndemandClusterToPeriod($request)
    {
        return $this->updateOndemandClusterToPeriodWithHttpInfo($request);
    }

    public function updateOndemandClusterToPeriodWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/cluster/{cluster_id}/period';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateOndemandClusterToPeriodResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateOndemandClusterToPeriodRequest');
    }

    /**
     * 修改公网访问带宽
     *
     * 该接口用于修改公网访问带宽。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePublicBandWidth($request)
    {
        return $this->updatePublicBandWidthWithHttpInfo($request);
    }

    public function updatePublicBandWidthWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/public/bandwidth';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdatePublicBandWidthResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdatePublicBandWidthRequest');
    }

    /**
     * 更新集群路由
     *
     * 该接口用于更新集群路由。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateRoute($request)
    {
        return $this->updateRouteWithHttpInfo($request);
    }

    public function updateRouteWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/route';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateRouteResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateRouteRequest');
    }

    /**
     * 指定节点类型缩容
     *
     * 该接口用于集群对不同类型实例的个数以及存储容量进行缩容。包周期类型的集群不支持通过api进行指定节点类型缩容操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateShrinkCluster($request)
    {
        return $this->updateShrinkClusterWithHttpInfo($request);
    }

    public function updateShrinkClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/extend/{project_id}/clusters/{cluster_id}/role/shrink';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateShrinkClusterResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateShrinkClusterRequest');
    }

    /**
     * 指定节点缩容
     *
     * 该接口可以对集群现有节点中指定节点进行缩容。包周期类型的集群不支持通过api进行指定节点缩容操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateShrinkNodes($request)
    {
        return $this->updateShrinkNodesWithHttpInfo($request);
    }

    public function updateShrinkNodesWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/node/offline';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateShrinkNodesResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateShrinkNodesRequest');
    }

    /**
     * 修改集群快照的基础配置
     *
     * 该接口用于修改集群快照的基础配置，可修改OBS桶和IAM委托。
     * 
     * 可以使用该接口开启快照功能。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSnapshotSetting($request)
    {
        return $this->updateSnapshotSettingWithHttpInfo($request);
    }

    public function updateSnapshotSettingWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/index_snapshot/setting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateSnapshotSettingResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateSnapshotSettingRequest');
    }

    /**
     * 关闭公网访问
     *
     * 该接口用于关闭公网访问。包周期类型的集群不支持通过api进行关闭公网访问。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateUnbindPublic($request)
    {
        return $this->updateUnbindPublicWithHttpInfo($request);
    }

    public function updateUnbindPublicWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/public/close';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateUnbindPublicResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateUnbindPublicRequest');
    }

    /**
     * 更新终端节点连接
     *
     * 该接口用于更新终端节点连接。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVpcepConnection($request)
    {
        return $this->updateVpcepConnectionWithHttpInfo($request);
    }

    public function updateVpcepConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/vpcepservice/connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateVpcepConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateVpcepConnectionRequest');
    }

    /**
     * 修改终端节点服务白名单
     *
     * 该接口用于修改终端节点服务白名单。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateVpcepWhitelist($request)
    {
        return $this->updateVpcepWhitelistWithHttpInfo($request);
    }

    public function updateVpcepWhitelistWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/vpcepservice/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateVpcepWhitelistResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateVpcepWhitelistRequest');
    }

    /**
     * 修改参数配置
     *
     * 该接口用于修改参数配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateYmls($request)
    {
        return $this->updateYmlsWithHttpInfo($request);
    }

    public function updateYmlsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/ymls/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateYmlsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateYmlsRequest');
    }

    /**
     * 集群内核升级
     *
     * 该接口用于将低版本的ES升级到高版本或同版本ES。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function upgradeCore($request)
    {
        return $this->upgradeCoreWithHttpInfo($request);
    }

    public function upgradeCoreWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/inst-type/{inst_type}/image/upgrade';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['instType'] !== null) {
            $pathParams['inst_type'] = $localVarParams['instType'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpgradeCoreResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpgradeCoreRequest');
    }

    /**
     * 获取集群升级或切换AZ的详情信息
     *
     * 由于升级过程时间较长，该接口可以展示当前升级（切换AZ）节点的各个阶段信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function upgradeDetail($request)
    {
        return $this->upgradeDetailWithHttpInfo($request);
    }

    public function upgradeDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/upgrade/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['actionMode'] !== null) {
            $queryParams['action_mode'] = $localVarParams['actionMode'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpgradeDetailResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpgradeDetailRequest');
    }

    /**
     * 开启Kibana公网访问
     *
     * 该接口用于开启Kibana公网访问。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startKibanaPublic($request)
    {
        return $this->startKibanaPublicWithHttpInfo($request);
    }

    public function startKibanaPublicWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/publickibana/open';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StartKibanaPublicResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StartKibanaPublicRequest');
    }

    /**
     * 关闭Kibana公网访问控制
     *
     * 该接口用于关闭Kibana公网访问控制。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopPublicKibanaWhitelist($request)
    {
        return $this->stopPublicKibanaWhitelistWithHttpInfo($request);
    }

    public function stopPublicKibanaWhitelistWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/publickibana/whitelist/close';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StopPublicKibanaWhitelistResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StopPublicKibanaWhitelistRequest');
    }

    /**
     * 修改Kibana公网带宽
     *
     * 该接口用于修改Kibana公网带宽。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAlterKibana($request)
    {
        return $this->updateAlterKibanaWithHttpInfo($request);
    }

    public function updateAlterKibanaWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/publickibana/bandwidth';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateAlterKibanaResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateAlterKibanaRequest');
    }

    /**
     * 关闭Kibana公网访问
     *
     * 该接口用于关闭Kibana公网访问。包周期类型集群不支持通过api进行关闭Kibana公网访问。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCloseKibana($request)
    {
        return $this->updateCloseKibanaWithHttpInfo($request);
    }

    public function updateCloseKibanaWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/publickibana/close';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateCloseKibanaResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateCloseKibanaRequest');
    }

    /**
     * 修改Kibana公网访问控制
     *
     * 该接口通过修改kibana白名单，修改kibana的访问权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePublicKibanaWhitelist($request)
    {
        return $this->updatePublicKibanaWhitelistWithHttpInfo($request);
    }

    public function updatePublicKibanaWhitelistWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/publickibana/whitelist/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdatePublicKibanaWhitelistResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdatePublicKibanaWhitelistRequest');
    }

    /**
     * 添加到自定义模板
     *
     * 该接口用于添加到自定义模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addFavorite($request)
    {
        return $this->addFavoriteWithHttpInfo($request);
    }

    public function addFavoriteWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/lgsconf/favorite';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\AddFavoriteResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\AddFavoriteRequest');
    }

    /**
     * 创建配置文件
     *
     * 该接口用于创建配置文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCnf($request)
    {
        return $this->createCnfWithHttpInfo($request);
    }

    public function createCnfWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/lgsconf/submit';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\CreateCnfResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\CreateCnfRequest');
    }

    /**
     * 删除证书文件
     *
     * 该接口用于删除证书文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCerts($request)
    {
        return $this->deleteCertsWithHttpInfo($request);
    }

    public function deleteCertsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/certs/{cert_id}/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['certId'] !== null) {
            $pathParams['cert_id'] = $localVarParams['certId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\DeleteCertsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\DeleteCertsRequest');
    }

    /**
     * 删除配置文件
     *
     * 删除配置文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteConf($request)
    {
        return $this->deleteConfWithHttpInfo($request);
    }

    public function deleteConfWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/lgsconf/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\DeleteConfResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\DeleteConfRequest');
    }

    /**
     * 删除配置文件V2
     *
     * 删除配置文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteConfig($request)
    {
        return $this->deleteConfigWithHttpInfo($request);
    }

    public function deleteConfigWithHttpInfo($request)
    {
        $resourcePath = '/v2.0/{project_id}/clusters/{cluster_id}/lgsconf/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\DeleteConfigResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\DeleteConfigRequest');
    }

    /**
     * 删除自定义模板
     *
     * 该接口用于删除自定义模板。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTemplate($request)
    {
        return $this->deleteTemplateWithHttpInfo($request);
    }

    public function deleteTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/lgsconf/deletetemplate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\DeleteTemplateResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\DeleteTemplateRequest');
    }

    /**
     * 查询操作记录
     *
     * 该接口用于查询操作记录。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listActions($request)
    {
        return $this->listActionsWithHttpInfo($request);
    }

    public function listActionsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/lgsconf/listactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListActionsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListActionsRequest');
    }

    /**
     * 查询证书列表
     *
     * 该接口用于查询证书列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCerts($request)
    {
        return $this->listCertsWithHttpInfo($request);
    }

    public function listCertsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/certs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['certsType'] !== null) {
            $queryParams['certsType'] = $localVarParams['certsType'];
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListCertsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListCertsRequest');
    }

    /**
     * 查询配置文件列表
     *
     * 该接口用于查询配置文件列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConfs($request)
    {
        return $this->listConfsWithHttpInfo($request);
    }

    public function listConfsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/lgsconf/listconfs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListConfsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListConfsRequest');
    }

    /**
     * 查询pipeline列表
     *
     * 该接口用于查询pipeline列表。
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
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/lgsconf/listpipelines';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListPipelinesResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListPipelinesRequest');
    }

    /**
     * 查询模板列表
     *
     * 该接口用于查询模板列表。
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
        $resourcePath = '/v1.0/{project_id}/lgsconf/template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ListTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ListTemplatesRequest');
    }

    /**
     * 强制重启集群VMs
     *
     * 重启过程中集群不可用，请谨慎操作。 工作中状态的集群，重启过程会主动停止logstash进程，管道列表“是否保持常驻”值为否，会将所有运行中管道状态置为已停止。“是否保持常驻”值为是，会触发logstash进程恢复机制，将工作中的管道状态置为恢复中，若十分钟内重新拉起logstash进程，管道状态恢复为工作中，否则置为失败状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function rebootCluster($request)
    {
        return $this->rebootClusterWithHttpInfo($request);
    }

    public function rebootClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/reboot';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\RebootClusterResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\RebootClusterRequest');
    }

    /**
     * 查询证书文件信息
     *
     * 该接口用于查询证书文件信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCertsDetail($request)
    {
        return $this->showCertsDetailWithHttpInfo($request);
    }

    public function showCertsDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/certs/{cert_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
        }
        if ($localVarParams['certId'] !== null) {
            $pathParams['cert_id'] = $localVarParams['certId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowCertsDetailResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowCertsDetailRequest');
    }

    /**
     * 查询配置文件内容
     *
     * 该接口用于查询配置文件内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGetConfDetail($request)
    {
        return $this->showGetConfDetailWithHttpInfo($request);
    }

    public function showGetConfDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/lgsconf/confdetail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\ShowGetConfDetailResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\ShowGetConfDetailRequest');
    }

    /**
     * 连通性测试
     *
     * 该接口用于连通性测试。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startConnectivityTest($request)
    {
        return $this->startConnectivityTestWithHttpInfo($request);
    }

    public function startConnectivityTestWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/checkconnection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StartConnectivityTestResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StartConnectivityTestRequest');
    }

    /**
     * 热启动pipeline迁移数据。
     *
     * 该接口用于热启动pipeline迁移数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startHotPipeline($request)
    {
        return $this->startHotPipelineWithHttpInfo($request);
    }

    public function startHotPipelineWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/lgsconf/hot-start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StartHotPipelineResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StartHotPipelineRequest');
    }

    /**
     * 启动pipeline迁移数据
     *
     * 该接口用于启动pipeline迁移数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startPipeline($request)
    {
        return $this->startPipelineWithHttpInfo($request);
    }

    public function startPipelineWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/lgsconf/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StartPipelineResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StartPipelineRequest');
    }

    /**
     * 热停止pipeline迁移数据。
     *
     * 该接口用于热停止pipeline迁移数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopHotPipeline($request)
    {
        return $this->stopHotPipelineWithHttpInfo($request);
    }

    public function stopHotPipelineWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/lgsconf/hot-stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StopHotPipelineResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StopHotPipelineRequest');
    }

    /**
     * 停止pipeline迁移数据
     *
     * 该接口用于停止pipeline迁移数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopPipeline($request)
    {
        return $this->stopPipelineWithHttpInfo($request);
    }

    public function stopPipelineWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/lgsconf/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\StopPipelineResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\StopPipelineRequest');
    }

    /**
     * 更新配置文件
     *
     * 该接口用于更新配置文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCnf($request)
    {
        return $this->updateCnfWithHttpInfo($request);
    }

    public function updateCnfWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/lgsconf/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UpdateCnfResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UpdateCnfRequest');
    }

    /**
     * 上传证书文件
     *
     * 该接口用于上传证书文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadCerts($request)
    {
        return $this->uploadCertsWithHttpInfo($request);
    }

    public function uploadCertsWithHttpInfo($request)
    {
        $resourcePath = '/v1.0/{project_id}/clusters/{cluster_id}/certs/upload';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clusterId'] !== null) {
            $pathParams['cluster_id'] = $localVarParams['clusterId'];
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
            $responseType='\HuaweiCloud\SDK\Css\V1\Model\UploadCertsResponse',
            $requestType='\HuaweiCloud\SDK\Css\V1\Model\UploadCertsRequest');
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