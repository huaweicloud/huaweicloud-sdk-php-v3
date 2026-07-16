<?php

namespace HuaweiCloud\SDK\ModelArts\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class ModelArtsClient extends Client
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
        $client = new ClientBuilder(new ModelArtsClient());
        return $client;
    }


    /**
     * 计划事件授权
     *
     * 计划事件授权接口用于为指定的计划事件分配或调整权限。该接口适用于以下场景：当创建新的计划事件、调整现有计划事件的权限设置或变更权限分配时，用户可通过此接口为指定的计划事件授予或修改权限。使用该接口的前提条件是计划事件已存在且用户具有管理员权限。授权操作完成后，计划事件的权限设置将被更新，相关变更将被记录以便审计。若计划事件不存在、用户无权限操作或授权信息格式不正确，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function acceptScheduledEvent($request)
    {
        return $this->acceptScheduledEventWithHttpInfo($request);
    }

    public function acceptScheduledEventWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/scheduled-events/{event_id}/accept';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspaceId'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspaceId'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['eventId'] !== null) {
            $pathParams['event_id'] = $localVarParams['eventId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\AcceptScheduledEventResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\AcceptScheduledEventRequest');
    }

    /**
     * 动态挂载Notebook存储
     *
     * 动态挂载Notebook存储接口支持将存储动态挂载到运行中的Notebook实例的指定文件目录。调用该接口后，系统将在Notebook实例中**异步**挂载指定的存储实例，挂载完成后用户可在容器中以文件系统方式读写存储实例中的文件。若用户无权限访问指定实例或Notebook实例未运行，接口将返回相应的错误信息。
     * 
     * 支持的存储类型：
     * - **对象存储 OBS**：适合直接使用OBS桶作为持久化存储进行AI开发和探索场景，但小文件频繁读写性能较差，**模型训练，大文件解压等场景慎用，此类场景可能会导致Notebook文件操作卡顿**。
     * - **并行文件系统 PFS**：高性能对象存储文件系统，存储成本低，吞吐量大，能够快速处理高性能计算（HPC）工作负载，**但小文件频繁读写较弱。小文件频繁读写场景可能会导致Notebook文件操作卡顿**
     * - **高性能弹性文件服务SFS Turbo**：仅支持专属资源池实例挂载，**挂载前需要在资源池网络管理界面中进行网络关联**，支持多个环境使用，可以在多个开发环境、开发环境和训练之间共享。适合探索、实验等非正式生产场景，但不适合重IO读写模型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachDynamicStorage($request)
    {
        return $this->attachDynamicStorageWithHttpInfo($request);
    }

    public function attachDynamicStorageWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{instance_id}/storage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\AttachDynamicStorageResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\AttachDynamicStorageRequest');
    }

    /**
     * 批量绑定应用密钥
     *
     * 本接口用于将生成的多个apikey与指定服务进行批量绑定，用于访问特定服务。调用此接口前，确保已成功创建服务实例，并获取到有效的apikey。绑定成功后，apikey将作为服务调用时的身份验证凭证，确保仅授权用户能够访问该服务。如果尝试绑定已失效或已绑定当前服务的apikey将返回相应的异常信息，提示用户检查apikey的有效性和绑定状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchBindInferApiKeys($request)
    {
        return $this->batchBindInferApiKeysWithHttpInfo($request);
    }

    public function batchBindInferApiKeysWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/api-keys/batch-bind';
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
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
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
                ['application/x-www-form-urlencoded']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchBindInferApiKeysResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchBindInferApiKeysRequest');
    }

    /**
     * 批量为节点绑定逻辑子池
     *
     * 批量为节点绑定逻辑子池接口用于在物理专属池开启节点绑定功能时，对逻辑子池中的节点进行逻辑子池的换绑操作。该接口适用于以下场景：当需要重新分配资源、调整业务负载或优化资源使用效率时，用户可通过此接口将指定节点从当前逻辑子池迁移到另一个逻辑子池。使用该接口的前提条件是物理专属池已开启节点绑定功能，且目标逻辑子池已存在并具备足够的资源容量。绑定操作完成后，节点将从原逻辑子池解绑并绑定到目标逻辑子池，原逻辑子池的节点数减少，目标逻辑子池的节点数增加。若节点未绑定到任何逻辑子池、目标逻辑子池不存在或资源不足，或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchBindPoolNodes($request)
    {
        return $this->batchBindPoolNodesWithHttpInfo($request);
    }

    public function batchBindPoolNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodes/batch-bind';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
                ['application/json', 'application/x-www-form-urlencoded']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchBindPoolNodesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchBindPoolNodesRequest');
    }

    /**
     * 批量创建资源池标签
     *
     * 批量创建资源池标签接口用于为指定资源池添加或更新多个标签信息。该接口适用于以下场景：当需要对资源池进行统一分类管理（如成本归属、环境标识）、批量配置元数据（如项目归属、负责人信息）或更新已有标签值时，管理员可通过此接口一次性操作多个标签。使用该接口的前提条件是目标资源池必须已存在且处于可管理状态，调用者需具备资源池标签管理权限，且提交的标签数据需符合格式规范（如key非空、value长度限制）。操作完成后，系统将为资源池添加新标签或覆盖同名标签的值，且不会影响资源池的其他配置属性。若资源池不存在、用户权限不足、标签格式错误或系统服务异常，接口将返回对应的错误信息（如\&quot;404 Not Found\&quot;、\&quot;403 Forbidden\&quot;、\&quot;400 Bad Request\&quot;或\&quot;503 Service Unavailable\&quot;）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreatePoolTags($request)
    {
        return $this->batchCreatePoolTagsWithHttpInfo($request);
    }

    public function batchCreatePoolTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/pools/{pool_name}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchCreatePoolTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchCreatePoolTagsRequest');
    }

    /**
     * 批量删除内网接入
     *
     * 本接口用于批量删除指定的内网接入点，适用于需要清理多个不再使用的内网接入点的场景。调用此接口前，确保已具备相应的删除权限，并提供一个有效的内网接入点ID列表。删除成功后，所指定的内网接入点将被彻底移除，不再对任何服务生效。如果提供的内网接入点ID列表中包含无效或已删除的ID，将返回相应的异常信息，提示用户检查ID的有效性。此外，如果调用时出现权限不足或其他系统异常，也将返回相应的异常信息，提示用户检查权限或联系技术支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteInferIntranetConnections($request)
    {
        return $this->batchDeleteInferIntranetConnectionsWithHttpInfo($request);
    }

    public function batchDeleteInferIntranetConnectionsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/intranet-connection/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchDeleteInferIntranetConnectionsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchDeleteInferIntranetConnectionsRequest');
    }

    /**
     * 删除指定服务列表
     *
     * 删除指定服务列表功能允许用户批量删除多个服务，适用于需要清理资源、释放计算能力或管理多个服务的场景。使用此功能前，请确保您具备删除服务的权限，并提供有效的服务ID列表。成功执行后，指定的服务将被终止运行并释放相关资源。若服务ID无效、权限不足或服务状态不允许删除，将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteInferServices($request)
    {
        return $this->batchDeleteInferServicesWithHttpInfo($request);
    }

    public function batchDeleteInferServicesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchDeleteInferServicesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchDeleteInferServicesRequest');
    }

    /**
     * 批量删除节点
     *
     * 批量删除节点接口用于批量删除指定资源池中的节点。该接口适用于以下场景：当需要清理资源池中的冗余节点、重新分配资源或移除故障节点时，用户可通过此接口批量删除指定的节点。使用该接口的前提条件是资源池已创建且处于可用状态，用户具有删除节点的权限，且资源池中至少保留一个节点。删除操作完成后，指定的节点将被永久移除，资源池中剩余的节点将继续提供服务。若资源池不存在、节点不存在、用户无权限操作或资源池中节点不足，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeletePoolNodes($request)
    {
        return $this->batchDeletePoolNodesWithHttpInfo($request);
    }

    public function batchDeletePoolNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodes/batch-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchDeletePoolNodesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchDeletePoolNodesRequest');
    }

    /**
     * 批量删除资源池标签
     *
     * 批量删除资源标签接口用于移除指定资源上的多个标签信息。该接口适用于以下场景：当需要清理冗余标签（如过期分类、无效元数据）、统一调整资源分类策略或因权限变更需批量移除标签时，管理员可通过此接口一次性删除多个标签。使用该接口的前提条件是目标资源必须已存在且处于可管理状态，调用者需具备资源标签管理权限，且待删除的标签必须已关联至该资源，系统标签管理服务需正常运行。操作完成后，指定标签将从资源中彻底移除，且不会影响资源的其他配置属性。若资源不存在、用户权限不足、标签未关联或系统服务异常，接口将返回对应的错误信息（如\&quot;404 Not Found\&quot;、\&quot;403 Forbidden\&quot;、\&quot;400 Bad Request\&quot;或\&quot;503 Service Unavailable\&quot;）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeletePoolTags($request)
    {
        return $this->batchDeletePoolTagsWithHttpInfo($request);
    }

    public function batchDeletePoolTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/pools/{pool_name}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchDeletePoolTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchDeletePoolTagsRequest');
    }

    /**
     * 批量对节点功能上锁
     *
     * 批量对节点功能上锁接口用于批量对指定节点的功能进行上锁操作，被上锁的功能在控制台将无法正常使用。该接口适用于以下场景：当需要临时禁用某些节点的功能以防止误操作、进行系统维护或测试时，用户可通过此接口批量对节点功能进行上锁。使用该接口的前提条件是节点功能已存在且用户具有管理员权限。上锁操作完成后，指定节点的功能将在控制台被禁用，无法进行相关操作。若节点功能不存在、用户无权限操作或请求参数无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchLockPoolNodes($request)
    {
        return $this->batchLockPoolNodesWithHttpInfo($request);
    }

    public function batchLockPoolNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodes/batch-lock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchLockPoolNodesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchLockPoolNodesRequest');
    }

    /**
     * 批量迁移节点
     *
     * 批量迁移节点接口用于在资源池之间批量迁移节点，将节点从一个资源池迁移到另一个资源池。该接口适用于以下场景：当资源池的节点分布不均衡、需要进行集群维护或业务扩展时，用户可通过此接口将指定节点从一个资源池迁移到另一个资源池。使用该接口的前提条件是资源池中至少包含两个节点，且目标资源池具备足够的资源容量（如IP地址等）以接收迁移节点。若资源池只有一个节点、目标集群资源不足、节点状态不支持迁移或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchMigratePoolNodes($request)
    {
        return $this->batchMigratePoolNodesWithHttpInfo($request);
    }

    public function batchMigratePoolNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodes/batch-migrate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchMigratePoolNodesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchMigratePoolNodesRequest');
    }

    /**
     * 批量重启节点
     *
     * 批量重启节点接口用于批量重启指定资源池中的节点。该接口适用于以下场景：当需要对资源池中的节点进行系统更新、配置变更、故障恢复或维护操作时，用户可通过此接口批量重启指定的节点。使用该接口的前提条件是资源池已创建且处于可用状态，节点属于该资源池且处于运行状态，且用户具有重启节点的权限。重启操作完成后，指定的节点将被重新启动，资源池中的其他节点将继续正常运行。若资源池不存在、节点不在资源池中、节点未处于运行状态或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchRebootPoolNodes($request)
    {
        return $this->batchRebootPoolNodesWithHttpInfo($request);
    }

    public function batchRebootPoolNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodes/batch-reboot';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchRebootPoolNodesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchRebootPoolNodesRequest');
    }

    /**
     * 重置节点
     *
     * 重置节点接口用于将指定节点恢复到初始状态，清除节点上的数据和配置。该接口适用于以下场景：当节点出现故障、配置错误、需要重新部署或进行系统恢复时，用户可通过此接口重置节点，使其恢复到出厂或初始状态。使用该接口的前提条件是节点已存在且用户具有管理员权限。重置操作完成后，节点上的所有数据和配置将被清除，节点将被重新启动并恢复到初始状态。若节点不存在、用户无权限操作或节点处于不可重置状态（如正在运行任务），接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchResetPoolNodes($request)
    {
        return $this->batchResetPoolNodesWithHttpInfo($request);
    }

    public function batchResetPoolNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodes/batch-reset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
                ['application/json', 'application/x-www-form-urlencoded']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchResetPoolNodesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchResetPoolNodesRequest');
    }

    /**
     * 节点规格变更
     *
     * 节点规格变更接口用于调整指定节点的规格（如步长），例如将节点从8节点超节点扩容到16节点超节点。该接口适用于以下场景：当需要根据业务需求调整节点的资源容量、优化资源利用率或进行系统升级时，用户可通过此接口变更节点的规格。使用该接口的前提条件是节点已创建且处于可变更状态，目标规格在支持范围内，且用户具有管理员权限。规格变更完成后，节点的资源容量将按新规格调整，相关服务和配置将重新加载以适应新的规格。若节点不存在、节点状态不允许变更、目标规格不支持或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchResizePoolNodes($request)
    {
        return $this->batchResizePoolNodesWithHttpInfo($request);
    }

    public function batchResizePoolNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodes/batch-resize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
                ['application/json', 'application/x-www-form-urlencoded']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchResizePoolNodesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchResizePoolNodesRequest');
    }

    /**
     * 批量解绑应用密钥
     *
     * 本接口用于将已绑定的apikey从指定服务中批量解绑，适用于需要撤销多个apikey对特定服务的访问权限的场景。调用此接口前，确保已获取到需要解绑的多个apikey，并确认这些apikey当前绑定在指定服务上。解绑成功后，这些apikey将不再对指定服务生效，但仍可继续用于其他服务。如果尝试解绑不存在或未绑定到指定服务的apikey，将返回相应的异常信息，提示用户检查apikey的有效性和绑定状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUnbindInferApiKeys($request)
    {
        return $this->batchUnbindInferApiKeysWithHttpInfo($request);
    }

    public function batchUnbindInferApiKeysWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/api-keys/batch-unbind';
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
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
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
                ['application/x-www-form-urlencoded']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchUnbindInferApiKeysResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchUnbindInferApiKeysRequest');
    }

    /**
     * 批量对节点功能解锁
     *
     * 批量对节点功能解锁接口用于批量解除指定节点功能的锁定状态，使被上锁的功能在控制台恢复正常可用状态。该接口适用于以下场景：当需要恢复被锁定的节点功能以正常使用、完成系统维护或测试后，用户可通过此接口批量对节点功能进行解锁。使用该接口的前提条件是节点功能已被上锁且用户具有管理员权限。解锁操作完成后，指定节点的功能将在控制台恢复正常，用户可以正常使用相关功能。若节点功能未被锁定、用户无权限操作或请求参数无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUnlockPoolNodes($request)
    {
        return $this->batchUnlockPoolNodesWithHttpInfo($request);
    }

    public function batchUnlockPoolNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodes/batch-unlock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchUnlockPoolNodesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchUnlockPoolNodesRequest');
    }

    /**
     * 批量更新节点
     *
     * 批量更新节点接口用于同时修改多个节点的配置或属性，支持批量操作时各节点独立执行更新流程。该接口适用于以下场景：当用户需统一升级节点软件版本、批量处理选中节点的资源标签、调整资源分配策略、应用安全补丁或同步配置变更时，可通过此接口批量更新目标节点，确保每个节点的更新过程互不影响。使用该接口的前提条件包括：目标节点已存在且用户具备管理员权限，节点需处于可操作状态（如非锁定或维护中），批量操作时需提供有效的节点列表及更新参数（如配置项、版本号等）作为输入。操作完成后，指定节点将应用新配置并更新状态为可用，原有配置将被覆盖。若节点不存在、用户权限不足、节点状态异常（如正在维护）、更新参数不合规或输入参数缺失，接口将返回对应错误信息（如404未找到节点、403权限拒绝、400参数校验失败等）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUpdatePoolNodes($request)
    {
        return $this->batchUpdatePoolNodesWithHttpInfo($request);
    }

    public function batchUpdatePoolNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodes/batch-update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
                ['application/json', 'application/x-www-form-urlencoded']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchUpdatePoolNodesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchUpdatePoolNodesRequest');
    }

    /**
     * 绑定应用密钥
     *
     * 本接口用于将生成的apikey与指定服务进行绑定，适用于应用程序需要调用特定服务的场景。调用此接口前，确保已成功创建服务实例，并获取到有效的apikey。绑定成功后，apikey将作为服务调用时的身份验证凭证，确保仅授权用户能够访问该服务。如果尝试绑定已失效的apikey，将返回相应的异常信息，提示用户检查apikey的有效性和绑定状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function bindInferApiKey($request)
    {
        return $this->bindInferApiKeyWithHttpInfo($request);
    }

    public function bindInferApiKeyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/api-keys/{key_id}/bind';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['keyId'] !== null) {
            $pathParams['key_id'] = $localVarParams['keyId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BindInferApiKeyResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BindInferApiKeyRequest');
    }

    /**
     * 中断服务部署
     *
     * 中断服务部署接口用于中断处于“升级中”或“部署中”状态的部署，使其快速停止。该接口适用于以下场景：当部署出现严重故障需要立即修复、资源需要快速释放以部署更高优先级的部署，或在测试环境中需要快速迭代时，用户可通过此接口中断指定部署。使用该接口的前提条件是部署当前状态为“升级中”或“部署中”，且用户具有中断部署的权限。若部署为“部署中”状态，执行中断操作，部署状态将变成“停止”，相关资源将被释放，且终端操作将被记录；若部署为“升级中”状态，执行中断操作，部署状态将变成“运行中”。若部署当前状态不是“升级中”或“部署中”，若用户无权限操作，接口将返回相应的错误信息。若部署ID无效、版本号不存在或用户无权限，则返回400 Bad Request或403 Forbidden；
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelInferDeployment($request)
    {
        return $this->cancelInferDeploymentWithHttpInfo($request);
    }

    public function cancelInferDeploymentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/interrupt';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CancelInferDeploymentResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CancelInferDeploymentRequest');
    }

    /**
     * 更新算法
     *
     * 更新算法。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeAlgorithm($request)
    {
        return $this->changeAlgorithmWithHttpInfo($request);
    }

    public function changeAlgorithmWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/algorithms/{algorithm_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['algorithmId'] !== null) {
            $pathParams['algorithm_id'] = $localVarParams['algorithmId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ChangeAlgorithmResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ChangeAlgorithmRequest');
    }

    /**
     * 更新训练实验信息
     *
     * 通过实验ID更新训练实验信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeTrainingExperiment($request)
    {
        return $this->changeTrainingExperimentWithHttpInfo($request);
    }

    public function changeTrainingExperimentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-experiments/{experiment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['experimentId'] !== null) {
            $pathParams['experiment_id'] = $localVarParams['experimentId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ChangeTrainingExperimentResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ChangeTrainingExperimentRequest');
    }

    /**
     * 更新训练作业描述
     *
     * 更新训练作业描述。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeTrainingJobDescription($request)
    {
        return $this->changeTrainingJobDescriptionWithHttpInfo($request);
    }

    public function changeTrainingJobDescriptionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ChangeTrainingJobDescriptionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ChangeTrainingJobDescriptionRequest');
    }

    /**
     * 校验训练实验名称
     *
     * 校验训练实验名称接口用于新增训练实验前校验训练实验名称是否重复。
     * 该接口适用于以下场景：当用户需要创建新的训练实验时，可以通过此接口校验定义的实验名称是否已存在。使用该接口的前提条件是用户具有创建实验的权限。查询操作完成后，将返回实验名称是否重复的结果。若用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkTrainingExperiment($request)
    {
        return $this->checkTrainingExperimentWithHttpInfo($request);
    }

    public function checkTrainingExperimentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-experiment-names';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['experimentName'] !== null) {
            $queryParams['experiment_name'] = $localVarParams['experimentName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CheckTrainingExperimentResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CheckTrainingExperimentRequest');
    }

    /**
     * 通过标签查询资源数量
     *
     * 该接口适用于需要统计和获取符合特定标签或资源名称条件的资源数量的场景，例如在资源管理和监控中，用户可以通过指定标签或资源名称进行精确或模糊查询来统计资源数量。通过调用此接口，用户可以基于多个标签或资源名称进行查询，若不传标签则返回所有资源的总数。用户必须具有足够的权限，且目标资源需存在。查询成功后，返回符合条件的资源总数；若失败，返回具体的错误信息。常见异常包括权限验证错误、资源不存在错误和参数验证错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function countInferServicesByTags($request)
    {
        return $this->countInferServicesByTagsWithHttpInfo($request);
    }

    public function countInferServicesByTagsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/modelarts-service-v2/resource-instances/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CountInferServicesByTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CountInferServicesByTagsRequest');
    }

    /**
     * 创建算法
     *
     * 创建一个算法。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAlgorithm($request)
    {
        return $this->createAlgorithmWithHttpInfo($request);
    }

    public function createAlgorithmWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/algorithms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateAlgorithmResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateAlgorithmRequest');
    }

    /**
     * 创建发布算法资产
     *
     * 创建发布算法资产接口用于在算法管理中创建并发布新的算法资产。
     * 该接口适用于以下场景：当用户开发完成新的算法并希望将其发布为可复用的算法资产时，可以通过此接口创建并发布算法资产。使用该接口的前提条件是用户已登录且具有创建和发布算法资产的权限。创建发布操作完成后，系统将生成新的算法资产，并将其添加到算法资产列表中，用户可以通过算法ID进行管理和调用。若用户无权限操作、算法资产信息不完整或已存在相同名称的算法资产，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAlgorithmVersionToGallery($request)
    {
        return $this->createAlgorithmVersionToGalleryWithHttpInfo($request);
    }

    public function createAlgorithmVersionToGalleryWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/gallery-algorithm-publication';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateAlgorithmVersionToGalleryResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateAlgorithmVersionToGalleryRequest');
    }

    /**
     * 配置授权
     *
     * 配置授权接口用于配置ModelArts的授权。该接口适用于以下场景：当需要为IAM子用户设置访问ModelArts的权限时，管理员可通过此接口配置授权。使用该接口的前提条件是管理员具备IAM系统的Security Administrator权限，并且需要为子用户设置访问密钥。配置完成后，子用户将被授予访问ModelArts资源的权限，从而能够正常使用训练管理、开发环境、数据管理、在线服务等功能。若管理员无权限操作或子用户不存在，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAuthorization($request)
    {
        return $this->createAuthorizationWithHttpInfo($request);
    }

    public function createAuthorizationWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/authorizations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateAuthorizationResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateAuthorizationRequest');
    }

    /**
     * 创建应用密钥
     *
     * 本接口用于在系统中创建一个新的API_KEY，适用于需要为用户或应用程序生成访问凭证的场景。调用此接口前，确保已具备相应的创建权限，并提供必要的参数，如用户ID或应用程序ID。创建成功后，系统将生成一个唯一的API_KEY，并返回该API_KEY的详细信息，包括API_KEY值、创建时间等。如果提供的参数无效或系统中已存在相同的API_KEY，将返回相应的异常信息，提示用户检查输入数据的有效性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInferApiKey($request)
    {
        return $this->createInferApiKeyWithHttpInfo($request);
    }

    public function createInferApiKeyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/api-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferApiKeyResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferApiKeyRequest');
    }

    /**
     * 添加部署
     *
     * 将模型部署为在线服务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInferDeployment($request)
    {
        return $this->createInferDeploymentWithHttpInfo($request);
    }

    public function createInferDeploymentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferDeploymentResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferDeploymentRequest');
    }

    /**
     * 创建内网接入
     *
     * 本接口用于在指定Region中创建内网接入点，适用于需要为应用程序或服务配置内网连接的场景。调用此接口前，确保已具备相应的创建权限，并提供必要的参数，如Region ID、内网接入点名称和网络配置信息。创建成功后，系统将生成一个内网接入点，并返回该接入点的详细信息，包括接入点ID、创建时间、状态等。如果提供的参数无效或内网接入配置冲突，将返回相应的异常信息，提示用户检查输入数据的有效性和配置冲突情况。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInferIntranetConnection($request)
    {
        return $this->createInferIntranetConnectionWithHttpInfo($request);
    }

    public function createInferIntranetConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/intranet-connection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferIntranetConnectionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferIntranetConnectionRequest');
    }

    /**
     * 创建服务
     *
     * 将模型部署为在线服务，适用于用户在开发或运维过程中需要将训练好的模型部署为在线服务，以便通过API或HTTP接口提供预测或处理能力的场景。调用此接口前，用户必须具有创建服务的权限，并提供合法的模型镜像路径和完整的服务配置信息（如服务名称、模型镜像路径、资源配置、升级配置等）。调用成功后，系统将成功创建并部署服务，服务状态变为“部署中”，并生成服务的唯一ID返回给用户。服务的详细信息（如状态、创建时间、更新时间等）也会记录在系统中。如果用户没有创建服务的权限，或提供的模型镜像路径不合法，或服务配置信息不完整，调用将返回相应的错误信息。如果系统在部署过程中遇到资源不足或其他内部错误，也将返回错误信息并记录日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInferService($request)
    {
        return $this->createInferServiceWithHttpInfo($request);
    }

    public function createInferServiceWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['xAuthTokenProvider'] !== null) {
            $headerParams[$arr['xAuthTokenProvider']] = $localVarParams['xAuthTokenProvider'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferServiceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferServiceRequest');
    }

    /**
     * 添加标签
     *
     * 该接口适用于需要为资源（如模型、数据集、服务等）添加元数据标签的场景，例如在资源管理或分类中，用户可以通过添加标签来标注资源的用途、状态或其他属性。通过调用此接口，用户可以批量添加标签，如果标签key已存在，则更新其value。用户必须具有足够的权限，且目标资源需存在。添加成功后，资源将包含新的标签信息；若失败，返回具体的错误信息。常见异常包括权限验证错误、资源不存在错误和参数验证错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInferServiceTag($request)
    {
        return $this->createInferServiceTagWithHttpInfo($request);
    }

    public function createInferServiceTagWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/modelarts-service-v2/{resource_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferServiceTagResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferServiceTagRequest');
    }

    /**
     * 创建ModelArts委托
     *
     * 创建ModelArts委托接口用于创建包含OBS、SWR、IEF等依赖服务的ModelArts委托。该接口适用于以下场景：当需要配置ModelArts访问OBS、SWR、IEF等服务的权限时，用户可通过此接口创建委托。使用该接口的前提条件是用户具备创建委托的权限，并且需要在IAM系统中具备相应的权限。创建完成后，ModelArts将被授权访问OBS、SWR、IEF等服务，从而能够正常执行数据存储、镜像拉取、模型部署等功能。若用户无权限创建委托或依赖服务未配置，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createModelArtsAgency($request)
    {
        return $this->createModelArtsAgencyWithHttpInfo($request);
    }

    public function createModelArtsAgencyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/agency';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateModelArtsAgencyResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateModelArtsAgencyRequest');
    }

    /**
     * 创建网络资源
     *
     * 创建网络资源接口用于在系统中创建新的网络资源。该接口适用于以下场景：当需要为业务扩展、资源规划或网络架构调整时，用户可通过此接口创建新的网络资源，如虚拟网络、子网或路由等。使用该接口的前提条件是用户具有管理员权限，并且系统中具备足够的资源支持新网络资源的创建。创建操作完成后，新的网络资源将被成功添加到系统中，并可用于后续的业务配置。若用户无权限、资源不足或输入参数有误，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNetwork($request)
    {
        return $this->createNetworkWithHttpInfo($request);
    }

    public function createNetworkWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/networks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateNetworkResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateNetworkRequest');
    }

    /**
     * 创建节点池
     *
     * 创建节点池接口用于创建新的节点池。该接口适用于以下场景：当需要扩展计算资源、优化资源分配或部署新的服务时，用户可通过此接口创建指定配置的节点池。使用该接口的前提条件是用户具有管理员权限且节点池的配置参数（如节点数量、规格、网络配置等）已正确设置。创建操作完成后，节点池将被成功创建并处于可用状态，相关节点信息将被记录。若用户无权限操作、配置参数错误或系统资源不足，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNodePool($request)
    {
        return $this->createNodePoolWithHttpInfo($request);
    }

    public function createNodePoolWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodepools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateNodePoolResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateNodePoolRequest');
    }

    /**
     * 创建资源池的订单id
     *
     * 创建资源池订单ID接口用于生成资源池申请的订单标识。该接口适用于以下场景：当用户需要申请新资源池时（如业务扩展、资源不足或临时资源需求），可通过此接口提交按需转包周期订单的创建请求。使用该接口的前提条件是用户需具备资源申请权限，提交的资源池配置参数（如资源类型、容量、周期等）需符合系统校验规则，且当前仅支持按需转包周期订单类型。订单创建成功后，系统将生成唯一订单ID并触发后续资源分配流程，同时记录操作日志。若用户权限不足、配置参数缺失/冲突（如容量超出配额）、订单类型不支持或系统资源不足，接口将返回对应错误码及提示信息，且不会生成订单ID或占用资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOrderId($request)
    {
        return $this->createOrderIdWithHttpInfo($request);
    }

    public function createOrderIdWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{name}/orderid';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $queryParams['actionType'] = $localVarParams['actionType'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspaceId'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['name'] !== null) {
            $pathParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateOrderIdResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateOrderIdRequest');
    }

    /**
     * 创建资源池
     *
     * 创建资源池接口用于在系统中创建新的资源池。该接口适用于以下场景：当需要为新业务分配资源、优化资源管理或进行资源隔离时，用户可通过此接口创建新的资源池，用于管理计算、存储、网络等资源。使用该接口的前提条件是用户具有管理员权限，并且系统中具备足够的资源支持新资源池的创建。创建操作完成后，新的资源池将被成功添加到系统中，并处于可用状态，可支持后续的资源分配和管理。若用户无权限、系统资源不足或输入参数有误，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPool($request)
    {
        return $this->createPoolWithHttpInfo($request);
    }

    public function createPoolWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xModelArtsUserId'] !== null) {
            $headerParams[$arr['xModelArtsUserId']] = $localVarParams['xModelArtsUserId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreatePoolResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreatePoolRequest');
    }

    /**
     * 创建插件
     *
     * 创建插件实例接口用于在系统中创建一个新的插件实例。该接口适用于以下场景：当需要扩展系统功能、部署新的插件、更新现有插件配置或测试插件时，用户可通过此接口创建指定插件的实例。使用该接口的前提条件是插件已存在且用户具有管理员权限或插件管理权限。创建操作完成后，插件实例将被成功创建并处于可用状态，相关配置信息将被记录。若插件不存在、用户无权限操作、配置参数错误或系统资源不足，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPoolPlugin($request)
    {
        return $this->createPoolPluginWithHttpInfo($request);
    }

    public function createPoolPluginWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/plugins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreatePoolPluginResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreatePoolPluginRequest');
    }

    /**
     * 创建训练作业镜像保存任务
     *
     * 创建训练作业镜像保存任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSaveImageJob($request)
    {
        return $this->createSaveImageJobWithHttpInfo($request);
    }

    public function createSaveImageJobWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/tasks/{task_id}/save-image-job';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateSaveImageJobResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateSaveImageJobRequest');
    }

    /**
     * 创建训练作业标签
     *
     * 创建训练作业标签，支持批量添加，当添加的标签key已存在，则覆盖该标签的value。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrainJobTags($request)
    {
        return $this->createTrainJobTagsWithHttpInfo($request);
    }

    public function createTrainJobTagsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/modelarts-training-job/{training_job_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateTrainJobTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateTrainJobTagsRequest');
    }

    /**
     * 创建训练实验
     *
     * 创建训练实验接口用于在ModelArts平台上创建新的实验分类。
     * 该接口适用于以下场景：当用户需要将训练作业放入实验中分类，有序地进行管理，可以通过此接口创建训练实验，常用于多任务的版本管理等场景。使用该接口的前提条件是用户已登录ModelArts平台并具有创建训练实验的权限。创建操作完成后，系统将返回训练实验的详细信息，包括实验ID、当前实验下的训练作业总个数等。若用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrainingExperiment($request)
    {
        return $this->createTrainingExperimentWithHttpInfo($request);
    }

    public function createTrainingExperimentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-experiments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateTrainingExperimentResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateTrainingExperimentRequest');
    }

    /**
     * 创建训练作业
     *
     * 创建训练作业。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTrainingJob($request)
    {
        return $this->createTrainingJobWithHttpInfo($request);
    }

    public function createTrainingJobWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateTrainingJobResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateTrainingJobRequest');
    }

    /**
     * 创建工作空间
     *
     * 创建工作空间（\&quot;default\&quot;为系统预留的默认工作空间名称，不能使用）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkspace($request)
    {
        return $this->createWorkspaceWithHttpInfo($request);
    }

    public function createWorkspaceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkspaceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkspaceRequest');
    }

    /**
     * 删除算法
     *
     * 删除算法。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAlgorithm($request)
    {
        return $this->deleteAlgorithmWithHttpInfo($request);
    }

    public function deleteAlgorithmWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/algorithms/{algorithm_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['algorithmId'] !== null) {
            $pathParams['algorithm_id'] = $localVarParams['algorithmId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteAlgorithmResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteAlgorithmRequest');
    }

    /**
     * 删除授权
     *
     * 删除授权接口用于删除指定用户的授权或删除全量用户的授权。该接口适用于以下场景：当需要撤销特定用户的访问权限或在系统维护时清理所有用户的授权时，管理员可通过此接口删除指定用户的授权或全量用户的授权。使用该接口的前提条件是管理员具备删除授权的权限，并且需要指定要删除授权的用户或选择删除全量用户的授权。删除操作完成后，指定用户的授权将被移除，或所有用户的授权将被清空，用户将无法再访问相关功能。若用户不存在、管理员无权限操作或删除全量授权时系统检测到无管理员权限，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAuthorizations($request)
    {
        return $this->deleteAuthorizationsWithHttpInfo($request);
    }

    public function deleteAuthorizationsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/authorizations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userId'] !== null) {
            $queryParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteAuthorizationsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteAuthorizationsRequest');
    }

    /**
     * 删除镜像
     *
     * 删除镜像接口用于删除镜像对象，对于个人私有镜像可以通过参数一并删除SWR镜像内容。该接口适用于以下场景：当镜像不再需要、配置错误或需要清理资源时，用户可通过此接口删除指定的镜像对象。使用该接口的前提条件是镜像已存在且用户具有删除权限。删除操作完成后，镜像对象将被永久移除，相关资源和配置也将被清理。若镜像不存在、用户无权限操作或镜像正在被使用，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteImage($request)
    {
        return $this->deleteImageWithHttpInfo($request);
    }

    public function deleteImageWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/images/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteImageResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteImageRequest');
    }

    /**
     * 删除镜像组
     *
     * 删除镜像组接口用于删除镜像组内所有的版本对象，对于个人私有镜像可以通过参数一并删除SWR镜像内容。该接口适用于以下场景：当镜像不再需要、配置错误或需要清理资源时，用户可通过此接口删除指定的镜像组对象内所有版本。使用该接口的前提条件是镜像组已存在且用户具有删除权限。删除操作完成后，镜像组内所有版本对象将被永久移除，相关资源和配置也将被清理。若镜像组不存在、用户无权限操作或镜像正在被使用，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteImageGroup($request)
    {
        return $this->deleteImageGroupWithHttpInfo($request);
    }

    public function deleteImageGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/images/group/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteImageGroupResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteImageGroupRequest');
    }

    /**
     * 删除应用密钥
     *
     * 本接口用于删除指定的apikey，适用于管理员需要撤销对某个应用程序或用户的访问权限的场景。调用此接口前，确保已获取到需要删除的apikey，并确认apikey未在其他服务中使用。删除成功后，该apikey将无法再用于访问任何相关服务。如果尝试删除不存在或已删除的apikey，将返回相应的异常信息，提示用户检查apikey的有效性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInferApiKey($request)
    {
        return $this->deleteInferApiKeyWithHttpInfo($request);
    }

    public function deleteInferApiKeyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/api-keys/{key_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['keyId'] !== null) {
            $pathParams['key_id'] = $localVarParams['keyId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferApiKeyResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferApiKeyRequest');
    }

    /**
     * 删除服务部署
     *
     * 该接口适用于删除服务的某个部署。若服务ID、部署ID无效、版本号不存在或用户无权限，则返回400 Bad Request或403 Forbidden
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInferDeployment($request)
    {
        return $this->deleteInferDeploymentWithHttpInfo($request);
    }

    public function deleteInferDeploymentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferDeploymentResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferDeploymentRequest');
    }

    /**
     * 删除服务部署的实例
     *
     * 本接口用于删除指定的单个部署的实例，适用于需要清理或释放不再使用的部署实例资源的场景。调用此接口前，确保已具备相应的删除权限，并提供有效的服务实例ID、部署ID。删除成功后，指定的服务部署实例将被彻底移除，不再对任何请求生效。如果提供的服务实例ID、部署ID无效、服务实例已删除或权限不足，将返回相应的异常信息，提示用户检查输入数据的有效性和权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInferDeploymentInstance($request)
    {
        return $this->deleteInferDeploymentInstanceWithHttpInfo($request);
    }

    public function deleteInferDeploymentInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{id}/deployments/{deployment_name}/instances/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['operation'] !== null) {
            $queryParams['operation'] = $localVarParams['operation'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['deploymentName'] !== null) {
            $pathParams['deployment_name'] = $localVarParams['deploymentName'];
        }
        if ($localVarParams['name'] !== null) {
            $pathParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferDeploymentInstanceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferDeploymentInstanceRequest');
    }

    /**
     * 删除Pod
     *
     * 本接口用于删除指定的单个Pod，适用于需要清理或释放不再使用的Pod资源的场景。调用此接口前，确保已具备相应的删除权限，并提供有效的Pod ID。删除成功后，指定的Pod将被彻底移除，不再对任何服务请求生效。如果提供的Pod ID无效、Pod已删除或权限不足，将返回相应的异常信息，提示用户检查输入数据的有效性和权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInferDeploymentPod($request)
    {
        return $this->deleteInferDeploymentPodWithHttpInfo($request);
    }

    public function deleteInferDeploymentPodWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{id}/deployments/{deployment_name}/instances/{instance_name}/pods/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['deploymentName'] !== null) {
            $pathParams['deployment_name'] = $localVarParams['deploymentName'];
        }
        if ($localVarParams['instanceName'] !== null) {
            $pathParams['instance_name'] = $localVarParams['instanceName'];
        }
        if ($localVarParams['name'] !== null) {
            $pathParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferDeploymentPodResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferDeploymentPodRequest');
    }

    /**
     * 删除在线服务部署版本
     *
     * 此接口用于删除指定服务部署的某个在线版本，适用于需要清理不再使用的版本或优化资源管理的场景。
     * 请求需包含有效的服务ID、部署ID及版本号。用户必须具有对目标服务部署的管理权限，并且该版本当前未处于活跃状态。
     * 删除成功后，指定版本将从在线服务部署中移除，相关资源将被释放。
     * 若服务ID、部署ID无效、版本号不存在或用户无权限，则返回400 Bad Request或403 Forbidden；若版本处于活跃状态或有其他依赖，则返回400 Bad Request。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInferDeploymentVersion($request)
    {
        return $this->deleteInferDeploymentVersionWithHttpInfo($request);
    }

    public function deleteInferDeploymentVersionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/versions/{version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['version'] !== null) {
            $pathParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferDeploymentVersionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferDeploymentVersionRequest');
    }

    /**
     * 删除资源标签
     *
     * 该接口适用于需要从资源（如模型、数据集、服务等）中移除特定标签的场景，例如在资源管理或分类中，用户可以通过删除标签来调整或清理资源的元数据。通过调用此接口，用户可以批量删除指定的标签。用户必须具有足够的权限，且目标资源需存在。删除成功后，资源将不再包含指定的标签信息；若失败，返回具体的错误信息。常见异常包括权限验证错误、资源不存在错误和参数验证错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInferServiceTag($request)
    {
        return $this->deleteInferServiceTagWithHttpInfo($request);
    }

    public function deleteInferServiceTagWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/modelarts-service-v2/{resource_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferServiceTagResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferServiceTagRequest');
    }

    /**
     * 删除网络资源
     *
     * 删除网络资源接口用于移除指定的网络资源。该接口适用于以下场景：当网络资源不再需要、配置错误或需要清理资源时，用户可通过此接口删除指定的网络资源。使用该接口的前提条件是网络资源已存在且用户具有管理员权限。删除操作完成后，指定的网络资源将被永久移除，相关配置和关联关系也将被清理。若指定的网络资源不存在、用户无权限操作或资源被其他资源依赖，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteNetwork($request)
    {
        return $this->deleteNetworkWithHttpInfo($request);
    }

    public function deleteNetworkWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/networks/{network_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['networkName'] !== null) {
            $pathParams['network_name'] = $localVarParams['networkName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteNetworkResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteNetworkRequest');
    }

    /**
     * 删除节点池
     *
     * 删除节点池接口用于移除已创建的节点池，包周期资源池不支持。该接口适用于以下场景：当节点池完成任务、配置错误或需要清理资源时，用户可通过此接口删除指定的节点池。使用该接口的前提条件是节点池已存在且用户具有管理员权限。删除操作完成后，节点池将被永久移除，相关资源和配置也将被清理。若节点池不存在、用户无权限操作或节点池处于不可删除状态（如包周期资源池或节点池正在使用中），接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteNodePool($request)
    {
        return $this->deleteNodePoolWithHttpInfo($request);
    }

    public function deleteNodePoolWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodepools/{nodepool_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
        }
        if ($localVarParams['nodepoolName'] !== null) {
            $pathParams['nodepool_name'] = $localVarParams['nodepoolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteNodePoolResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteNodePoolRequest');
    }

    /**
     * 删除资源池
     *
     * 删除资源池接口用于移除指定的资源池。该接口适用于以下场景：当资源池不再需要、配置错误或需要清理资源时，用户可通过此接口删除指定的资源池。使用该接口的前提条件是资源池已存在且用户具有管理员权限。删除操作完成后，指定的资源池将被永久移除，相关资源和配置也将被清理。若资源池不存在、用户无权限操作或资源池被其他资源依赖，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePool($request)
    {
        return $this->deletePoolWithHttpInfo($request);
    }

    public function deletePoolWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xModelArtsUserId'] !== null) {
            $headerParams[$arr['xModelArtsUserId']] = $localVarParams['xModelArtsUserId'];
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeletePoolResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeletePoolRequest');
    }

    /**
     * 删除训练作业标签
     *
     * 删除训练作业标签，支持批量删除。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTrainJobTags($request)
    {
        return $this->deleteTrainJobTagsWithHttpInfo($request);
    }

    public function deleteTrainJobTagsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/modelarts-training-job/{training_job_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteTrainJobTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteTrainJobTagsRequest');
    }

    /**
     * 删除训练实验
     *
     * 删除训练实验接口用于移除已创建的训练实验。
     * 该接口适用于以下场景：当训练实验完成、配置错误或需要清理资源时，用户可以通过此接口删除指定的训练实验。使用该接口的前提条件是训练实验已存在且用户具有删除该实验的权限。删除操作完成后，训练实验将被永久移除，相关的配置和资源也将被清理。若训练实验不存在或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTrainingExperiment($request)
    {
        return $this->deleteTrainingExperimentWithHttpInfo($request);
    }

    public function deleteTrainingExperimentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-experiments/{experiment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['experimentId'] !== null) {
            $pathParams['experiment_id'] = $localVarParams['experimentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteTrainingExperimentResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteTrainingExperimentRequest');
    }

    /**
     * 删除训练作业
     *
     * 删除训练作业。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTrainingJob($request)
    {
        return $this->deleteTrainingJobWithHttpInfo($request);
    }

    public function deleteTrainingJobWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteTrainingJobResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteTrainingJobRequest');
    }

    /**
     * 删除工作空间
     *
     * 删除工作空间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWorkspace($request)
    {
        return $this->deleteWorkspaceWithHttpInfo($request);
    }

    public function deleteWorkspaceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteWorkspaceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteWorkspaceRequest');
    }

    /**
     * 动态卸载Notebook存储
     *
     * 动态卸载Notebook存储接口用于从运行中的Notebook实例中卸载已挂载的动态存储实例。
     * 
     * 适用场景：用户需要清理或重新组织Notebook实例的挂载资源时，可通过此接口卸载指定的存储实例。使用该接口的前提条件是用户已登录系统并具有访问目标Notebook实例的权限，同时Notebook实例必须处于运行状态且存储实例处于MOUNTED / UNMOUNT_FAILED / MOUNT_FAILED状态。调用该接口后，系统将卸载指定的存储实例，Notebook容器将无法再操作存储中的文件或对象，但存储中的文件或对象保持不变。若用户无权限访问指定实例或Notebook实例未运行，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detachDynamicStorage($request)
    {
        return $this->detachDynamicStorageWithHttpInfo($request);
    }

    public function detachDynamicStorageWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{instance_id}/storage/{storage_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['storageId'] !== null) {
            $pathParams['storage_id'] = $localVarParams['storageId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DetachDynamicStorageResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DetachDynamicStorageRequest');
    }

    /**
     * 查看授权列表
     *
     * 查看授权列表接口用于查看授权信息。该接口适用于以下场景：当用户需要了解当前的授权情况、审核权限分配或管理权限时，可通过此接口查看授权列表。使用该接口的前提条件是用户具备查看授权的权限。查看操作完成后，将返回授权列表，包括被授权的资源、授权类型以及授权内容等信息。若用户无权限查看或授权列表不存在，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getAuthorizations($request)
    {
        return $this->getAuthorizationsWithHttpInfo($request);
    }

    public function getAuthorizationsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/authorizations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetAuthorizationsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetAuthorizationsRequest');
    }

    /**
     * 查询超节点Operation详情
     *
     * 查询Operation详情接口用于获取指定Operation的详细信息。该接口适用于以下场景：当用户需要了解某个Operation的具体执行情况和状态，以便进行故障排查或操作审计时，可以通过此接口获取相关信息。使用该接口的前提条件是用户已登录并具有查询Operation详情的权限，且指定的Operation已存在。查询操作完成后，接口将返回指定Operation的详细信息，包括Operation ID、操作类型、执行状态、开始时间、结束时间、操作结果等。若用户无权限操作、指定的Operation不存在或Operation ID无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getHyperinstanceOperation($request)
    {
        return $this->getHyperinstanceOperationWithHttpInfo($request);
    }

    public function getHyperinstanceOperationWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/{id}/operation/{operation_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['operationId'] !== null) {
            $pathParams['operation_id'] = $localVarParams['operationId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetHyperinstanceOperationResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetHyperinstanceOperationRequest');
    }

    /**
     * 查询算法列表
     *
     * 查询算法列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAlgorithms($request)
    {
        return $this->listAlgorithmsWithHttpInfo($request);
    }

    public function listAlgorithmsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/algorithms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['groupBy'] !== null) {
            $queryParams['group_by'] = $localVarParams['groupBy'];
        }
        if ($localVarParams['searches'] !== null) {
            $queryParams['searches'] = $localVarParams['searches'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListAlgorithmsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListAlgorithmsRequest');
    }

    /**
     * 获取动态挂载存储信息列表
     *
     * 此接口用于获取指定Notebook实例下挂载的动态存储信息列表。
     * 适用场景：用户需要获取指定Notebook实例下挂载的动态存储的存储id、存储类型、挂载路径、挂载状态等信息的场景。若挂载失败，会返回相应错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDynamicStorages($request)
    {
        return $this->listDynamicStoragesWithHttpInfo($request);
    }

    public function listDynamicStoragesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{instance_id}/storage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDynamicStoragesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDynamicStoragesRequest');
    }

    /**
     * 获取事件类型列表
     *
     * 获取事件类型列表接口用于获取训练管理中支持的事件类型列表。
     * 该接口适用于以下场景：当用户需要了解训练管理中支持的事件类型，以便在创建或管理训练任务时进行相关配置时，可以通过此接口获取事件类型列表。使用该接口的前提条件是用户已登录且具有访问训练管理的权限。获取操作完成后，响应消息体中将包含所有支持的事件类型及其描述。若用户无权限访问或系统中无事件类型信息，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEventCategories($request)
    {
        return $this->listEventCategoriesWithHttpInfo($request);
    }

    public function listEventCategoriesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-event-categories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['flavorType'] !== null) {
            $queryParams['flavor_type'] = $localVarParams['flavorType'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListEventCategoriesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListEventCategoriesRequest');
    }

    /**
     * 查询事件列表
     *
     * 查询事件列表接口用于获取系统中记录的事件信息。该接口适用于以下场景：当用户需要监控系统状态、排查问题或进行审计时，可通过此接口查询系统中发生的事件记录。使用该接口的前提条件是用户具有相应的权限，并且系统中已存在事件记录。查询操作完成后，接口将返回事件列表，包含事件ID、类型、时间、描述等信息。若用户无权限、事件记录不存在或查询参数有误，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEvents($request)
    {
        return $this->listEventsWithHttpInfo($request);
    }

    public function listEventsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resource'] !== null) {
            $queryParams['resource'] = $localVarParams['resource'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['continue'] !== null) {
            $queryParams['continue'] = $localVarParams['continue'];
        }
        if ($localVarParams['since'] !== null) {
            $queryParams['since'] = $localVarParams['since'];
        }
        if ($localVarParams['until'] !== null) {
            $queryParams['until'] = $localVarParams['until'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListEventsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListEventsRequest');
    }

    /**
     * 查询支持的镜像列表
     *
     * 查询支持的镜像列表接口用于根据指定条件分页查询满足条件的所有镜像。该接口适用于以下场景：当用户需要查找特定镜像、管理镜像仓库或选择合适的镜像版本进行部署时，可通过此接口获取符合条件的镜像列表。使用该接口的前提条件是镜像仓库已存在且用户具有访问权限。查询操作完成后，将返回满足条件的镜像列表，包括镜像ID、名称、版本、类型、状态、大小和创建时间等详细信息。若镜像仓库不存在、用户无权限访问或查询条件有误，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImage($request)
    {
        return $this->listImageWithHttpInfo($request);
    }

    public function listImageWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['nameFuzzyMatch'] !== null) {
            $queryParams['name_fuzzy_match'] = $localVarParams['nameFuzzyMatch'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['serviceType'] !== null) {
            $queryParams['service_type'] = $localVarParams['serviceType'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['showName'] !== null) {
            $queryParams['show_name'] = $localVarParams['showName'];
        }
        if ($localVarParams['showTag'] !== null) {
            $queryParams['show_tag'] = $localVarParams['showTag'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListImageResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListImageRequest');
    }

    /**
     * 查询用户镜像列表
     *
     * 查询用户镜像列表接口用于查询用户镜像信息概览，以镜像名称作为聚合的信息。该接口适用于以下场景：当用户需要管理多个镜像或了解各镜像的基本信息时，可通过此接口获取镜像列表及其概览信息。使用该接口的前提条件是用户具备镜像管理权限，并且镜像已存在。查询操作完成后，将返回用户所有镜像的列表，包括镜像名称、版本、状态等信息。若镜像不存在或用户无权限访问，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImageGroup($request)
    {
        return $this->listImageGroupWithHttpInfo($request);
    }

    public function listImageGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/images/group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['nameFuzzyMatch'] !== null) {
            $queryParams['name_fuzzy_match'] = $localVarParams['nameFuzzyMatch'];
        }
        if ($localVarParams['namespace'] !== null) {
            $queryParams['namespace'] = $localVarParams['namespace'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['swrInstanceId'] !== null) {
            $queryParams['swr_instance_id'] = $localVarParams['swrInstanceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListImageGroupResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListImageGroupRequest');
    }

    /**
     * 查询应用密钥
     *
     * 本接口用于查询当前系统中的apikey列表，适用于管理员或用户需要查看和管理apikey的场景。调用此接口前，确保已具备相应的查询权限。返回的列表将包含每个apikey的基本信息，如apikey值、创建时间、绑定的服务等。如果当前系统中没有apikey，将返回空列表或相应的异常信息，提示用户检查查询条件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferApiKeys($request)
    {
        return $this->listInferApiKeysWithHttpInfo($request);
    }

    public function listInferApiKeysWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/api-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scope'] !== null) {
            $queryParams['scope'] = $localVarParams['scope'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $queryParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['serviceName'] !== null) {
            $queryParams['service_name'] = $localVarParams['serviceName'];
        }
        if ($localVarParams['keyId'] !== null) {
            $queryParams['key_id'] = $localVarParams['keyId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['withUserScope'] !== null) {
            $queryParams['with_user_scope'] = $localVarParams['withUserScope'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferApiKeysResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferApiKeysRequest');
    }

    /**
     * 查询支持可切换规格列表
     *
     * 该接口允许用户查询当前资源实例支持的可切换规格列表，适用于需要调整实例资源配置的场景。使用该接口前，用户需确保已登录并拥有查询权限。执行成功后，用户将获得一个包含各种可切换规格的详细列表，包括规格ID、名称、资源配额等信息，可用于后续的实例规格变更操作。如果用户没有相应的查询权限或资源实例ID无效，接口将返回错误信息，如401 Unauthorized或404 Not Found。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferClusterFlavors($request)
    {
        return $this->listInferClusterFlavorsWithHttpInfo($request);
    }

    public function listInferClusterFlavorsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['flavorType'] !== null) {
            $queryParams['flavor_type'] = $localVarParams['flavorType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferClusterFlavorsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferClusterFlavorsRequest');
    }

    /**
     * 查询服务部署实例列表
     *
     * 本接口用于查询当前[租户](tag:hws,hws_hk,fcs,fcs_super)[资源空间](tag:hcs,hcs_sm)的服务部署实例列表，并支持根据服务部署实例的状态进行筛选，包括运行中和已删除状态，同时支持分页和关键词筛选。适用于需要管理和监控服务实例状态的场景。调用此接口前，确保已具备相应的查询权限，并提供可选的筛选条件和分页参数。返回的列表将包含每个服务部署实例的基本信息，如部署名字、最新更新时间、状态等。如果当前租户没有符合条件的服务实例或提供的参数无效，将返回空列表或相应的异常信息，提示用户检查输入数据的有效性和权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferDeploymentInstances($request)
    {
        return $this->listInferDeploymentInstancesWithHttpInfo($request);
    }

    public function listInferDeploymentInstancesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{id}/deployments/{name}/instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
        if ($localVarParams['podName'] !== null) {
            $queryParams['pod_name'] = $localVarParams['podName'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $pathParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferDeploymentInstancesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferDeploymentInstancesRequest');
    }

    /**
     * 查询Pod事件
     *
     * 本接口用于查询指定Pod的Kubernetes事件，适用于需要监控和排查Pod运行状态的场景。调用此接口前，确保已具备相应的查询权限，并提供有效的Pod ID。返回的事件列表将包含每个事件的详细信息，如事件类型、发生次数、事件名称、事件信息、发生时间等。如果提供的Pod ID无效、Pod不存在或权限不足，将返回相应的异常信息，提示用户检查输入数据的有效性和权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferDeploymentPodEvents($request)
    {
        return $this->listInferDeploymentPodEventsWithHttpInfo($request);
    }

    public function listInferDeploymentPodEventsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{id}/deployments/{deployment_name}/instances/{instance_name}/pods/{name}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['deploymentName'] !== null) {
            $pathParams['deployment_name'] = $localVarParams['deploymentName'];
        }
        if ($localVarParams['instanceName'] !== null) {
            $pathParams['instance_name'] = $localVarParams['instanceName'];
        }
        if ($localVarParams['name'] !== null) {
            $pathParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferDeploymentPodEventsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferDeploymentPodEventsRequest');
    }

    /**
     * 查询服务部署的pod的列表
     *
     * 本接口用于查询指定服务部署的pod列表，并支持选择是否只获取当前运行中的pod。适用于需要管理和监控服务部署pod状态的场景。调用此接口前，确保已具备相应的查询权限，并提供有效的服务ID、部署ID和可选的筛选参数pod status（如是否只获取当前运行中的pod）。返回的列表将包含每个pod的基本信息，如pod名称、pod所在node的IP、pod所在node名字、pod角色、状态、最近更新时间等。如果指定的服务ID无效或当前服务没有pod，将返回空列表或相应的异常信息，提示用户检查输入数据的有效性和权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferDeploymentPods($request)
    {
        return $this->listInferDeploymentPodsWithHttpInfo($request);
    }

    public function listInferDeploymentPodsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{id}/deployments/{deployment_name}/instances/{name}/pods';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
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
        if ($localVarParams['podName'] !== null) {
            $queryParams['pod_name'] = $localVarParams['podName'];
        }
        if ($localVarParams['podId'] !== null) {
            $queryParams['pod_id'] = $localVarParams['podId'];
        }
        if ($localVarParams['podNodeIp'] !== null) {
            $queryParams['pod_node_ip'] = $localVarParams['podNodeIp'];
        }
        if ($localVarParams['podNodeName'] !== null) {
            $queryParams['pod_node_name'] = $localVarParams['podNodeName'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['deploymentName'] !== null) {
            $pathParams['deployment_name'] = $localVarParams['deploymentName'];
        }
        if ($localVarParams['name'] !== null) {
            $pathParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferDeploymentPodsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferDeploymentPodsRequest');
    }

    /**
     * 查询在线服务部署版本列表
     *
     * 此接口用于获取指定服务部署的版本列表，适用于需要了解当前服务部署可用版本的场景，例如进行版本选择或确认当前版本信息。请求需包含有效的服务ID、部署ID，也可通过排序参数对列表进行排序。用户必须具有对目标服务部署的查看权限。请求成功后，返回该服务部署的所有在线版本信息，包括版本号、发布时间和状态。若服务ID/部署ID无效或用户无权限，则返回400 Bad Request或403 Forbidden；若服务部署无在线版本，则返回空列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferDeploymentVersions($request)
    {
        return $this->listInferDeploymentVersionsWithHttpInfo($request);
    }

    public function listInferDeploymentVersionsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferDeploymentVersionsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferDeploymentVersionsRequest');
    }

    /**
     * 查询服务部署列表
     *
     * 支持分页和筛选，适用于用户在管理控制台或通过API需要查看特定条件下（如服务状态、名称等）的部署列表的情况。调用此接口前，用户必须具有查询部署列表的权限，并提供合法的分页参数（如页码、每页条数）和筛选条件（如部署状态、名称等）。调用成功后，系统将返回符合筛选条件的部署列表，包含指定页码的数据，并返回总页数和总记录数。如果用户没有查询部署列表的权限，或提供的分页参数和筛选条件不合法，调用将返回相应的错误信息。如果系统在查询过程中遇到内部错误，也将返回错误信息并记录日志。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferDeployments($request)
    {
        return $this->listInferDeploymentsWithHttpInfo($request);
    }

    public function listInferDeploymentsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
        if ($localVarParams['deleteAfter'] !== null) {
            $queryParams['delete_after'] = $localVarParams['deleteAfter'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferDeploymentsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferDeploymentsRequest');
    }

    /**
     * 查询当前的内网接入申请列表
     *
     * 本接口用于查询当前所有的内网接入申请记录，适用于需要管理和监控内网接入申请状态的场景。调用此接口前，确保已具备相应的查询权限。返回的列表将包含每个内网接入申请的基本信息，如申请ID、创建时间、状态、Region ID等。如果当前租户没有内网接入申请记录，将返回空列表。如果调用时出现权限不足或其他系统异常，将返回相应的异常信息，提示用户检查权限或联系技术支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferIntranetConnectionApplications($request)
    {
        return $this->listInferIntranetConnectionApplicationsWithHttpInfo($request);
    }

    public function listInferIntranetConnectionApplicationsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/intranet-connection/requests';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scene'] !== null) {
            $queryParams['scene'] = $localVarParams['scene'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $queryParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['serviceName'] !== null) {
            $queryParams['service_name'] = $localVarParams['serviceName'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['vpcName'] !== null) {
            $queryParams['vpc_name'] = $localVarParams['vpcName'];
        }
        if ($localVarParams['poolId'] !== null) {
            $queryParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferIntranetConnectionApplicationsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferIntranetConnectionApplicationsRequest');
    }

    /**
     * 查询当前的内网接入审批列表
     *
     * 本接口用于查询当前所有的内网接入审批记录，适用于需要管理和监控内网接入审批状态的场景。调用此接口前，确保已具备相应的查询权限。返回的列表将包含每个内网接入审批的基本信息，如审批ID、申请时间、状态（如待审批、已批准、已拒绝）、申请者信息、Region ID等。如果当前租户没有内网接入审批记录，将返回空列表。如果调用时出现权限不足或其他系统异常，将返回相应的异常信息，提示用户检查权限或联系技术支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferIntranetConnectionReviews($request)
    {
        return $this->listInferIntranetConnectionReviewsWithHttpInfo($request);
    }

    public function listInferIntranetConnectionReviewsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/intranet-connection/reviews';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scene'] !== null) {
            $queryParams['scene'] = $localVarParams['scene'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['applicantDomainId'] !== null) {
            $queryParams['applicant_domain_id'] = $localVarParams['applicantDomainId'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $queryParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['applicantUserName'] !== null) {
            $queryParams['applicant_user_name'] = $localVarParams['applicantUserName'];
        }
        if ($localVarParams['serviceName'] !== null) {
            $queryParams['service_name'] = $localVarParams['serviceName'];
        }
        if ($localVarParams['vpcName'] !== null) {
            $queryParams['vpc_name'] = $localVarParams['vpcName'];
        }
        if ($localVarParams['vpcId'] !== null) {
            $queryParams['vpc_id'] = $localVarParams['vpcId'];
        }
        if ($localVarParams['poolId'] !== null) {
            $queryParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferIntranetConnectionReviewsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferIntranetConnectionReviewsRequest');
    }

    /**
     * 获取在线服务事件列表
     *
     * 该接口适用于需要监控和管理在线服务事件的场景，例如用户或运维人员需要定期检查服务的日志事件，以及时发现和处理问题。通过调用此接口，用户可以获取当前在线服务的所有事件记录，包括事件类型、事件信息、时间、发生次数等信息。用户必须具有查询服务事件列表的权限，才能成功访问该接口。获取成功后，返回事件列表；若失败，返回具体的错误信息。常见异常包括权限验证错误、服务状态错误和参数验证错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferServiceEvents($request)
    {
        return $this->listInferServiceEventsWithHttpInfo($request);
    }

    public function listInferServiceEventsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['eventType'] !== null) {
            $queryParams['event_type'] = $localVarParams['eventType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['eventInfoKey'] !== null) {
            $queryParams['event_info_key'] = $localVarParams['eventInfoKey'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferServiceEventsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferServiceEventsRequest');
    }

    /**
     * 查询某一类资源下的标签
     *
     * 该接口适用于需要获取用户当前项目中某一类资源（如指定的Service）的标签信息的场景，例如在资源管理和监控中，用户可以通过查询标签来了解各类资源的分类和属性。通过调用此接口，用户可以获取指定Service在所有工作空间中的标签列表，但无权限的工作空间标签数据将被过滤不返回。用户必须具有足够的权限，且目标资源需存在。查询成功后，返回指定Service的标签列表；若失败，返回具体的错误信息。常见异常包括权限验证错误、资源不存在错误和参数验证错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferServiceTags($request)
    {
        return $this->listInferServiceTagsWithHttpInfo($request);
    }

    public function listInferServiceTagsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/modelarts-service-v2/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferServiceTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferServiceTagsRequest');
    }

    /**
     * 查询服务列表
     *
     * 支持分页和筛选
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferServices($request)
    {
        return $this->listInferServicesWithHttpInfo($request);
    }

    public function listInferServicesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['poolId'] !== null) {
            $queryParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['poolName'] !== null) {
            $queryParams['pool_name'] = $localVarParams['poolName'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['authType'] !== null) {
            $queryParams['auth_type'] = $localVarParams['authType'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['userName'] !== null) {
            $queryParams['user_name'] = $localVarParams['userName'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['assetId'] !== null) {
            $queryParams['asset_id'] = $localVarParams['assetId'];
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
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferServicesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferServicesRequest');
    }

    /**
     * 通过标签反查资源列表
     *
     * 该接口适用于需要根据标签或资源名称查找相关资源的场景，例如在资源管理和搜索中，用户可以通过指定标签或进行模糊查询来查找符合特定条件的资源。通过调用此接口，用户可以基于多个标签或资源名称进行精确或模糊查询，若不传标签则返回所有资源。用户必须具有足够的权限，且目标资源需存在。查询成功后，返回符合条件的资源列表；若失败，返回具体的错误信息。常见异常包括权限验证错误、资源不存在错误和参数验证错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferServicesByTags($request)
    {
        return $this->listInferServicesByTagsWithHttpInfo($request);
    }

    public function listInferServicesByTagsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/modelarts-service-v2/resource-instances/filter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferServicesByTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferServicesByTagsRequest');
    }

    /**
     * 查询任务列表
     *
     * 查询任务列表接口用于获取当前用户下的任务列表。该接口适用于以下场景：当需要查看任务状态、管理任务进度或统计任务数量时，用户可通过此接口获取当前用户下所有任务的详细信息。使用该接口的前提条件是用户已登录系统且具有查看任务的权限。调用接口成功后，系统将返回当前用户下的任务列表，包括任务ID、名称、状态、创建时间等信息。若用户未登录、无权限访问或系统中未配置任务，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJobs($request)
    {
        return $this->listJobsWithHttpInfo($request);
    }

    public function listJobsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['since'] !== null) {
            $queryParams['since'] = $localVarParams['since'];
        }
        if ($localVarParams['until'] !== null) {
            $queryParams['until'] = $localVarParams['until'];
        }
        if ($localVarParams['resource'] !== null) {
            $queryParams['resource'] = $localVarParams['resource'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListJobsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListJobsRequest');
    }

    /**
     * 查询网络资源列表
     *
     * 查询网络资源列表接口用于获取系统中已创建的网络资源信息。该接口适用于以下场景：当用户需要监控网络状态、进行资源规划、排查网络问题或进行审计时，可通过此接口查询系统中现有的网络资源列表。使用该接口的前提条件是用户具有相应的权限，并且系统中已存在网络资源。查询操作完成后，接口将返回网络资源列表，包含资源ID、类型、状态、创建时间等详细信息。若用户无权限、系统中无网络资源或查询参数有误，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNetworks($request)
    {
        return $this->listNetworksWithHttpInfo($request);
    }

    public function listNetworksWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/networks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['labelSelector'] !== null) {
            $queryParams['labelSelector'] = $localVarParams['labelSelector'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['continue'] !== null) {
            $queryParams['continue'] = $localVarParams['continue'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListNetworksResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListNetworksRequest');
    }

    /**
     * 查询节点池的节点列表
     *
     * 查询节点池的节点列表接口用于获取指定节点池中所有节点的详细信息。该接口适用于以下场景：当需要查看节点池的节点状态、资源使用情况或管理节点资源时，用户可通过此接口获取节点池中节点的详细信息。使用该接口的前提条件是节点池已存在且用户具有访问该节点池的权限。调用接口成功后，系统将返回节点池中所有节点的列表，包括节点ID、名称、状态、IP地址、资源使用情况等详细信息。若节点池不存在、用户无权限访问或节点池当前不可用，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNodePoolNodes($request)
    {
        return $this->listNodePoolNodesWithHttpInfo($request);
    }

    public function listNodePoolNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodepools/{nodepool_name}/nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['continue'] !== null) {
            $queryParams['continue'] = $localVarParams['continue'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
        }
        if ($localVarParams['nodepoolName'] !== null) {
            $pathParams['nodepool_name'] = $localVarParams['nodepoolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListNodePoolNodesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListNodePoolNodesRequest');
    }

    /**
     * 查询节点池列表
     *
     * 查询节点池列表接口用于获取指定节点池的列表信息。该接口适用于以下场景：当需要查看节点池的配置、状态或管理节点池资源时，用户可通过此接口获取节点池的详细信息。使用该接口的前提条件是节点池已存在且用户具有管理员权限。调用接口成功后，系统将返回节点池的列表，包括节点池ID、名称、节点数量、状态等详细信息。若节点池不存在、用户无权限操作或节点池当前不可用，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNodePools($request)
    {
        return $this->listNodePoolsWithHttpInfo($request);
    }

    public function listNodePoolsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodepools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListNodePoolsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListNodePoolsRequest');
    }

    /**
     * 查询插件模板列表
     *
     * 查询插件模板列表接口用于获取插件模板的基本信息列表。该接口适用于以下场景：当需要浏览或管理插件模板时，用户可通过此接口查询所有可用的插件模板信息，以便选择或进一步操作。使用该接口的前提条件是用户具有访问插件模板的权限，且插件模板服务处于正常运行状态。查询操作完成后，用户将获得插件模板的列表信息，包括模板名称、类型、版本等，便于后续的插件开发或管理。若用户无权限访问、插件模板服务不可用或请求参数无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPluginTemplates($request)
    {
        return $this->listPluginTemplatesWithHttpInfo($request);
    }

    public function listPluginTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/plugintemplates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['templateName'] !== null) {
            $queryParams['templateName'] = $localVarParams['templateName'];
        }
        if ($localVarParams['poolName'] !== null) {
            $queryParams['poolName'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListPluginTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListPluginTemplatesRequest');
    }

    /**
     * 查询资源池节点列表
     *
     * 查询资源池节点列表接口用于获取指定资源池中的节点信息列表。该接口适用于以下场景：当需要了解资源池中节点的分布、状态或资源使用情况时，用户可通过此接口查询资源池中的节点列表，以便进行资源监控、分配或管理。使用该接口的前提条件是资源池已创建且处于可用状态，且用户具有访问资源池的权限。查询操作完成后，用户将获得资源池中节点的详细信息，包括节点ID、状态、资源使用情况等，便于后续的资源管理和优化。若资源池不存在、用户无权限访问或请求参数无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPoolNodes($request)
    {
        return $this->listPoolNodesWithHttpInfo($request);
    }

    public function listPoolNodesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['continue'] !== null) {
            $queryParams['continue'] = $localVarParams['continue'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListPoolNodesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListPoolNodesRequest');
    }

    /**
     * 查询插件列表
     *
     * 查询插件实例列表接口用于获取系统中已部署的插件实例信息。该接口适用于以下场景：当用户需要查看系统中已部署的插件实例、监控插件运行状态、管理插件配置或进行故障排查时，可通过此接口获取插件实例的详细信息。使用该接口的前提条件是用户具有查询权限且系统中已部署至少一个插件实例。调用该接口后，系统将返回所有插件实例的列表，包括插件名称、类型、状态、版本及部署环境等信息。若用户无权限访问或系统中未部署任何插件实例，接口将返回相应的错误信息或空列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPoolPlugins($request)
    {
        return $this->listPoolPluginsWithHttpInfo($request);
    }

    public function listPoolPluginsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/plugins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListPoolPluginsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListPoolPluginsRequest');
    }

    /**
     * 查询资源池的所有标签
     *
     * 查询资源池所有标签接口用于获取用户当前项目下资源池的所有标签信息，默认查询所有工作空间，但无权限的工作空间不会返回标签数据。该接口适用于以下场景：当需要管理、分类或统计资源池的标签信息时，用户可通过此接口获取资源池的标签数据。使用该接口的前提条件是用户具有访问资源池的权限且资源池已存在。调用接口成功后，系统将返回用户当前项目下所有可访问工作空间的资源池标签信息。若用户无权限访问资源池、资源池不存在或项目未创建，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPoolTags($request)
    {
        return $this->listPoolTagsWithHttpInfo($request);
    }

    public function listPoolTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/pools/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListPoolTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListPoolTagsRequest');
    }

    /**
     * 查询资源池列表
     *
     * 查询资源池列表接口用于获取系统中已创建的资源池信息。该接口适用于以下场景：当用户需要监控资源池状态、进行资源规划、管理资源分配或进行审计时，可通过此接口查询系统中现有的资源池列表。使用该接口的前提条件是用户具有相应的权限，并且系统中已存在资源池。查询操作完成后，接口将返回资源池列表，包含资源池ID、名称、类型、状态、资源配额等详细信息。若用户无权限、系统中无资源池或查询参数有误，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPools($request)
    {
        return $this->listPoolsWithHttpInfo($request);
    }

    public function listPoolsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspaceId'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['labelSelector'] !== null) {
            $queryParams['labelSelector'] = $localVarParams['labelSelector'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListPoolsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListPoolsRequest');
    }

    /**
     * 查询资源规格列表
     *
     * 查询资源规格列表接口用于获取可用的资源规格信息。该接口适用于以下场景：当需要查看或选择资源规格以创建资源池、分配资源或了解可用资源规格时，用户可通过此接口获取资源规格的详细信息。使用该接口的前提条件是用户具有相应的权限（如管理员权限或资源管理权限）。调用接口成功后，系统将返回资源规格的列表，包括规格ID、名称、CPU核数、内存大小、存储容量等详细信息。若用户无权限访问该接口或系统中未配置资源规格，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceFlavors($request)
    {
        return $this->listResourceFlavorsWithHttpInfo($request);
    }

    public function listResourceFlavorsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/resourceflavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['continue'] !== null) {
            $queryParams['continue'] = $localVarParams['continue'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['labelSelector'] !== null) {
            $queryParams['labelSelector'] = $localVarParams['labelSelector'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/yaml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/yaml'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListResourceFlavorsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListResourceFlavorsRequest');
    }

    /**
     * 查询计划事件列表
     *
     * 查询计划事件列表信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScheduledEvents($request)
    {
        return $this->listScheduledEventsWithHttpInfo($request);
    }

    public function listScheduledEventsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/scheduled-events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspaceId'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['nodeName'] !== null) {
            $queryParams['nodeName'] = $localVarParams['nodeName'];
        }
        if ($localVarParams['poolName'] !== null) {
            $queryParams['poolName'] = $localVarParams['poolName'];
        }
        if ($localVarParams['publishStartTime'] !== null) {
            $queryParams['publishStartTime'] = $localVarParams['publishStartTime'];
        }
        if ($localVarParams['publishEndTime'] !== null) {
            $queryParams['publishEndTime'] = $localVarParams['publishEndTime'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListScheduledEventsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListScheduledEventsRequest');
    }

    /**
     * 查询训练实验列表
     *
     * 查询训练实验列表接口用于获取ModelArts平台上用户已创建的训练实验的列表。
     * 该接口适用于以下场景：当用户需要查看所有或部分训练实验的概要信息，如实验名称、描述、创建时间等时，可以通过此接口查询训练实验列表。使用该接口的前提条件是用户已登录ModelArts平台并具有查看训练实验的权限。查询操作完成后，系统将返回符合条件的训练实验列表。若用户无权限操作或查询条件不合法，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTrainingExperiments($request)
    {
        return $this->listTrainingExperimentsWithHttpInfo($request);
    }

    public function listTrainingExperimentsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-experiments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListTrainingExperimentsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListTrainingExperimentsRequest');
    }

    /**
     * 获取训练作业事件列表
     *
     * 获取训练作业事件列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTrainingJobEvents($request)
    {
        return $this->listTrainingJobEventsWithHttpInfo($request);
    }

    public function listTrainingJobEventsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['level'] !== null) {
            $queryParams['level'] = $localVarParams['level'];
        }
        if ($localVarParams['pattern'] !== null) {
            $queryParams['pattern'] = $localVarParams['pattern'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListTrainingJobEventsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListTrainingJobEventsRequest');
    }

    /**
     * 获取训练作业流程阶段信息列表
     *
     * 获取训练作业流程阶段信息列表接口用于获取ModelArts平台上指定训练作业的流程阶段信息列表。
     * 该接口适用于以下场景：当用户需要查看特定训练作业的流程阶段记录时，可以通过此接口获取阶段信息列表。使用该接口的前提条件是用户已知训练作业ID，并具有查看阶段信息列表的权限。查询操作完成后，平台将返回包含训练作业的阶段信息记录。若训练作业ID不存在或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTrainingJobStages($request)
    {
        return $this->listTrainingJobStagesWithHttpInfo($request);
    }

    public function listTrainingJobStagesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/stages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListTrainingJobStagesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListTrainingJobStagesRequest');
    }

    /**
     * 查询训练作业的实例历史调度信息
     *
     * 查询训练作业调度的实例IP、节点IP等信息，可通过schedule_count参数查询具体的某一次调度的实例信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTrainingJobTasks($request)
    {
        return $this->listTrainingJobTasksWithHttpInfo($request);
    }

    public function listTrainingJobTasksWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scheduleCount'] !== null) {
            $queryParams['schedule_count'] = $localVarParams['scheduleCount'];
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListTrainingJobTasksResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListTrainingJobTasksRequest');
    }

    /**
     * 查询训练作业列表
     *
     * 根据指定查询条件查询用户创建的训练作业列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTrainingJobs($request)
    {
        return $this->listTrainingJobsWithHttpInfo($request);
    }

    public function listTrainingJobsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-job-searches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListTrainingJobsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListTrainingJobsRequest');
    }

    /**
     * 查询资源池作业列表
     *
     * 查询专属资源池作业列表接口用于获取指定专属资源池中的作业信息列表。该接口适用于以下场景：当需要监控专属资源池的资源使用情况、查看作业状态或管理资源分配时，用户可通过此接口获取专属资源池中作业的详细信息。使用该接口的前提条件是专属资源池已存在且用户具有相应的权限（如管理员权限或资源管理权限）。调用接口成功后，系统将返回专属资源池中作业的列表，包括作业ID、名称、状态、资源使用情况等详细信息。若专属资源池不存在、用户无权限操作或资源池当前不可用，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkloads($request)
    {
        return $this->listWorkloadsWithHttpInfo($request);
    }

    public function listWorkloadsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/workloads';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['hostip'] !== null) {
            $queryParams['hostip'] = $localVarParams['hostip'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['sort'] !== null) {
            $queryParams['sort'] = $localVarParams['sort'];
        }
        if ($localVarParams['ascend'] !== null) {
            $queryParams['ascend'] = $localVarParams['ascend'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListWorkloadsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListWorkloadsRequest');
    }

    /**
     * 查询工作空间列表
     *
     * 查询工作空间列表，响应消息体中包含详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkspace($request)
    {
        return $this->listWorkspaceWithHttpInfo($request);
    }

    public function listWorkspaceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['filterAccessible'] !== null) {
            $queryParams['filter_accessible'] = $localVarParams['filterAccessible'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListWorkspaceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListWorkspaceRequest');
    }

    /**
     * 修改添加自定义URL申请
     *
     * 本接口用于修改添加内网自定义URL请求，适用于需要同时更新或者添加多个内网接入点的场景。调用此接口前，确保调用者具备相应的更新权限，提供需要更新的参数，如IP地址、VPC ID、子网ID等。指定的内网接入点将添加新的配置，新的配置将对相关服务生效。如果提供的内网接入点ID列表中包含无效或不存在的ID，接口将返回相应的异常信息，提示用户检查ID的有效性，如果提供的更新参数不符合格式要求（如IP地址格式不正确），接口将返回相应的异常信息，提示用户检查参数的有效性。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function modifyInferIntranetConnections($request)
    {
        return $this->modifyInferIntranetConnectionsWithHttpInfo($request);
    }

    public function modifyInferIntranetConnectionsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/intranet-connection/{id}/modify';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ModifyInferIntranetConnectionsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ModifyInferIntranetConnectionsRequest');
    }

    /**
     * 训练作业事件上报接口
     *
     * 训练事件上报给业务面
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function notifyTrainingJobInformation($request)
    {
        return $this->notifyTrainingJobInformationWithHttpInfo($request);
    }

    public function notifyTrainingJobInformationWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/tasks/{task_id}/reports/{report_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
        }
        if ($localVarParams['reportType'] !== null) {
            $pathParams['report_type'] = $localVarParams['reportType'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\NotifyTrainingJobInformationResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\NotifyTrainingJobInformationRequest');
    }

    /**
     * 更新网络资源
     *
     * 更新网络资源接口用于修改指定网络资源的配置信息。该接口适用于以下场景：当需要调整网络资源的属性、修复配置错误或优化资源设置时，用户可通过此接口更新指定网络资源的详细信息。使用该接口的前提条件是网络资源已存在且用户具有管理员权限。更新操作完成后，指定网络资源的配置信息将被成功修改，系统将反映最新的资源状态和属性。若指定的网络资源不存在、用户无权限操作或输入参数有误，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function patchNetwork($request)
    {
        return $this->patchNetworkWithHttpInfo($request);
    }

    public function patchNetworkWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/networks/{network_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['networkName'] !== null) {
            $pathParams['network_name'] = $localVarParams['networkName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\PatchNetworkResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\PatchNetworkRequest');
    }

    /**
     * 更新节点池
     *
     * 更新节点池接口用于修改指定节点池的配置信息。该接口适用于以下场景：当需要扩展节点池容量、调整节点规格、优化资源分配或修复节点池配置时，用户可通过此接口更新节点池的相关信息。使用该接口的前提条件是节点池已存在且用户具有管理员权限。更新操作完成后，节点池的配置将被更新，包括节点数量、规格、网络配置等参数。若节点池不存在、用户无权限操作或配置参数错误，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function patchNodePool($request)
    {
        return $this->patchNodePoolWithHttpInfo($request);
    }

    public function patchNodePoolWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodepools/{nodepool_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
        }
        if ($localVarParams['nodepoolName'] !== null) {
            $pathParams['nodepool_name'] = $localVarParams['nodepoolName'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\PatchNodePoolResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\PatchNodePoolRequest');
    }

    /**
     * 更新资源池
     *
     * 更新资源池接口用于修改指定资源池的配置和容量。该接口适用于以下场景：当资源池需要扩展容量、调整配置或优化性能时，用户可通过此接口更新资源池的相关信息。使用该接口的前提条件是资源池已存在且用户具有管理员权限。更新操作完成后，资源池的配置和容量将被更新，相关资源和配置也将被调整。若资源池不存在、用户无权限操作或资源池处于不可更新状态，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function patchPool($request)
    {
        return $this->patchPoolWithHttpInfo($request);
    }

    public function patchPoolWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xModelArtsUserId'] !== null) {
            $headerParams[$arr['xModelArtsUserId']] = $localVarParams['xModelArtsUserId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\PatchPoolResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\PatchPoolRequest');
    }

    /**
     * 注册自定义镜像
     *
     * 注册自定义镜像接口用于将用户自定义的镜像注册到ModelArts镜像管理。该接口适用于以下场景：当用户需要将自己的自定义镜像（如特定算法环境、工具链或配置）集成到ModelArts平台时，可通过此接口将镜像注册到镜像管理中以便后续使用。使用该接口的前提条件是用户具备ModelArts镜像管理权限，并且需要提供有效的镜像地址和符合要求的镜像格式。注册操作完成后，自定义镜像将被成功添加到ModelArts镜像列表中，用户可以在后续任务中选择使用该镜像。若镜像地址无效、镜像格式不符合要求或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function registerImage($request)
    {
        return $this->registerImageWithHttpInfo($request);
    }

    public function registerImageWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\RegisterImageResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\RegisterImageRequest');
    }

    /**
     * 查询算法详情
     *
     * 根据算法id查询指定算法。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAlgorithmByUuid($request)
    {
        return $this->showAlgorithmByUuidWithHttpInfo($request);
    }

    public function showAlgorithmByUuidWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/algorithms/{algorithm_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['algorithmId'] !== null) {
            $pathParams['algorithm_id'] = $localVarParams['algorithmId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAlgorithmByUuidResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAlgorithmByUuidRequest');
    }

    /**
     * 查询授权模式
     *
     * 查询授权模式接口用于获取指定资源或功能的授权方式和权限配置信息。该接口适用于以下场景：当系统管理员需要查看资源的访问权限设置、开发者需要验证授权策略配置是否正确，或安全审计人员需要检查授权配置是否符合安全规范时，可通过此接口查询授权模式的详细信息。使用该接口的前提条件是用户具有查询权限且目标资源或功能的授权模式已配置。调用成功后，接口将返回授权模式的类型、规则及权限范围等详细信息。若用户无权限访问该接口，或目标资源的授权模式未配置，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAuthmodeDetail($request)
    {
        return $this->showAuthmodeDetailWithHttpInfo($request);
    }

    public function showAuthmodeDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/auth-mode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAuthmodeDetailResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAuthmodeDetailRequest');
    }

    /**
     * 获取某个超参敏感度分析图像的路径
     *
     * 获取某个超参敏感度分析图像的保存路径。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAutoSearchParamAnalysisResultPath($request)
    {
        return $this->showAutoSearchParamAnalysisResultPathWithHttpInfo($request);
    }

    public function showAutoSearchParamAnalysisResultPathWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/autosearch-parameter-analysis/{parameter_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['parameterName'] !== null) {
            $pathParams['parameter_name'] = $localVarParams['parameterName'];
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchParamAnalysisResultPathResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchParamAnalysisResultPathRequest');
    }

    /**
     * 获取超参敏感度分析结果
     *
     * 获取超参敏感度分析结果的汇总表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAutoSearchParamsAnalysis($request)
    {
        return $this->showAutoSearchParamsAnalysisWithHttpInfo($request);
    }

    public function showAutoSearchParamsAnalysisWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/autosearch-parameter-analysis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchParamsAnalysisResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchParamsAnalysisRequest');
    }

    /**
     * 查询超参搜索某个trial的结果
     *
     * 根据传入的trial_id，查询指定trial的搜索结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAutoSearchPerTrial($request)
    {
        return $this->showAutoSearchPerTrialWithHttpInfo($request);
    }

    public function showAutoSearchPerTrialWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/autosearch-trials/{trial_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
        }
        if ($localVarParams['trialId'] !== null) {
            $pathParams['trial_id'] = $localVarParams['trialId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchPerTrialResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchPerTrialRequest');
    }

    /**
     * 提前终止自动化搜索作业的某个trial
     *
     * 提前终止自动化搜索作业的某个trial。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAutoSearchTrialEarlyStop($request)
    {
        return $this->showAutoSearchTrialEarlyStopWithHttpInfo($request);
    }

    public function showAutoSearchTrialEarlyStopWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/autosearch-trial-earlystop/{trial_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
        }
        if ($localVarParams['trialId'] !== null) {
            $pathParams['trial_id'] = $localVarParams['trialId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchTrialEarlyStopResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchTrialEarlyStopRequest');
    }

    /**
     * 查询超参搜索所有trial的结果
     *
     * 查询超参搜索所有trial的结果。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAutoSearchTrials($request)
    {
        return $this->showAutoSearchTrialsWithHttpInfo($request);
    }

    public function showAutoSearchTrialsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/autosearch-trials';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchTrialsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchTrialsRequest');
    }

    /**
     * 获取自动化搜索作业yaml模板的内容
     *
     * 获取自动化搜索作业yaml模板的内容。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAutoSearchYamlTemplateContent($request)
    {
        return $this->showAutoSearchYamlTemplateContentWithHttpInfo($request);
    }

    public function showAutoSearchYamlTemplateContentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/autosearch/yaml-templates/{algorithm_type}/{algorithm_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['algorithmType'] !== null) {
            $pathParams['algorithm_type'] = $localVarParams['algorithmType'];
        }
        if ($localVarParams['algorithmName'] !== null) {
            $pathParams['algorithm_name'] = $localVarParams['algorithmName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchYamlTemplateContentResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchYamlTemplateContentRequest');
    }

    /**
     * 获取自动化搜索作业yaml模板的信息
     *
     * 获取自动化搜索作业yaml模板的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAutoSearchYamlTemplatesInfo($request)
    {
        return $this->showAutoSearchYamlTemplatesInfoWithHttpInfo($request);
    }

    public function showAutoSearchYamlTemplatesInfoWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/autosearch/yaml-templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchYamlTemplatesInfoResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowAutoSearchYamlTemplatesInfoRequest');
    }

    /**
     * 获取动态挂载存储实例详情
     *
     * 获取动态挂载OBS实例详情接口用于获取已挂载到运行中Notebook实例中的存储实例的详细信息。
     * 
     * 适用场景：用户需要查看Notebook实例中已挂载的存储实例的详细信息时，可通过此接口获取。使用该接口的前提条件是用户已登录系统并具有访问目标Notebook实例的权限。调用该接口后，系统将返回指定Notebook实例中挂载的存储实例的详细信息。若用户无权限访问指定实例，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDynamicStorage($request)
    {
        return $this->showDynamicStorageWithHttpInfo($request);
    }

    public function showDynamicStorageWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{instance_id}/storage/{storage_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['storageId'] !== null) {
            $pathParams['storage_id'] = $localVarParams['storageId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowDynamicStorageResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowDynamicStorageRequest');
    }

    /**
     * 查询镜像详情
     *
     * 查询镜像详情接口用于查询镜像的详细信息。该接口适用于以下场景：当用户需要了解特定镜像的详细信息（如镜像名称、版本、创建时间、大小、状态等）或对镜像执行一些操作时，可通过此接口获取镜像的详细信息。使用该接口的前提条件是用户具备镜像管理权限，并且待查询镜像有效且存在。查询操作完成后，将返回镜像的详细信息，包括镜像ID、名称、版本、创建时间、大小以及状态等。若镜像不存在或用户无权限访问，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showImage($request)
    {
        return $this->showImageWithHttpInfo($request);
    }

    public function showImageWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/images/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowImageResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowImageRequest');
    }

    /**
     * 查询服务部署详情
     *
     * 通过服务ID、部署ID查询对应的部署详情，调用者可以通过有效的服务ID、部署ID获取部署的名称、状态、服务实例、配置参数等详细信息。调用者需具有足够的权限，且输入的服务ID、部署ID必须有效。查询成功时返回部署详细信息，查询失败时返回特定的错误码和错误信息。若服务ID或者部署ID无效、版本号不存在或用户无权限，则返回400 Bad Request或403 Forbidden；
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInferDeployment($request)
    {
        return $this->showInferDeploymentWithHttpInfo($request);
    }

    public function showInferDeploymentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferDeploymentResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferDeploymentRequest');
    }

    /**
     * 查询在线服务部署版本详情
     *
     * 此接口用于获取指定服务部署版本的详细信息，适用于需要查看特定版本的详细配置和状态的场景，例如确认版本的功能、性能参数或发布历史。请求需包含有效的服务ID、部署ID及版本号。用户必须具有对目标服务部署的查看权限。请求成功后，返回该版本的详细信息，包括版本号、发布时间、配置参数和状态。若服务ID、部署ID无效、版本号不存在或用户无权限，则返回400 Bad Request或403 Forbidden；若服务部署无该版本信息，则返回404 Not Found。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInferDeploymentVersion($request)
    {
        return $this->showInferDeploymentVersionWithHttpInfo($request);
    }

    public function showInferDeploymentVersionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/versions/{version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['version'] !== null) {
            $pathParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferDeploymentVersionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferDeploymentVersionRequest');
    }

    /**
     * 查询服务详情
     *
     * 通过服务ID查询对应的服务详情，调用者可以通过有效的服务ID获取服务的名称、状态、服务实例、配置参数等详细信息。调用者需具有足够的权限，且输入的服务ID必须有效。查询成功时返回服务详细信息，查询失败时返回特定的错误码和错误信息。若服务ID无效、版本号不存在或用户无权限，则返回400 Bad Request或403 Forbidden。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInferService($request)
    {
        return $this->showInferServiceWithHttpInfo($request);
    }

    public function showInferServiceWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferServiceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferServiceRequest');
    }

    /**
     * 查询纳管资源池详情
     *
     * 该接口允许用户通过指定资源池的ID来查询纳管资源池的详细信息，包括实例ID、名称、Flavor规格、实例状态和实例可访问的URL。此功能适用于需要监控或管理云资源的用户，使用该接口前，用户需确保已拥有访问权限及正确的资源池ID。执行成功后，用户将获得所需的实例详情，可用于进一步的资源管理和配置。如果资源池ID无效或用户没有相应的访问权限，接口将返回错误信息，如404 Not Found或401 Unauthorized。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInferServiceCluster($request)
    {
        return $this->showInferServiceClusterWithHttpInfo($request);
    }

    public function showInferServiceClusterWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/clusters/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xUserToken'] !== null) {
            $headerParams[$arr['xUserToken']] = $localVarParams['xUserToken'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferServiceClusterResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferServiceClusterRequest');
    }

    /**
     * 查询资源标签
     *
     * 该接口适用于需要获取资源（如模型、数据集、服务等）的标签信息的场景，例如在资源管理或分类中，用户可以通过查询标签来了解资源的用途、状态或其他属性。通过调用此接口，用户可以通过资源ID获取指定资源的所有标签列表。用户必须具有足够的权限，且目标资源需存在。查询成功后，返回资源的标签列表；若失败，返回具体的错误信息。常见异常包括权限验证错误、资源不存在错误和参数验证错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInferServiceTags($request)
    {
        return $this->showInferServiceTagsWithHttpInfo($request);
    }

    public function showInferServiceTagsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/modelarts-service-v2/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferServiceTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferServiceTagsRequest');
    }

    /**
     * 查询网络资源
     *
     * 查询网络资源接口用于获取指定网络资源的详情信息。该接口适用于以下场景：当用户需要查看特定网络资源的详细配置、状态或属性时，可通过此接口查询指定网络资源的详细信息。使用该接口的前提条件是用户具有相应的权限，并且指定的网络资源已存在于系统中。查询操作完成后，接口将返回指定网络资源的详细信息，包括资源ID、类型、状态、配置参数等。若指定的网络资源不存在、用户无权限操作或输入参数有误，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNetwork($request)
    {
        return $this->showNetworkWithHttpInfo($request);
    }

    public function showNetworkWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/networks/{network_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['networkName'] !== null) {
            $pathParams['network_name'] = $localVarParams['networkName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowNetworkResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowNetworkRequest');
    }

    /**
     * 查询网络可用的IP
     *
     * 查询网络可用的IP接口用于查找指定网络中未被占用的IP地址。该接口适用于以下场景：在网络规划、资源分配或故障排查时，用户需要快速获取可用的IP地址信息。使用该接口的前提条件是用户具有访问目标网络的权限，并且需要提供有效的网络范围（如子网掩码或IP段）。查询完成后，接口将返回指定网络中未被占用的IP地址列表，用户可以根据结果进行IP地址的分配或进一步操作。若网络不可达、权限不足或网络范围有误，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNetworkAvailableIp($request)
    {
        return $this->showNetworkAvailableIpWithHttpInfo($request);
    }

    public function showNetworkAvailableIpWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/networks/{network_name}/network-ip-availabilities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['networkId'] !== null) {
            $queryParams['network_id'] = $localVarParams['networkId'];
        }
        if ($localVarParams['networkName'] !== null) {
            $pathParams['network_name'] = $localVarParams['networkName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowNetworkAvailableIpResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowNetworkAvailableIpRequest');
    }

    /**
     * 查询节点配置模板
     *
     * 查询节点配置模板接口用于获取指定节点配置模板的详细信息。该接口适用于以下场景：当用户需要查看节点配置模板的内容、管理节点配置或进行相关操作时，可通过此接口获取指定节点配置模板的详细信息。使用该接口的前提条件是节点配置模板已存在且用户具有相应的访问权限。调用该接口后，系统将返回指定节点配置模板的详细信息，包括模板名称、版本、配置参数及描述等。若节点配置模板不存在或用户无权限访问，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNodeConfigTemplate($request)
    {
        return $this->showNodeConfigTemplateWithHttpInfo($request);
    }

    public function showNodeConfigTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/nodeconfigtemplates/{nodeconfigtemplate_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['nodeconfigtemplateName'] !== null) {
            $pathParams['nodeconfigtemplate_name'] = $localVarParams['nodeconfigtemplateName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowNodeConfigTemplateResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowNodeConfigTemplateRequest');
    }

    /**
     * 查询指定节点池详情
     *
     * 查询指定节点池详情接口用于获取指定节点池的详细信息。该接口适用于以下场景：当需要查看节点池的配置、状态、资源使用情况或管理节点池时，用户可通过此接口获取节点池的详细信息。使用该接口的前提条件是节点池已存在且用户具有访问该节点池的权限。调用接口成功后，系统将返回节点池的详细信息，包括节点池ID、名称、节点数量、状态、创建时间、配置参数等。若节点池不存在、用户无权限访问或节点池当前不可用，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNodePool($request)
    {
        return $this->showNodePoolWithHttpInfo($request);
    }

    public function showNodePoolWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodepools/{nodepool_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['continue'] !== null) {
            $queryParams['continue'] = $localVarParams['continue'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
        }
        if ($localVarParams['nodepoolName'] !== null) {
            $pathParams['nodepool_name'] = $localVarParams['nodepoolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowNodePoolResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowNodePoolRequest');
    }

    /**
     * 查询训练作业指定任务的日志（OBS链接）
     *
     * 查询训练作业指定任务的日志（OBS临时链接，有效期5分钟），可全量查看或直接下载。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showObsUrlOfTrainingJobLogs($request)
    {
        return $this->showObsUrlOfTrainingJobLogsWithHttpInfo($request);
    }

    public function showObsUrlOfTrainingJobLogsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/tasks/{task_id}/logs/url';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowObsUrlOfTrainingJobLogsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowObsUrlOfTrainingJobLogsRequest');
    }

    /**
     * 查询订单详情
     *
     * 查询订单详情接口用于获取指定订单的详细信息。该接口适用于以下场景：当需要查看订单的状态、金额、商品信息或处理订单相关问题时，用户可通过此接口获取订单的详细数据。使用该接口的前提条件是订单已存在且用户具有访问该订单的权限。调用接口成功后，系统将返回订单的详细信息，包括订单号、商品列表、金额、支付状态、下单时间等。若订单不存在、用户无权限访问或订单信息未正确配置，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOrder($request)
    {
        return $this->showOrderWithHttpInfo($request);
    }

    public function showOrderWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/orders/{order_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['orderName'] !== null) {
            $pathParams['order_name'] = $localVarParams['orderName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowOrderResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowOrderRequest');
    }

    /**
     * 查询OS的配置参数
     *
     * 查询OS的配置参数接口用于获取ModelArts OS服务的配置参数，如网络网段、用户资源配额等。该接口适用于以下场景：当需要了解当前ModelArts OS服务的网络配置、资源分配情况或进行系统管理时，用户可通过此接口查询相关的配置参数。使用该接口的前提条件是用户具有访问ModelArts OS服务的权限，且服务处于正常运行状态。查询操作完成后，用户将获得指定的配置参数信息，便于进行后续的资源规划或系统优化。若用户无权限访问、服务不可用或请求参数无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOsConfig($request)
    {
        return $this->showOsConfigWithHttpInfo($request);
    }

    public function showOsConfigWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/os-user-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowOsConfigResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowOsConfigRequest');
    }

    /**
     * 查询OS的配额
     *
     * 查询OS配额接口用于获取ModelArts OS服务中部分资源的配额信息，如资源池配额、网络配额等。该接口适用于以下场景：当需要了解资源池或网络资源的使用限制、规划资源分配或监控资源使用情况时，用户可通过此接口获取相关配额信息。使用该接口的前提条件是ModelArts OS服务已部署且用户具有相应的权限（如管理员权限或资源管理权限）。调用接口成功后，系统将返回资源池配额、网络配额等详细信息，帮助用户更好地进行资源规划和管理。若用户无权限访问该接口、服务不可用或配额信息未配置，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOsQuota($request)
    {
        return $this->showOsQuotaWithHttpInfo($request);
    }

    public function showOsQuotaWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowOsQuotaResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowOsQuotaRequest');
    }

    /**
     * 查询插件模板
     *
     * 查询插件模板接口用于获取指定插件模板的详细信息。该接口适用于以下场景：当需要了解特定插件模板的配置、功能或使用方式时，用户可通过此接口查询插件模板的详细信息。使用该接口的前提条件是插件模板已存在且用户具有访问权限。查询操作完成后，用户将获得指定插件模板的详细信息，包括模板的配置参数、功能描述等，便于后续的插件开发或配置管理。若插件模板不存在或用户无权限访问，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPluginTemplate($request)
    {
        return $this->showPluginTemplateWithHttpInfo($request);
    }

    public function showPluginTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/plugintemplates/{plugintemplate_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['plugintemplateName'] !== null) {
            $pathParams['plugintemplate_name'] = $localVarParams['plugintemplateName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPluginTemplateResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPluginTemplateRequest');
    }

    /**
     * 查询资源池
     *
     * 查询资源池信息接口用于获取指定资源池的详细信息。该接口适用于以下场景：当用户需要查看特定资源池的详细配置、状态、资源使用情况或进行资源管理时，可通过此接口查询指定资源池的详细信息。使用该接口的前提条件是用户具有相应的权限，并且指定的资源池已存在于系统中。查询操作完成后，接口将返回资源池的详细信息，包括资源池ID、名称、类型、状态、资源配额、利用率等。若指定的资源池不存在、用户无权限操作或输入参数有误，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPool($request)
    {
        return $this->showPoolWithHttpInfo($request);
    }

    public function showPoolWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xModelArtsUserId'] !== null) {
            $headerParams[$arr['xModelArtsUserId']] = $localVarParams['xModelArtsUserId'];
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolRequest');
    }

    /**
     * 资源池监控
     *
     * 资源池监控接口用于获取指定资源池的实时或历史监控信息。该接口适用于以下场景：当需要实时查看资源池的资源使用情况、性能状态或历史数据时，用户可通过此接口获取资源池的监控数据。使用该接口的前提条件是资源池已存在且用户具有管理员权限。调用接口成功后，系统将返回资源池的监控信息，包括资源使用率、性能指标及历史趋势等数据。若资源池不存在、用户无权限操作或资源池当前不可用，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPoolMonitor($request)
    {
        return $this->showPoolMonitorWithHttpInfo($request);
    }

    public function showPoolMonitorWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/monitor';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['timeRange'] !== null) {
            $queryParams['time_range'] = $localVarParams['timeRange'];
        }
        if ($localVarParams['statistics'] !== null) {
            $queryParams['statistics'] = $localVarParams['statistics'];
        }
        if ($localVarParams['period'] !== null) {
            $queryParams['period'] = $localVarParams['period'];
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolMonitorResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolMonitorRequest');
    }

    /**
     * 查询资源池单个节点详情
     *
     * 查询资源池中的单个节点接口用于获取指定资源池内单个节点的详细信息。该接口适用于以下场景：当用户需要了解节点资源分配、详细信息时，可通过此接口获取节点的类型、状态、配置参数及关联服务等信息。使用该接口的前提条件是目标资源池已存在且用户具备查看权限，同时需提供有效的资源池标识符作为输入参数。接口调用后，系统将返回资源池中单个节点数据；若资源池不存在、用户权限不足或输入参数无效，接口将返回对应的错误信息（如404未找到资源池或403权限拒绝）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPoolNode($request)
    {
        return $this->showPoolNodeWithHttpInfo($request);
    }

    public function showPoolNodeWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/nodes/{node_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
        }
        if ($localVarParams['nodeName'] !== null) {
            $pathParams['node_name'] = $localVarParams['nodeName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolNodeResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolNodeRequest');
    }

    /**
     * 查询资源池节点自定义配置
     *
     * 查询资源池节点自定义配置接口用于获取指定资源池节点的自定义配置信息。该接口适用于以下场景：当需要查看资源池节点的详细配置、优化资源分配或管理节点资源时，用户可通过此接口获取节点的自定义配置数据。使用该接口的前提条件是资源池节点已存在且用户具有访问该节点的权限。调用接口成功后，系统将返回资源池节点的自定义配置信息，包括硬件规格、软件环境、网络设置等详细参数。若资源池节点不存在、用户无权限访问或节点配置信息未正确配置，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPoolNodeConfig($request)
    {
        return $this->showPoolNodeConfigWithHttpInfo($request);
    }

    public function showPoolNodeConfigWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/node-config';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolNodeConfigResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolNodeConfigRequest');
    }

    /**
     * 查询资源池节点自定义配置模板
     *
     * 查询资源池节点自定义配置模板接口用于获取节点配置模板的结构定义与参数规范。该接口适用于以下场景：当需要了解节点自定义配置的模板结构（如参数字段、校验规则、示例值）、验证配置模板是否符合规范或进行配置模板选型时，用户可通过此接口获取模板的元数据（如参数说明、类型限制、依赖关系等）。使用该接口的前提条件是目标配置模板必须已注册至系统且处于可访问状态，调用者需具备模板查看权限，且系统配置管理服务正常运行。查询操作完成后，系统将返回模板的完整定义信息（如参数列表、版本号、更新时间等），且不会对模板内容或节点配置产生影响。若模板未注册、用户权限不足或系统服务异常，接口将返回对应的错误信息（如\&quot;404 Not Found\&quot;、\&quot;403 Forbidden\&quot;或\&quot;503 Service Unavailable\&quot;）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPoolNodeConfigTemplate($request)
    {
        return $this->showPoolNodeConfigTemplateWithHttpInfo($request);
    }

    public function showPoolNodeConfigTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/pools/{pool_name}/node-config-template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolNodeConfigTemplateResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolNodeConfigTemplateRequest');
    }

    /**
     * 查询资源实时利用率
     *
     * 查询资源实时利用率接口用于获取当前项目下所有资源池的实时利用率信息。该接口适用于以下场景：当用户需要监控资源使用情况、进行资源优化、容量规划或故障排查时，可通过此接口查询资源池的实时利用率，包括CPU、内存、存储等资源的使用情况。使用该接口的前提条件是用户具有访问该项目的权限，并且资源池已存在且处于运行状态。查询操作完成后，接口将返回资源池的实时利用率数据，包含利用率百分比、资源类型、时间戳等详细信息。若用户无权限、资源池不存在或系统无法获取实时数据，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPoolRuntimeMetrics($request)
    {
        return $this->showPoolRuntimeMetricsWithHttpInfo($request);
    }

    public function showPoolRuntimeMetricsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/metrics/runtime/pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolRuntimeMetricsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolRuntimeMetricsRequest');
    }

    /**
     * 资源池统计
     *
     * 资源池统计接口用于获取指定资源池的统计信息。该接口适用于以下场景：当需要了解资源池的资源使用情况、分配情况或利用率时，用户可通过此接口获取资源池的统计数据。使用该接口的前提条件是资源池已存在且用户具有管理员权限。调用接口成功后，系统将返回资源池的统计信息，包括资源使用总量、已分配量、利用率及资源分配趋势等数据。若资源池不存在、用户无权限操作或资源池当前不可用，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPoolStatistics($request)
    {
        return $this->showPoolStatisticsWithHttpInfo($request);
    }

    public function showPoolStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/statistics/pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspaceId'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolStatisticsRequest');
    }

    /**
     * 查询资源池上的标签
     *
     * 查询资源池的标签接口用于获取指定资源池的标签信息。该接口适用于以下场景：当需要查看、管理或统计特定资源池的标签信息时，用户可通过此接口获取资源池的标签数据。使用该接口的前提条件是资源池已存在且用户具有访问该资源池的权限。调用接口成功后，系统将返回指定资源池的标签信息，包括标签键和标签值。若资源池不存在、用户无权限访问或资源池未配置标签，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPoolTags($request)
    {
        return $this->showPoolTagsWithHttpInfo($request);
    }

    public function showPoolTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/pools/{pool_name}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowPoolTagsRequest');
    }

    /**
     * 查询训练作业镜像保存任务
     *
     * 查询训练作业镜像保存任务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSaveImageJob($request)
    {
        return $this->showSaveImageJobWithHttpInfo($request);
    }

    public function showSaveImageJobWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/tasks/{task_id}/save-image-job';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowSaveImageJobResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowSaveImageJobRequest');
    }

    /**
     * 获取支持的超参搜索算法
     *
     * 获取支持的超参搜索算法。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSearchAlgorithms($request)
    {
        return $this->showSearchAlgorithmsWithHttpInfo($request);
    }

    public function showSearchAlgorithmsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/search-algorithms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowSearchAlgorithmsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowSearchAlgorithmsRequest');
    }

    /**
     * 查询训练作业标签
     *
     * 查询训练作业标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrainJobTags($request)
    {
        return $this->showTrainJobTagsWithHttpInfo($request);
    }

    public function showTrainJobTagsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/modelarts-training-job/{training_job_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainJobTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainJobTagsRequest');
    }

    /**
     * 查询训练实验详情
     *
     * 查询训练实验详情接口用于获取指定训练实验的详细信息。
     * 该接口适用于以下场景：当用户需要查看训练实验的实验名称、描述、创建时间等详细信息时，可以通过此接口获取。使用该接口的前提条件是训练实验已存在且用户具有查看该实验的权限。查询操作完成后，将返回训练实验的详细信息，包括但不限于实验ID、名称、描述、创建时间等。若训练实验不存在或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrainingExperimentDetails($request)
    {
        return $this->showTrainingExperimentDetailsWithHttpInfo($request);
    }

    public function showTrainingExperimentDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-experiments/{experiment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['experimentId'] !== null) {
            $pathParams['experiment_id'] = $localVarParams['experimentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingExperimentDetailsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingExperimentDetailsRequest');
    }

    /**
     * 查询训练作业详情
     *
     * 查询训练作业详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrainingJobDetails($request)
    {
        return $this->showTrainingJobDetailsWithHttpInfo($request);
    }

    public function showTrainingJobDetailsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingJobDetailsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingJobDetailsRequest');
    }

    /**
     * 获取训练作业支持的AI预置框架
     *
     * 获取训练作业支持的AI预置框架。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrainingJobEngines($request)
    {
        return $this->showTrainingJobEnginesWithHttpInfo($request);
    }

    public function showTrainingJobEnginesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-job-engines';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingJobEnginesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingJobEnginesRequest');
    }

    /**
     * 获取训练作业支持的公共规格
     *
     * 获取训练作业支持的公共规格。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrainingJobFlavors($request)
    {
        return $this->showTrainingJobFlavorsWithHttpInfo($request);
    }

    public function showTrainingJobFlavorsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-job-flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['flavorType'] !== null) {
            $queryParams['flavor_type'] = $localVarParams['flavorType'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingJobFlavorsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingJobFlavorsRequest');
    }

    /**
     * 查询训练作业指定任务的日志（预览）
     *
     * 查询训练作业指定任务的日志（预览）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrainingJobLogsPreview($request)
    {
        return $this->showTrainingJobLogsPreviewWithHttpInfo($request);
    }

    public function showTrainingJobLogsPreviewWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/tasks/{task_id}/logs/preview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingJobLogsPreviewResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingJobLogsPreviewRequest');
    }

    /**
     * 查询训练作业指定任务的运行指标
     *
     * 查询训练作业指定任务的运行指标。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrainingJobMetrics($request)
    {
        return $this->showTrainingJobMetricsWithHttpInfo($request);
    }

    public function showTrainingJobMetricsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/metrics/{task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
        }
        if ($localVarParams['taskId'] !== null) {
            $pathParams['task_id'] = $localVarParams['taskId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingJobMetricsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingJobMetricsRequest');
    }

    /**
     * 获取训练配额
     *
     * 获取训练配额接口用于查询用户在ModelArts服务中的训练资源配额信息。
     * 该接口适用于以下场景：当用户需要了解当前可用的训练资源配额，以便合理规划和管理训练任务时，可以通过此接口获取配额详情。使用该接口的前提条件是用户已登录并具有查看配额的权限。响应消息体中包含用户已创建的训练作业个数、剩余可创建个数等。若用户无权限或配额信息为空，接口将返回相应的错误信息或空列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showTrainingQuotas($request)
    {
        return $this->showTrainingQuotasWithHttpInfo($request);
    }

    public function showTrainingQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['userId'] !== null) {
            $queryParams['user_id'] = $localVarParams['userId'];
        }
        if ($localVarParams['resource'] !== null) {
            $queryParams['resource'] = $localVarParams['resource'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingQuotasResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowTrainingQuotasRequest');
    }

    /**
     * 查询专属资源池作业统计信息
     *
     * 查询专属资源池作业统计信息接口用于获取指定专属资源池中作业的统计信息。该接口适用于以下场景：当需要了解专属资源池中作业的整体运行情况、资源使用效率或作业状态分布时，用户可通过此接口获取统计信息。使用该接口的前提条件是专属资源池已存在且用户具有相应的权限（如管理员权限或资源管理权限）。调用接口成功后，系统将返回专属资源池中作业的统计信息，包括作业总数、运行中作业数、完成作业数、资源使用率等数据。若专属资源池不存在、用户无权限操作或资源池当前不可用，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkloadStatistics($request)
    {
        return $this->showWorkloadStatisticsWithHttpInfo($request);
    }

    public function showWorkloadStatisticsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/statistics/pools/{pool_name}/workloads';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['poolName'] !== null) {
            $pathParams['pool_name'] = $localVarParams['poolName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkloadStatisticsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkloadStatisticsRequest');
    }

    /**
     * 查询工作空间详情
     *
     * 查询工作空间详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkspace($request)
    {
        return $this->showWorkspaceWithHttpInfo($request);
    }

    public function showWorkspaceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkspaceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkspaceRequest');
    }

    /**
     * 查询工作空间配额
     *
     * 查询工作空间配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkspaceQuotas($request)
    {
        return $this->showWorkspaceQuotasWithHttpInfo($request);
    }

    public function showWorkspaceQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkspaceQuotasResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkspaceQuotasRequest');
    }

    /**
     * 启动服务部署
     *
     * 使部署从“停止”或“失败”状态进入“部署中”状态，适用于用户需要重新启动已停止或启动失败的部署的情况。调用此接口前，部署状态必须为“停止”或“失败”，且用户需具有启动部署的权限。调用成功后，部署状态将变为“部署中”，系统将开始执行部署流程，包括资源准备、配置加载等。如果部署当前状态不是“停止”或“失败”，或用户没有启动部署的权限，调用将返回错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startInferDeployment($request)
    {
        return $this->startInferDeploymentWithHttpInfo($request);
    }

    public function startInferDeploymentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\StartInferDeploymentResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\StartInferDeploymentRequest');
    }

    /**
     * 启动服务
     *
     * 使服务从\&quot;停止\&quot;或\&quot;失败\&quot;状态进入\&quot;部署中\&quot;状态，适用于用户需要重新启动已停止或启动失败的服务的情况。调用此接口前，服务状态必须为\&quot;停止\&quot;或\&quot;失败\&quot;，且用户需具有启动服务的权限。调用成功后，服务状态将变为\&quot;部署中\&quot;，系统将开始执行部署流程，包括资源准备、配置加载等。如果服务当前状态不是\&quot;停止\&quot;或\&quot;失败\&quot;，或用户没有启动服务的权限，调用将返回错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startInferService($request)
    {
        return $this->startInferServiceWithHttpInfo($request);
    }

    public function startInferServiceWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\StartInferServiceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\StartInferServiceRequest');
    }

    /**
     * 停止在线服务部署
     *
     * 停止在线部署功能允许用户在特定状态下主动终止正在运行或处于其他可操作状态的部署实例。该功能适用于需要维护、升级或检测到异常的服务场景，支持在服务处于\&quot;运行中\&quot;、\&quot;部署中\&quot;、\&quot;失败\&quot;或\&quot;告警\&quot;状态时执行停止操作。使用此功能前，请确保部署实例处于可停止状态，并具备相应的API调用权限。成功执行后，部署将进入停止状态，释放相关资源并停止处理新的请求。若部署不在允许停止的状态、调用权限不足或系统内部出现错误，将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopInferDeployment($request)
    {
        return $this->stopInferDeploymentWithHttpInfo($request);
    }

    public function stopInferDeploymentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\StopInferDeploymentResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\StopInferDeploymentRequest');
    }

    /**
     * 停止服务
     *
     * 使服务从\&quot;运行中\&quot;状态进入\&quot;停止中\&quot;最终变为\&quot;停止\&quot;状态，适用于用户需要停止正在运行的服务以节省资源成本的场景。用户需具有停止服务的权限。调用成功后，服务状态将变为\&quot;停止中\&quot;，系统将开始执行停止流程，包括释放资源、保存状态等。如果用户没有停止服务的权限，调用将返回错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopInferService($request)
    {
        return $this->stopInferServiceWithHttpInfo($request);
    }

    public function stopInferServiceWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\StopInferServiceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\StopInferServiceRequest');
    }

    /**
     * 终止训练作业
     *
     * 终止训练作业，只可终止创建中、等待中、运行中的作业。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopTrainingJob($request)
    {
        return $this->stopTrainingJobWithHttpInfo($request);
    }

    public function stopTrainingJobWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/training-jobs/{training_job_id}/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['trainingJobId'] !== null) {
            $pathParams['training_job_id'] = $localVarParams['trainingJobId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\StopTrainingJobResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\StopTrainingJobRequest');
    }

    /**
     * 切换部署到指定版本
     *
     * 此接口用于将部署切换到指定版本，适用于需要在不同版本间进行切换以测试或回滚的场景。请求需包含有效的服务ID、部署ID及目标版本号，版本号必须是已发布的有效版本。用户必须具有对目标服务部署的管理权限，并且部署处于运行状态。切换成功后，部署将立即使用新的版本。若服务ID无效、部署ID无效、版本号不存在或用户无权限，则返回400 Bad Request或403 Forbidden；若部署状态不允许切换，则返回400 Bad Request。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function switchInferDeploymentVersion($request)
    {
        return $this->switchInferDeploymentVersionWithHttpInfo($request);
    }

    public function switchInferDeploymentVersionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/versions/{version}/switch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
        }
        if ($localVarParams['version'] !== null) {
            $pathParams['version'] = $localVarParams['version'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\SwitchInferDeploymentVersionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\SwitchInferDeploymentVersionRequest');
    }

    /**
     * 同步镜像状态
     *
     * 同步镜像状态接口用于修正镜像状态的异常情况。该接口适用于以下场景：当镜像状态因误操作、网络问题或系统故障等原因出现异常时，用户可通过此接口同步镜像的最新状态。使用该接口的前提条件是镜像已存在且用户具有相应的操作权限。同步操作完成后，镜像的状态将被更新为最新的正确状态，相关资源和配置也将被同步。若镜像不存在、用户无权限操作或同步过程中出现错误，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function syncImage($request)
    {
        return $this->syncImageWithHttpInfo($request);
    }

    public function syncImageWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/images/{image_id}/sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageId'] !== null) {
            $pathParams['image_id'] = $localVarParams['imageId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\SyncImageResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\SyncImageRequest');
    }

    /**
     * 解绑应用密钥
     *
     * 本接口用于将已绑定的apikey从指定服务中解绑，适用于需要撤销某个apikey对特定服务的访问权限的场景。调用此接口前，确保已获取到需要解绑的apikey，并确认该apikey当前绑定在指定服务上。解绑成功后，该apikey将不再对指定服务生效，但仍可继续用于其他服务。如果尝试解绑不存在或未绑定到指定服务的apikey，将返回相应的异常信息，提示用户检查apikey的有效性和绑定状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function unbindInferApiKey($request)
    {
        return $this->unbindInferApiKeyWithHttpInfo($request);
    }

    public function unbindInferApiKeyWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/api-keys/{key_id}/unbind';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['keyId'] !== null) {
            $pathParams['key_id'] = $localVarParams['keyId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UnbindInferApiKeyResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UnbindInferApiKeyRequest');
    }

    /**
     * 更新授权模式
     *
     * 更新授权模式接口用于修改指定资源或功能的授权方式和权限配置信息。该接口适用于以下场景：当系统管理员需要调整资源的访问权限、开发者需要更新授权策略以适应新的业务需求，或安全审计人员需要修改授权配置以符合新的安全规范时，可通过此接口更新授权模式的详细信息。使用该接口的前提条件是用户具有更新权限且目标资源或功能的授权模式已存在。调用成功后，接口将更新目标资源的授权模式，并返回更新后的授权模式信息。若用户无权限访问该接口，或目标资源的授权模式不存在，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAuthMode($request)
    {
        return $this->updateAuthModeWithHttpInfo($request);
    }

    public function updateAuthModeWithHttpInfo($request)
    {
        $resourcePath = '/v1/auth-mode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateAuthModeResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateAuthModeRequest');
    }

    /**
     * 更新镜像组
     *
     * 更新镜像组接口用于更新镜像组的标签及说明信息。该接口适用于以下场景：当镜像说明需要修改，或者镜像的标签需要修改时，用户可通过此接口修改。使用该接口的前提条件是镜像组已存在且用户具有更新权限。更新操作完成后，镜像组对应的配置文件会。若镜像组不存在、用户无权限操作或镜像正在被使用，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateImageGroup($request)
    {
        return $this->updateImageGroupWithHttpInfo($request);
    }

    public function updateImageGroupWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/images/group/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateImageGroupResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateImageGroupRequest');
    }

    /**
     * 更新服务部署配置
     *
     * 该接口适用于需要动态调整模型服务部署配置的场景
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInferDeployment($request)
    {
        return $this->updateInferDeploymentWithHttpInfo($request);
    }

    public function updateInferDeploymentWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateInferDeploymentResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateInferDeploymentRequest');
    }

    /**
     * 手动服务扩缩容
     *
     * 该接口适用于模型服务实例扩缩容。通过调用此接口，用户可以在原有服务的情况下，对服务进行扩缩容，且不会增加新的版本；包括权限验证错误、服务状态错误和参数验证错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInferDeploymentScale($request)
    {
        return $this->updateInferDeploymentScaleWithHttpInfo($request);
    }

    public function updateInferDeploymentScaleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_name}/scale';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentName'] !== null) {
            $pathParams['deployment_name'] = $localVarParams['deploymentName'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateInferDeploymentScaleResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateInferDeploymentScaleRequest');
    }

    /**
     * 变更内网申请
     *
     * 本接口用于对当前租户的内网接入申请进行状态变更操作，支持通过（APPROVE）、拒绝（REJECT）、取消（CANCEL）和重试（RETRY）等操作。适用于需要管理内网接入申请审批流程的场景。调用此接口前，确保已具备相应的变更权限，并提供有效的内网申请ID和所需的操作类型。变更成功后，内网申请的状态将更新为指定的操作结果，并记录相关日志。如果提供的内网申请ID无效、操作类型不支持或权限不足，将返回相应的异常信息，提示用户检查输入数据的有效性和权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInferIntranetConnection($request)
    {
        return $this->updateInferIntranetConnectionWithHttpInfo($request);
    }

    public function updateInferIntranetConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/intranet-connection/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateInferIntranetConnectionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateInferIntranetConnectionRequest');
    }

    /**
     * 更新服务配置
     *
     * 该接口适用于需要动态调整模型服务配置的场景，对模型的性能参数、资源池配置、服务调用配置等进行更新升级。通过调用此接口，用户可以在原有服务的情况下，升级成一个新的服务版本。调用此接口前，服务状态必须为“停止”、“失败”或“运行中”，且用户需具有修改服务的权限。更新成功后，新配置立即生效；若失败，服务保持原有配置并返回错误信息。常见异常包括参数验证错误、权限验证错误和服务状态错误。若服务ID无效、版本号不存在或用户无权限，则返回400 Bad Request或403 Forbidden；若服务状态不允许切换，则返回400 Bad Request。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInferService($request)
    {
        return $this->updateInferServiceWithHttpInfo($request);
    }

    public function updateInferServiceWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateInferServiceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateInferServiceRequest');
    }

    /**
     * 修改工作空间
     *
     * 修改工作空间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWorkspace($request)
    {
        return $this->updateWorkspaceWithHttpInfo($request);
    }

    public function updateWorkspaceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateWorkspaceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateWorkspaceRequest');
    }

    /**
     * 修改工作空间配额
     *
     * 修改工作空间配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWorkspaceQuotas($request)
    {
        return $this->updateWorkspaceQuotasWithHttpInfo($request);
    }

    public function updateWorkspaceQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateWorkspaceQuotasResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateWorkspaceQuotasRequest');
    }

    /**
     * 鉴权能否使用当前工作空间资源
     *
     * 鉴权能否使用当前工作空间资源接口用于验证用户是否有权限访问和使用当前工作空间中的资源。该接口适用于以下场景：当用户尝试访问或操作工作空间中的资源时，系统需要确认用户是否具有相应的权限。使用该接口的前提条件是用户已登录且工作空间已存在。鉴权成功后，用户可以正常访问和使用工作空间资源；若鉴权失败，接口将返回相应的错误信息，如用户无权限或工作空间不存在等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function validateAuthorization($request)
    {
        return $this->validateAuthorizationWithHttpInfo($request);
    }

    public function validateAuthorizationWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/workspaces/{workspace_id}/auth';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $pathParams['workspace_id'] = $localVarParams['workspaceId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ValidateAuthorizationResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ValidateAuthorizationRequest');
    }

    /**
     * 创建自动扩缩容策略
     *
     * 本接口用于在已部署的服务上创建定时扩缩容策略，适用于需要根据业务负载或特定时间自动调整服务实例个数的场景。调用此接口前，确保服务已成功部署并获取了有效的服务ID，并提供详细的扩缩容策略参数，如扩缩容时间、实例个数范围、条件触发器等。创建成功后，系统将根据设定的策略自动调整服务实例个数，确保服务在指定时间内的性能和可用性。如果提供的服务ID无效、参数配置错误或系统资源不足，将返回相应的异常信息，提示用户检查输入数据的有效性或联系技术支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInferDeploymentHpa($request)
    {
        return $this->createInferDeploymentHpaWithHttpInfo($request);
    }

    public function createInferDeploymentHpaWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/hpa';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferDeploymentHpaResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferDeploymentHpaRequest');
    }

    /**
     * 删除自动扩缩容策略
     *
     * 本接口用于在已部署的服务上删除定时扩缩容策略，适用于需要根据业务负载或特定时间自动删除服务的场景。调用此接口前，确保服务已成功部署并获取了有效的服务ID，部署ID。如果提供的服务ID无效、参数配置错误或系统资源不足，将返回相应的异常信息，提示用户检查输入数据的有效性或联系技术支持。暂时为非开放接口，后端清理服务下的自动扩缩容策略规则使用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInferDeploymentHpa($request)
    {
        return $this->deleteInferDeploymentHpaWithHttpInfo($request);
    }

    public function deleteInferDeploymentHpaWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/hpa';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferDeploymentHpaResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteInferDeploymentHpaRequest');
    }

    /**
     * 查看自动扩缩容策略事件
     *
     * 本接口用于在已部署的服务上查看自动扩缩容策略事件，适用于查看自动扩缩容策略变动历史记录。调用此接口前，确保获取了有效的用户项目ID，服务ID，部署ID。调用成功后，会返回策略事件ID，事件状态，规则执行信息，扩缩容前实例数，扩缩容后实例数，预设目标实例数，执行记录时间。如果提供的服务ID无效、参数配置错误或系统资源不足，将返回相应的异常信息，提示用户检查输入数据的有效性或联系技术支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInferDeploymentHpaEvents($request)
    {
        return $this->listInferDeploymentHpaEventsWithHttpInfo($request);
    }

    public function listInferDeploymentHpaEventsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/hpa/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['contentType'] !== null) {
            $headerParams[$arr['contentType']] = $localVarParams['contentType'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferDeploymentHpaEventsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListInferDeploymentHpaEventsRequest');
    }

    /**
     * 查看自动扩缩容策略
     *
     * 本接口用于在已部署的服务上查看自动扩缩容策略。调用此接口前，确保服务已成功部署并获取了有效的服务ID。查询成功后，返回服务对应的策略信息，如规则ID，规则名称，扩缩容类型，扩缩容状态，扩缩容cron表达式，目标实例数等。如果提供的服务ID无效、参数配置错误或系统资源不足，将返回相应的异常信息，提示用户检查输入数据的有效性或联系技术支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInferDeploymentHpa($request)
    {
        return $this->showInferDeploymentHpaWithHttpInfo($request);
    }

    public function showInferDeploymentHpaWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/hpa';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferDeploymentHpaResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferDeploymentHpaRequest');
    }

    /**
     * 修改自动扩缩容策略
     *
     * 本接口用于在已部署的服务上修改定时扩缩容策略，适用于需要根据业务负载或特定时间自动调整服务实例个数的场景。调用此接口前，确保服务已成功部署并获取了有效的服务ID，部署ID，并提供详细的扩缩容策略参数，如扩缩容时间、实例个数范围、条件触发器等。修改成功后，系统将根据设定的策略自动调整服务实例个数，确保服务在指定时间内的性能和可用性。如果提供的服务ID无效、参数配置错误或系统资源不足，将返回相应的异常信息，提示用户检查输入数据的有效性或联系技术支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInferDeploymentHpa($request)
    {
        return $this->updateInferDeploymentHpaWithHttpInfo($request);
    }

    public function updateInferDeploymentHpaWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/hpa';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateInferDeploymentHpaResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateInferDeploymentHpaRequest');
    }

    /**
     * 创建HRA策略
     *
     * 本接口用于在已部署且支持HRA策略的服务上创建HRA策略，适用于需要根据业务负载或特定时间自动调整服务实例个数的场景。调用此接口前，确保服务已成功部署并获取了有效的服务ID，并提供详细的hra策略参数，如hra时间、实例个数范围、条件触发器等。创建成功后，系统将根据设定的策略自动调整服务实例个数，确保服务在指定时间内的性能和可用性。如果提供的服务ID无效、参数配置错误或系统资源不足，将返回相应的异常信息，提示用户检查输入数据的有效性或联系技术支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInferHra($request)
    {
        return $this->createInferHraWithHttpInfo($request);
    }

    public function createInferHraWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/hra';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferHraResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateInferHraRequest');
    }

    /**
     * 获取推理单元配比检测信息
     *
     * 本接口用于在已部署的服务上查看推理单元配比检测信息。调用此接口前，确保服务已成功部署并获取了有效的服务ID。查询成功后，返回服务对应的策略信息，如规则ID，规则名称，策略状态，HRA结果状态等。如果提供的服务ID无效、参数配置错误或系统资源不足，将返回相应的异常信息，提示用户检查输入数据的有效性或联系技术支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInferHra($request)
    {
        return $this->showInferHraWithHttpInfo($request);
    }

    public function showInferHraWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/hra';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferHraResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowInferHraRequest');
    }

    /**
     * 修改指定部署的HRA策略配置
     *
     * 本接口用于在已创建HRA策略的服务上修改指定部署的HRA策略配置，适用于需要根据业务负载或特定时间自动调整服务实例个数的场景。调用此接口前，确保服务已成功部署并获取了有效的服务ID，部署ID，并提供详细的hra策略参数，如HRA规则列表、HRA结果状态、策略状态等。修改成功后，系统将根据设定的策略自动调整服务实例个数，确保服务在指定时间内的性能和可用性。如果提供的服务ID无效、参数配置错误或系统资源不足，将返回相应的异常信息，提示用户检查输入数据的有效性或联系技术支持。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInferHra($request)
    {
        return $this->updateInferHraWithHttpInfo($request);
    }

    public function updateInferHraWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/services/{service_id}/deployments/{deployment_id}/hra';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }
        if ($localVarParams['deploymentId'] !== null) {
            $pathParams['deployment_id'] = $localVarParams['deploymentId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateInferHraResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateInferHraRequest');
    }

    /**
     * Lite Server服务器挂载磁盘
     *
     * Lite Server服务器挂载磁盘接口用于将额外的磁盘挂载到Lite Server服务器上。该接口适用于以下场景：当用户需要扩展Lite Server服务器的存储空间以满足更大的数据存储需求时，可以通过此接口将指定的磁盘挂载到服务器上。使用该接口的前提条件是Lite Server服务器已创建且处于运行状态、或者停止状态，用户具有挂载磁盘的权限，且指定的磁盘已存在且未被其他服务器使用。挂载操作完成后，磁盘将成功挂载到Lite Server服务器上，用户可以访问和使用新增的存储空间。若Lite Server服务器不存在、指定的磁盘不存在或已被使用，或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachDevServerVolume($request)
    {
        return $this->attachDevServerVolumeWithHttpInfo($request);
    }

    public function attachDevServerVolumeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/{id}/attachvolume';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\AttachDevServerVolumeResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\AttachDevServerVolumeRequest');
    }

    /**
     * 批量操作Lite Server实例
     *
     * 批量操作Lite Server实例接口用于对多个Lite Server实例进行统一操作，如启动、停止、重启或删除等。该接口适用于以下场景：当需要对多个Lite Server实例进行相同的操作，例如在维护期间批量停止实例、更新配置后批量重启实例或清理不再需要的实例时，用户可通过此接口高效地完成批量操作。使用该接口的前提条件是目标Lite Server实例已存在且用户具有相应的操作权限。操作完成后，所有指定的Lite Server实例将根据请求完成相应的状态变更或被移除，相关资源和配置也将被相应调整或清理。若目标Lite Server实例不存在、用户无权限操作或请求参数不正确，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDevServersAction($request)
    {
        return $this->batchDevServersActionWithHttpInfo($request);
    }

    public function batchDevServersActionWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchDevServersActionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BatchDevServersActionRequest');
    }

    /**
     * Lite Server服务器绑定EIP
     *
     * Lite Server服务器绑定的EIP接口用于将弹性公网IP（EIP）绑定到Lite Server服务器上。该接口适用于以下场景：当用户需要为Lite Server服务器分配一个固定的公网IP地址，以便从外部网络访问服务器时，可以通过此接口将指定的EIP绑定到服务器上。使用该接口的前提条件是Lite Server服务器已创建且处于运行状态，用户具有绑定EIP的权限，且指定的EIP已存在且未被其他资源使用。绑定操作完成后，EIP将成功绑定到Lite Server服务器上，服务器可以通过该EIP从外部网络访问。若Lite Server服务器不存在、已处于停止状态、指定的EIP不存在或已被使用，或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function bindDevServerPublicIP($request)
    {
        return $this->bindDevServerPublicIPWithHttpInfo($request);
    }

    public function bindDevServerPublicIPWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/{id}/publicips';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\BindDevServerPublicIPResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\BindDevServerPublicIPRequest');
    }

    /**
     * 切换Lite Server服务器操作系统镜像
     *
     * 切换Lite Server服务器操作系统镜像接口用于更换Lite Server服务器当前使用的操作系统镜像。该接口适用于以下场景：当用户需要更换操作系统以适应不同的开发或测试需求时，可以通过此接口切换指定的Lite Server服务器操作系统镜像。使用该接口的前提条件是Lite Server服务器已存在且处于停止状态，用户具有切换操作系统的权限。切换操作完成后，Lite Server服务器将安装新的操作系统镜像，并重新进入运行状态，若Lite Server服务器不存在、已处于运行状态或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeDevServerOS($request)
    {
        return $this->changeDevServerOSWithHttpInfo($request);
    }

    public function changeDevServerOSWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/{id}/changeos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ChangeDevServerOSResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ChangeDevServerOSRequest');
    }

    /**
     * 切换Lite Server超节点服务器操作系统镜像
     *
     * 切换Lite Server超节点服务器操作系统镜像接口用于更换Lite Server超节点服务器当前使用的操作系统镜像。该接口适用于以下场景：当用户需要更换操作系统以适应不同的开发或测试需求时，可以通过此接口切换指定的Lite Server超节点服务器操作系统镜像。使用该接口的前提条件是Lite Server超节点服务器已存在且处于停止状态，用户具有切换操作系统的权限。切换操作完成后，Lite Server超节点服务器将安装新的操作系统镜像，并重新进入运行状态，若Lite Server超节点服务器不存在、已处于运行状态或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeHyperinstanceOS($request)
    {
        return $this->changeHyperinstanceOSWithHttpInfo($request);
    }

    public function changeHyperinstanceOSWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/{id}/changeos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ChangeHyperinstanceOSResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ChangeHyperinstanceOSRequest');
    }

    /**
     * 创建Lite Server
     *
     * 创建Lite Server接口用于创建LiteServer弹性云服务器、裸金属服务器及超节点服务器。该接口适用于以下场景：用户需要根据业务需求快速部署和配置不同类型的服务器资源。使用该接口的前提条件是用户已登录且具有创建Lite Server的权限，并且需要提供服务器类型、规格、网络配置等必要参数。创建操作完成后，系统将返回新创建的Lite Server实例信息，包括实例ID、状态等。若用户无权限、参数配置错误或资源不足，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDevServer($request)
    {
        return $this->createDevServerWithHttpInfo($request);
    }

    public function createDevServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateDevServerResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateDevServerRequest');
    }

    /**
     * 创建Lite Server任务
     *
     * 创建Lite Server任务接口用于在Lite Server上创建新的任务。该接口适用于以下场景：当用户需要在Lite Server上启动新的开发、测试或部署任务时，可以通过此接口创建并配置任务。使用该接口的前提条件是用户具有创建任务的权限，并且提供的任务配置参数符合要求。创建操作完成后，新的Lite Server任务将被成功创建，并返回任务ID和其他相关信息。若用户无权限操作、提供的参数不正确或系统资源不足，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createDevServerJob($request)
    {
        return $this->createDevServerJobWithHttpInfo($request);
    }

    public function createDevServerJobWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateDevServerJobResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateDevServerJobRequest');
    }

    /**
     * 创建Hyper Cluster
     *
     * 创建Hyper Cluster接口用于在系统中创建一个新的Hyper Cluster。该接口适用于以下场景：当用户需要使用超节点网络时，可以通过此接口创建Hyper Cluster。使用该接口的前提条件是用户已登录并具有创建Hyper Cluster的权限，且系统中已配置了必要的资源。创建操作完成后，将生成一个新的超节点网络，并返回超节点网络的详细信息，包括ID、名称、子网信息等。若用户无权限操作、系统中缺少必要的资源或配置参数无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createHyperCluster($request)
    {
        return $this->createHyperClusterWithHttpInfo($request);
    }

    public function createHyperClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyper-clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateHyperClusterResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateHyperClusterRequest');
    }

    /**
     * 创建Lite Server超节点标签
     *
     * 创建Lite Server超节点标签接口用于为Lite Server超节点添加自定义标签。该接口适用于以下场景：当用户需要对Lite Server超节点进行分类管理或标记特定信息时，可以通过此接口为指定的超节点创建标签。使用该接口的前提条件是Lite Server超节点已存在，用户具有创建标签的权限。创建操作完成后，标签将被成功添加到指定的超节点上，用户可以通过标签进行快速查找和管理。若Lite Server超节点不存在、标签已存在或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createHyperinstanceTags($request)
    {
        return $this->createHyperinstanceTagsWithHttpInfo($request);
    }

    public function createHyperinstanceTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/{id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateHyperinstanceTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateHyperinstanceTagsRequest');
    }

    /**
     * 创建RoCE网络
     *
     * 创建RoCE网络接口用于在系统中创建一个新的RoCE网络。该接口适用于以下场景：当用户需要为高性能计算或低延迟应用创建专用的RoCE网络时，可以通过此接口创建并配置RoCE网络。使用该接口的前提条件是用户已登录并具有创建RoCE网络的权限，且系统中已配置了必要的网络资源。创建操作完成后，将生成一个新的RoCE网络，并返回网络的详细信息，包括网络ID、子网信息、配置参数等。若用户无权限操作、系统中缺少必要的网络资源或网络配置参数无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createRoceNetwork($request)
    {
        return $this->createRoceNetworkWithHttpInfo($request);
    }

    public function createRoceNetworkWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/networks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateRoceNetworkResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateRoceNetworkRequest');
    }

    /**
     * 删除Lite Server实例
     *
     * 删除Lite Server实例接口用于移除已创建的Lite Server实例。该接口适用于以下场景：当Lite Server按需实例不再需要使用时或者创建失败的实例以及处于ERROR状态时，用户可通过此接口删除指定的Lite Server实例。使用该接口的前提条件是Lite Server实例已存在且用户具有管理员权限。删除操作完成后，Lite Server实例将被永久移除，相关资源也将被清理。若Lite Server实例不存在或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDevServer($request)
    {
        return $this->deleteDevServerWithHttpInfo($request);
    }

    public function deleteDevServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteDevServerResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteDevServerRequest');
    }

    /**
     * 批量删除Lite Server Job
     *
     * 批量删除Lite Server Job接口用于批量移除已创建的Lite Server Job。该接口适用于以下场景：当多个Lite Server Job已完成、配置错误或需要清理资源时，用户可以通过此接口批量删除指定的Lite Server Job。使用该接口的前提条件是目标Lite Server Job已存在且用户具有管理员权限。删除操作完成后，指定的Lite Server Job将被永久移除，相关资源和配置也将被清理。若目标Lite Server Job不存在、用户无权限操作或请求参数不正确，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteDevServerJobs($request)
    {
        return $this->deleteDevServerJobsWithHttpInfo($request);
    }

    public function deleteDevServerJobsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteDevServerJobsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteDevServerJobsRequest');
    }

    /**
     * 删除Hyper Cluster实例
     *
     * 删除Hyper Cluster实例接口用于移除已创建的Hyper Cluster。该接口适用于以下场景：当超节点网络配置错误或需要清理资源时，用户可通过此接口删除指定的超节点网络。使用该接口的前提条件是Hyper Cluster实例已存在且用户具有管理员权限。删除操作完成后，超节点网络将被永久移除，相关资源和配置也将被清理。若Hyper Cluster实例不存在或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHyperCluster($request)
    {
        return $this->deleteHyperClusterWithHttpInfo($request);
    }

    public function deleteHyperClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyper-clusters/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteHyperClusterResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteHyperClusterRequest');
    }

    /**
     * 删除Lite Server超节点实例
     *
     * 删除Lite Server超节点实例接口用于删除按需超节点实例同时移除处于ERROR状态的Lite Server超节点实例。该接口适用于以下场景：当超节点实例因创建失败、或其他原因进入ERROR状态；按需超节点实例，用户可以通过此接口删除指定的超节点实例。使用该接口的前提条件是用户已登录并具有删除超节点实例的权限，且指定的超节点实例是按需且处于运行状态、或者处于ERROR状态。删除操作完成后，指定的超节点实例将被永久移除，相关资源也将被清理。若指定的超节点实例不存在、未处于ERROR状态或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHyperinstance($request)
    {
        return $this->deleteHyperinstanceWithHttpInfo($request);
    }

    public function deleteHyperinstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteHyperinstanceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteHyperinstanceRequest');
    }

    /**
     * 删除Lite Server超节点标签
     *
     * 删除Lite Server超节点标签接口用于移除已创建的Lite Server超节点标签。该接口适用于以下场景：当用户需要清理不再需要的标签或修正标签错误时，可以通过此接口删除指定的超节点标签。使用该接口的前提条件是Lite Server超节点已存在，且该超节点上已存在要删除的标签，用户具有删除标签的权限。删除操作完成后，指定的标签将从超节点上移除，超节点的其他配置和数据保持不变。若Lite Server超节点不存在、标签不存在或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteHyperinstanceTags($request)
    {
        return $this->deleteHyperinstanceTagsWithHttpInfo($request);
    }

    public function deleteHyperinstanceTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/{id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteHyperinstanceTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteHyperinstanceTagsRequest');
    }

    /**
     * Lite Server服务器卸载磁盘
     *
     * Lite Server服务器卸载磁盘接口用于从Lite Server服务器上卸载已挂载的磁盘。该接口适用于以下场景：当用户需要释放存储资源或重新分配磁盘时，可以通过此接口卸载指定的磁盘。使用该接口的前提条件是Lite Server服务器已创建且处于运行状态、或者停止状态，用户具有卸载磁盘的权限，且指定的磁盘已挂载到服务器上。卸载操作完成后，磁盘将从Lite Server服务器上成功卸载，用户可以将其挂载到其他服务器或进行其他操作。若Lite Server服务器不存在、指定的磁盘未挂载到服务器上，或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detachDevServerVolume($request)
    {
        return $this->detachDevServerVolumeWithHttpInfo($request);
    }

    public function detachDevServerVolumeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/{id}/detachvolume/{volume_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['volumeId'] !== null) {
            $pathParams['volume_id'] = $localVarParams['volumeId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DetachDevServerVolumeResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DetachDevServerVolumeRequest');
    }

    /**
     * 查询Lite Server镜像详情
     *
     * 查询Lite Server镜像详情接口用于获取指定Lite Server镜像的详细信息。该接口适用于以下场景：当用户需要了解某个Lite Server镜像的具体配置和属性，以便在创建或调整Lite Server实例时选择合适的镜像时，可以通过此接口获取相关信息。使用该接口的前提条件是用户已登录并具有查询镜像详情的权限，且指定的镜像已存在。查询操作完成后，接口将返回指定Lite Server镜像的详细信息，包括镜像ID、名称、操作系统、版本、创建时间等。若用户无权限操作、指定的镜像不存在或镜像ID无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getDevServerImage($request)
    {
        return $this->getDevServerImageWithHttpInfo($request);
    }

    public function getDevServerImageWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/images/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetDevServerImageResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetDevServerImageRequest');
    }

    /**
     * 查询Lite Server Job详情
     *
     * 查询Lite Server Job详情接口用于获取指定Lite Server Job的详细信息。该接口适用于以下场景：当用户需要查看某个Lite Server Job的执行状态、配置参数、日志信息等详细数据时，可以通过此接口获取相关信息。使用该接口的前提条件是目标Lite Server Job已存在且用户具有查看权限。查询操作完成后，接口将返回指定Lite Server Job的详细信息，包括但不限于Job ID、状态、创建时间、执行时间、配置参数和日志等。若目标Lite Server Job不存在或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getDevServerJob($request)
    {
        return $this->getDevServerJobWithHttpInfo($request);
    }

    public function getDevServerJobWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/jobs/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetDevServerJobResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetDevServerJobRequest');
    }

    /**
     * 获取Lite Server 部署服务详情
     *
     * 根据服务id获取Lite Server部署服务详情。该接口适用于以下场景：当用户需要查看部署服务详情，以便查看已部署服务的状态、api等信息时，可以通过此接口获取服务详情。使用该接口的前提条件是用户具有查看服务的权限。查询操作完成后，接口将返回此部署服务的详细信息，包括名称、状态、描述、所用模型、实例详情等信息。若用户无权限操作或无相应id，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getDevServerJobService($request)
    {
        return $this->getDevServerJobServiceWithHttpInfo($request);
    }

    public function getDevServerJobServiceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/jobs/services/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetDevServerJobServiceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetDevServerJobServiceRequest');
    }

    /**
     * 获取Lite Server Job模板详情
     *
     * 获取Lite Server Job模板详情接口用于获取指定Lite Server Job模板的详细信息。该接口适用于以下场景：当用户需要查看某个特定Job模板的详细配置，以便了解其参数设置、使用说明等信息时，可以通过此接口获取模板详情。查询操作完成后，接口将返回指定模板的详细信息，包括模板ID、名称、描述、配置参数等。若目标模板不存在，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getDevServerJobTemplate($request)
    {
        return $this->getDevServerJobTemplateWithHttpInfo($request);
    }

    public function getDevServerJobTemplateWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/jobs/templates/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetDevServerJobTemplateResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetDevServerJobTemplateRequest');
    }

    /**
     * 查询Operation详情
     *
     * 查询Operation详情接口用于获取指定Operation的详细信息。该接口适用于以下场景：当用户需要了解某个Operation的具体执行情况和状态，以便进行故障排查或操作审计时，可以通过此接口获取相关信息。使用该接口的前提条件是用户已登录并具有查询Operation详情的权限，且指定的Operation已存在。查询操作完成后，接口将返回指定Operation的详细信息，包括Operation ID、操作类型、执行状态、开始时间、结束时间、操作结果等。若用户无权限操作、指定的Operation不存在或Operation ID无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getDevServerOperation($request)
    {
        return $this->getDevServerOperationWithHttpInfo($request);
    }

    public function getDevServerOperationWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/{id}/operation/{operation_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['operationId'] !== null) {
            $pathParams['operation_id'] = $localVarParams['operationId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetDevServerOperationResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetDevServerOperationRequest');
    }

    /**
     * 查询Hyper Cluster实例详情
     *
     * 查询Hyper Cluster实例详情接口用于获取指定Hyper Cluster实例的详细信息。该接口适用于以下场景：当用户需要了解某个超节点网络的具体配置和状态，以便进行管理和监控时，可以通过此接口获取相关信息。使用该接口的前提条件是用户已登录并具有查询Hyper Cluster详情的权限，且指定的超节点网络已存在。查询操作完成后，接口将返回指定超节点网络的详细信息，包括ID、名称、子网信息等。若用户无权限操作、指定的超节点网络不存在或ID无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getHyperCluster($request)
    {
        return $this->getHyperClusterWithHttpInfo($request);
    }

    public function getHyperClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyper-clusters/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetHyperClusterResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetHyperClusterRequest');
    }

    /**
     * 查询指定超节点实例详情
     *
     * 查询指定超节点实例详情接口用于获取特定Lite Server超节点实例的详细信息。该接口适用于以下场景：当用户需要查看某个具体超节点实例的配置、状态和使用情况时，可以通过此接口获取相关信息。使用该接口的前提条件是用户已登录并具有查询超节点实例的权限，且指定的超节点实例已存在。查询操作完成后，接口将返回指定超节点实例的详细信息，包括实例ID、操作系统、运行状态、资源使用情况等。若用户无权限操作、指定的超节点实例不存在或实例ID无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getHyperinstance($request)
    {
        return $this->getHyperinstanceWithHttpInfo($request);
    }

    public function getHyperinstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetHyperinstanceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetHyperinstanceRequest');
    }

    /**
     * 查询Lite Server超节点扩缩容支持规格列表及容量测算
     *
     * 查询Lite Server超节点扩缩容支持规格列表及容量测算接口用于获取Lite Server超节点支持的扩缩容规格列表，并进行容量测算。该接口适用于以下场景：当用户需要了解Lite Server超节点支持的扩缩容选项，以便在调整超节点资源时选择合适的规格，并评估扩缩容后的资源需求时，可以通过此接口获取相关信息。使用该接口的前提条件是用户已登录并具有查询超节点扩缩容规格的权限，且指定的超节点已存在。查询操作完成后，接口将返回支持的扩缩容规格列表及容量测算结果，包括规格ID、CPU、内存、存储等详细配置和扩缩容后的资源使用情况。若用户无权限操作、指定的超节点不存在或系统中没有可用的扩缩容规格，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getScaleEvaluationsDevServer($request)
    {
        return $this->getScaleEvaluationsDevServerWithHttpInfo($request);
    }

    public function getScaleEvaluationsDevServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/{id}/scale-evaluations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetScaleEvaluationsDevServerResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetScaleEvaluationsDevServerRequest');
    }

    /**
     * 查询实例的Tor信息
     *
     * 查询实例的Tor信息接口用于获取指定实例的Top-of-Rack（Tor）交换机相关信息。该接口适用于以下场景：当用户需要了解实例连接的Tor交换机的详细信息，以便进行网络配置时，可以通过此接口获取相关信息。使用该接口的前提条件是用户已登录并具有查询实例Tor信息的权限，且指定的实例已存在。查询操作完成后，接口将返回指定实例的Tor信息。若用户无权限操作、指定的实例不存在或实例未连接到Tor交换机，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getTopologies($request)
    {
        return $this->getTopologiesWithHttpInfo($request);
    }

    public function getTopologiesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/instance-physical-topologies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetTopologiesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\GetTopologiesRequest');
    }

    /**
     * 查询租户Lite Server列表
     *
     * 查询租户Lite Server列表接口用于获取指定租户的所有Lite Server实例信息。该接口适用于以下场景：当用户需要查看其租户下所有Lite Server实例的详细信息，以便进行管理和监控时，可以通过此接口获取相关信息。使用该接口的前提条件是用户已登录并具有查询租户Lite Server列表的权限。查询操作完成后，接口将返回租户下所有Lite Server实例的详细信息，包括实例ID、名称、状态、资源配置等。若用户无权限操作或租户下没有Lite Server实例，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllDevServers($request)
    {
        return $this->listAllDevServersWithHttpInfo($request);
    }

    public function listAllDevServersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/all';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListAllDevServersResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListAllDevServersRequest');
    }

    /**
     * 查询租户Hyperinstance列表
     *
     * 查询租户Hyperinstance列表接口用于获取指定租户的所有Hyperinstance实例信息。该接口适用于以下场景：当用户需要查看其租户下所有Hyperinstance实例的详细信息，以便进行管理和监控时，可以通过此接口获取相关信息。使用该接口的前提条件是用户已登录并具有查询租户Hyperinstance列表的权限。查询操作完成后，接口将返回租户下所有Hyperinstance实例的详细信息，包括实例ID、名称、状态、资源配置等。若用户无权限操作或租户下没有Hyperinstance实例，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllHyperinstances($request)
    {
        return $this->listAllHyperinstancesWithHttpInfo($request);
    }

    public function listAllHyperinstancesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/all';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListAllHyperinstancesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListAllHyperinstancesRequest');
    }

    /**
     * 查询规格列表
     *
     * 查询规格列表接口用于获取系统中所有可用的资源规格信息。该接口适用于以下场景：当用户需要了解可用的资源规格，以便在创建或调整Lite Server实例时选择合适的配置时，可以通过此接口获取规格列表。使用该接口的前提条件是用户已登录并具有查询规格的权限。查询操作完成后，接口将返回所有可用的资源规格信息，包括规格ID、CPU、内存、存储等详细配置。若用户无权限操作或系统中没有可用的资源规格，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDevServerFlavors($request)
    {
        return $this->listDevServerFlavorsWithHttpInfo($request);
    }

    public function listDevServerFlavorsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverType'] !== null) {
            $queryParams['server_type'] = $localVarParams['serverType'];
        }
        if ($localVarParams['arch'] !== null) {
            $queryParams['arch'] = $localVarParams['arch'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDevServerFlavorsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDevServerFlavorsRequest');
    }

    /**
     * 查询Lite Server镜像列表
     *
     * 查询Lite Server镜像列表接口用于获取系统中所有可用的Lite Server镜像信息。该接口适用于以下场景：当用户需要了解可用的Lite Server镜像，以便在创建或调整Lite Server实例时选择合适的镜像时，可以通过此接口获取镜像列表。使用该接口的前提条件是用户已登录并具有查询镜像列表的权限。查询操作完成后，接口将返回所有可用的Lite Server镜像信息，包括镜像ID、名称、架构类型等。若用户无权限操作或系统中没有可用的镜像，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDevServerImages($request)
    {
        return $this->listDevServerImagesWithHttpInfo($request);
    }

    public function listDevServerImagesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverType'] !== null) {
            $queryParams['server_type'] = $localVarParams['serverType'];
        }
        if ($localVarParams['flavorName'] !== null) {
            $queryParams['flavor_name'] = $localVarParams['flavorName'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDevServerImagesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDevServerImagesRequest');
    }

    /**
     * 获取Lite Server Job模板列表
     *
     * 获取Lite Server Job模板列表接口用于获取可用的Lite Server Job模板列表。该接口适用于以下场景：当用户需要查看可用的Job模板，以便选择合适的模板来创建新的Lite Server任务时，可以通过此接口获取模板列表。查询操作完成后，接口将返回所有可用的Lite Server Job模板列表，包括模板ID、名称、描述等信息。若系统中无可用模板，接口将返回相应的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDevServerJobTemplates($request)
    {
        return $this->listDevServerJobTemplatesWithHttpInfo($request);
    }

    public function listDevServerJobTemplatesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/jobs/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDevServerJobTemplatesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDevServerJobTemplatesRequest');
    }

    /**
     * 查询Lite Server Job列表
     *
     * 查询Lite Server Job列表接口用于获取Lite Server Job的列表信息，并支持按照状态、ID等相关字段进行过滤。该接口适用于以下场景：当用户需要查看多个Lite Server Job的概要信息，例如在监控作业状态、排查问题或进行日常管理时，可以通过此接口获取符合过滤条件的Job列表。使用该接口的前提条件是用户具有查看权限。查询操作完成后，接口将返回符合条件的Lite Server Job列表，包括每个Job的ID、状态、创建时间等基本信息。若用户无权限操作或请求参数不正确，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDevServerJobs($request)
    {
        return $this->listDevServerJobsWithHttpInfo($request);
    }

    public function listDevServerJobsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['visible'] !== null) {
            $queryParams['visible'] = $localVarParams['visible'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDevServerJobsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDevServerJobsRequest');
    }

    /**
     * 查询已绑定的EIP
     *
     * 查询已绑定的EIP接口用于获取已绑定到Lite Server服务器上的弹性公网IP（EIP）信息。该接口适用于以下场景：当用户需要查看Lite Server服务器上已绑定的EIP及其详细信息时，可以通过此接口获取相关信息。使用该接口的前提条件是用户已登录并具有查询EIP的权限，且指定的Lite Server服务器已存在。查询操作完成后，接口将返回已绑定到Lite Server服务器上的EIP的详细信息，包括EIP地址、绑定时间、状态等。若Lite Server服务器不存在、未绑定EIP或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDevServerPublicIP($request)
    {
        return $this->listDevServerPublicIPWithHttpInfo($request);
    }

    public function listDevServerPublicIPWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/{id}/publicips';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDevServerPublicIPResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDevServerPublicIPRequest');
    }

    /**
     * 查询用户所有Lite Server实例列表
     *
     * 查询用户所有Lite Server实例列表接口用于获取用户名下所有Lite Server实例的详细信息。该接口适用于以下场景：用户需要查看其所有Lite Server实例的状态、配置等信息，以便进行资源管理和监控。使用该接口的前提条件是用户已登录且具有查看Lite Server实例的权限。调用此接口后，系统将返回用户名下所有Lite Server实例的列表，包括实例ID、名称、状态、创建时间等信息。若用户无权限或未登录，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDevServers($request)
    {
        return $this->listDevServersWithHttpInfo($request);
    }

    public function listDevServersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDevServersResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListDevServersRequest');
    }

    /**
     * 查询Hyper Cluster详情列表
     *
     * 查询Hyper Cluster详情列表接口用于获取所有Hyper Cluster的详细信息。该接口适用于以下场景：当用户需要了解系统中所有超节点网络的配置和状态时，可以通过此接口获取相关信息。使用该接口的前提条件是用户已登录并具有查询Hyper Cluster详情的权限。查询操作完成后，接口将返回所有超节点网络的详细信息，包括ID、名称、子网信息等。若用户无权限操作或系统中没有Hyper Cluster，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHyperCluster($request)
    {
        return $this->listHyperClusterWithHttpInfo($request);
    }

    public function listHyperClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyper-clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListHyperClusterResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListHyperClusterRequest');
    }

    /**
     * 查询超节点hyperinstance-clusters逻辑容量测算结果
     *
     * 查询超节点hyperinstance-clusters逻辑容量测算结果接口用于获取指定超节点集群的逻辑容量测算结果。该接口适用于以下场景：当用户需要了解超节点集群的资源使用情况和容量规划，以便进行资源管理和优化时，可以通过此接口获取逻辑容量测算结果。使用该接口的前提条件是用户已登录并具有查询超节点集群逻辑容量的权限，且指定的超节点集群已存在。查询操作完成后，接口将返回指定超节点集群的逻辑容量测算结果，包括可用容量信息。若用户无权限操作、指定的超节点集群不存在或集群ID无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHyperinstanceClustersCapacity($request)
    {
        return $this->listHyperinstanceClustersCapacityWithHttpInfo($request);
    }

    public function listHyperinstanceClustersCapacityWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/cluster-capacity-evaluations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListHyperinstanceClustersCapacityResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListHyperinstanceClustersCapacityRequest');
    }

    /**
     * 查询用户所有超节点实例详情
     *
     * 查询用户所有超节点实例详情接口用于获取用户所有Lite Server超节点实例的详细信息。该接口适用于以下场景：当用户需要查看其所有超节点实例的配置、状态和使用情况时，可以通过此接口获取相关信息。使用该接口的前提条件是用户已登录并具有查询超节点实例的权限。查询操作完成后，接口将返回所有超节点实例的详细信息，包括实例ID、操作系统、运行状态、资源使用情况等。若用户无权限操作或没有超节点实例，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHyperinstances($request)
    {
        return $this->listHyperinstancesWithHttpInfo($request);
    }

    public function listHyperinstancesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListHyperinstancesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListHyperinstancesRequest');
    }

    /**
     * 查询Lite Server超节点标签
     *
     * 查询Lite Server超节点标签接口用于获取Lite Server超节点上的所有标签信息。该接口适用于以下场景：当用户需要查看或管理Lite Server超节点的标签时，可以通过此接口查询指定超节点上的所有标签。使用该接口的前提条件是Lite Server超节点已存在，用户具有查询标签的权限。查询操作完成后，接口将返回超节点上的所有标签信息，包括标签名称和相关属性。若Lite Server超节点不存在或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function queryHyperinstanceTags($request)
    {
        return $this->queryHyperinstanceTagsWithHttpInfo($request);
    }

    public function queryHyperinstanceTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/{id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\QueryHyperinstanceTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\QueryHyperinstanceTagsRequest');
    }

    /**
     * 重启Lite Server实例
     *
     * 重启Lite Server实例接口用于重启正在运行的Lite Server实例。该接口适用于以下场景：当用户需要重启实例以应用配置更改、解决运行问题或进行系统维护时，可以通过此接口重启指定的Lite Server实例。使用该接口的前提条件是Lite Server实例已创建且处于运行状态，用户具有重启实例的权限。重启操作完成后，Lite Server实例将重新启动并进入运行状态，用户可以继续使用实例提供的服务。若Lite Server实例不存在、已处于停止状态或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function rebootDevServer($request)
    {
        return $this->rebootDevServerWithHttpInfo($request);
    }

    public function rebootDevServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/{id}/reboot';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\RebootDevServerResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\RebootDevServerRequest');
    }

    /**
     * 重装Lite Server服务器操作系统镜像
     *
     * 重装Lite Server服务器操作系统镜像接口用于重新安装Lite Server服务器的操作系统镜像。该接口适用于以下场景：当用户需要更新操作系统版本、修复系统故障或重新配置系统环境时，可以通过此接口重装指定的Lite Server服务器操作系统镜像。使用该接口的前提条件是Lite Server服务器已存在且处于停止状态，用户具有重装操作系统的权限。重装操作完成后，Lite Server服务器将安装新的操作系统镜像，并重新进入运行状态，若Lite Server服务器不存在、已处于运行状态或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function reinstallDevServerOS($request)
    {
        return $this->reinstallDevServerOSWithHttpInfo($request);
    }

    public function reinstallDevServerOSWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/{id}/reinstallos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ReinstallDevServerOSResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ReinstallDevServerOSRequest');
    }

    /**
     * 缩容Lite Server超节点
     *
     * 缩容Lite Server超节点接口用于减少Lite Server超节点的资源容量。该接口适用于以下场景：当用户需要降低Lite Server超节点的资源使用，以节省成本或优化资源分配时，可以通过此接口进行缩容。使用该接口的前提条件是用户已登录并具有缩容超节点的权限，且指定的超节点已存在且处于运行状态。缩容操作完成后，超节点的资源容量将根据指定的规格进行调整，用户可以立即使用减少后的资源。若用户无权限操作、指定的超节点不存在、超节点已处于最小容量或指定的缩容规格无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function scaleDownHyperinstance($request)
    {
        return $this->scaleDownHyperinstanceWithHttpInfo($request);
    }

    public function scaleDownHyperinstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/{id}/live-scale-down';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ScaleDownHyperinstanceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ScaleDownHyperinstanceRequest');
    }

    /**
     * 扩容Lite Server超节点
     *
     * 扩容Lite Server超节点接口用于增加Lite Server超节点的资源容量。该接口适用于以下场景：当用户需要提升Lite Server超节点的性能，以支持更多的负载或更大的数据处理需求时，可以通过此接口进行扩容。使用该接口的前提条件是用户已登录并具有扩容超节点的权限，且指定的超节点已存在且处于运行状态。扩容操作完成后，超节点的资源容量将根据指定的规格进行调整，用户可以立即使用增加的资源。若用户无权限操作、指定的超节点不存在、超节点已处于最大容量或指定的扩容规格无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function scaleUpHyperinstance($request)
    {
        return $this->scaleUpHyperinstanceWithHttpInfo($request);
    }

    public function scaleUpHyperinstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/{id}/live-scale-up';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ScaleUpHyperinstanceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ScaleUpHyperinstanceRequest');
    }

    /**
     * 查询Lite Server实例详情
     *
     * 查询Lite Server实例详情接口用于获取指定Lite Server实例的详细信息。该接口适用于以下场景：用户需要查看特定Lite Server实例的配置、状态、网络信息等详细数据，以便进行故障排查、资源管理和监控。使用该接口的前提条件是用户已登录且具有查看Lite Server实例的权限，并且需要提供有效的实例ID。查询操作完成后，系统将返回指定Lite Server实例的详细信息，包括实例ID、名称、状态、配置、网络配置等。若用户无权限、实例ID无效或实例不存在，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showDevServer($request)
    {
        return $this->showDevServerWithHttpInfo($request);
    }

    public function showDevServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowDevServerResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowDevServerRequest');
    }

    /**
     * 启动Lite Server实例
     *
     * 启动Lite Server实例接口用于启动已创建但未运行的Lite Server实例。该接口适用于以下场景：当用户需要开始使用Lite Server实例进行开发或测试时，可以通过此接口启动指定的Lite Server实例。使用该接口的前提条件是Lite Server实例已创建且处于停止状态，用户具有启动实例的权限。若Lite Server实例不存在、已处于运行状态或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startDevServer($request)
    {
        return $this->startDevServerWithHttpInfo($request);
    }

    public function startDevServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/{id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\StartDevServerResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\StartDevServerRequest');
    }

    /**
     * 启动Lite Server超节点服务器
     *
     * 启动Lite Server超节点服务器接口用于启动已创建但未运行的Lite Server超节点服务器。该接口适用于以下场景：当用户需要开始使用Lite Server超节点服务器进行开发或测试时，可以通过此接口启动指定的超节点服务器。使用该接口的前提条件是Lite Server超节点服务器已创建且处于停止状态，用户具有启动超节点服务器的权限。启动操作完成后，超节点服务器将进入运行状态，用户可以访问和使用服务器提供的服务。若Lite Server超节点服务器不存在、已处于运行状态或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startHyperinstance($request)
    {
        return $this->startHyperinstanceWithHttpInfo($request);
    }

    public function startHyperinstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/{id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\StartHyperinstanceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\StartHyperinstanceRequest');
    }

    /**
     * 停止Lite Server实例
     *
     * 停止Lite Server实例接口用于停止正在运行的Lite Server实例。该接口适用于以下场景：当用户需要停止Lite Server实例，以节省资源或进行维护时，可以通过此接口停止指定的Lite Server实例。使用该接口的前提条件是Lite Server实例已创建且处于运行状态，用户具有停止实例的权限。若Lite Server实例不存在、已处于停止状态或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopDevServer($request)
    {
        return $this->stopDevServerWithHttpInfo($request);
    }

    public function stopDevServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/{id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\StopDevServerResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\StopDevServerRequest');
    }

    /**
     * 停止Lite Server超节点服务器
     *
     * 停止Lite Server超节点服务器接口用于停止正在运行的Lite Server超节点服务器。该接口适用于以下场景：当用户需要暂停使用Lite Server超节点服务器，以节省资源或进行维护时，可以通过此接口停止指定的超节点服务器。使用该接口的前提条件是Lite Server超节点服务器已创建且处于运行状态或者停止失败状态，用户具有停止超节点服务器的权限。停止操作完成后，超节点服务器将进入停止状态，不再提供服务。若Lite Server超节点服务器不存在、已处于停止状态或用户无权限操作，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopHyperinstance($request)
    {
        return $this->stopHyperinstanceWithHttpInfo($request);
    }

    public function stopHyperinstanceWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/hyperinstance/{id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\StopHyperinstanceResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\StopHyperinstanceRequest');
    }

    /**
     * 实时同步用户指定Lite Server实例状态
     *
     * 实时同步用户Lite Server实例状态接口用于实时获取并同步用户Lite Server实例的当前状态。该接口适用于以下场景：用户需要实时监控其Lite Server实例的运行状态，确保实例正常运行或及时发现并处理异常情况。使用该接口的前提条件是用户已登录并具有相应的权限，且Lite Server实例已创建并处于运行状态。接口调用成功后，将返回Lite Server实例的最新状态信息，包括但不限于实例ID、运行状态、资源使用情况等。若用户无权限操作或Lite Server实例不存在，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function syncDevServers($request)
    {
        return $this->syncDevServersWithHttpInfo($request);
    }

    public function syncDevServersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\SyncDevServersResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\SyncDevServersRequest');
    }

    /**
     * 修改Lite Server实例名称
     *
     * 修改DevServer实例名称接口用于更改已创建的DevServer实例的名称。该接口适用于以下场景：当用户需要对DevServer实例进行重命名以更好地反映实例的功能或用途时，或者在实例名称不再符合当前项目命名规范时进行更新。使用该接口的前提条件是DevServer实例已存在且用户具有对该实例的管理权限。修改操作完成后，实例的新名称将立即生效，并在所有相关视图和记录中更新。若DevServer实例不存在、用户无权限操作或新名称不符合命名规则，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateDevServer($request)
    {
        return $this->updateDevServerWithHttpInfo($request);
    }

    public function updateDevServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/dev-servers/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateDevServerResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateDevServerRequest');
    }

    /**
     * 通过运行的实例保存成容器镜像
     *
     * 通过运行的实例保存成容器镜像接口用于将正在运行的实例保存为容器镜像。该接口适用于以下场景：用户需要保存当前运行环境以便后续使用或开发时，可通过此接口将实例保存为镜像。使用该接口的前提条件是用户已登录系统并具有访问目标实例的权限，同时实例必须处于运行状态。调用该接口后，系统将保存实例的当前状态为容器镜像，包括安装的依赖包和插件。若用户无权限访问指定实例或实例未运行，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createImage($request)
    {
        return $this->createImageWithHttpInfo($request);
    }

    public function createImageWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{id}/create-image';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateImageResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateImageRequest');
    }

    /**
     * 创建Notebook实例
     *
     * 创建Notebook实例接口用于根据指定的参数创建一个新的Notebook实例。该接口适用于以下场景：用户需要为特定任务或项目创建Notebook实例时，可通过此接口指定实例规格、AI引擎镜像和存储配置。使用该接口的前提条件是用户已登录系统并具有创建Notebook实例的权限，同时需提供有效的创建参数。调用该接口后，系统将异步创建Notebook实例，用户可通过查询接口获取实例状态。创建完成后，用户可通过网页或SSH客户端访问Notebook实例。若用户无权限创建实例或参数无效，接口将返回相应的错误信息。异常情况包括：若系统资源不足，或创建操作失败，接口将返回相应的错误提示。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNotebook($request)
    {
        return $this->createNotebookWithHttpInfo($request);
    }

    public function createNotebookWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateNotebookResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateNotebookRequest');
    }

    /**
     * 添加资源标签
     *
     * 添加资源标签接口用于为指定的Notebook实例添加标签信息。该接口适用于以下场景：用户需要为Notebook实例添加标签信息，可通过此接口添加一个或多个标签。使用该接口的前提条件是用户已登录系统并具有操作目标Notebook实例的权限。调用该接口后，系统将为指定的Notebook实例添加标签，若标签的key已存在，则覆盖原有的value值。若用户无权限操作指定Notebook实例或输入的参数无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNotebookTags($request)
    {
        return $this->createNotebookTagsWithHttpInfo($request);
    }

    public function createNotebookTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{resource_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateNotebookTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateNotebookTagsRequest');
    }

    /**
     * 删除Notebook实例
     *
     * 删除Notebook实例接口用于移除已创建的Notebook实例及其相关资源。该接口适用于以下场景：用户需要清理不再使用的Notebook实例时，可通过此接口删除指定的Notebook实例，包括其容器和所有存储资源。使用该接口的前提条件是用户已登录系统并具有操作目标Notebook实例的权限。调用该接口后，系统将删除指定的Notebook实例及其相关资源。若用户无权限操作指定实例或Notebook实例未停止，接口将返回相应的错误信息。异常情况包括：若指定的Notebook实例不存在，或删除操作失败，接口将返回相应的错误提示。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteNotebook($request)
    {
        return $this->deleteNotebookWithHttpInfo($request);
    }

    public function deleteNotebookWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteNotebookResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteNotebookRequest');
    }

    /**
     * 删除资源标签
     *
     * 删除资源标签接口用于移除指定Notebook实例的标签信息。该接口适用于以下场景：用户需要清理或重新组织Notebook实例的标签时，可通过此接口删除单个或多个标签。使用该接口的前提条件是用户已登录系统并具有操作目标Notebook实例的权限。调用该接口后，系统将删除指定的标签，若标签不存在则不进行操作。若用户无权限操作指定Notebook实例或输入的参数无效，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteNotebookTags($request)
    {
        return $this->deleteNotebookTagsWithHttpInfo($request);
    }

    public function deleteNotebookTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{resource_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteNotebookTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteNotebookTagsRequest');
    }

    /**
     * 查询所有Notebook实例列表
     *
     * 查询所有Notebook实例列表接口用于获取所有已创建的Notebook实例信息。该接口适用于以下场景：用户需要全面了解当前系统中所有Notebook实例的状态、资源使用情况或管理多个Notebook实例时，可通过此接口获取相关信息。使用该接口的前提条件是用户已创建Notebook实例，并且具有相应的查询权限。调用成功后，系统将返回所有Notebook实例的列表，包含实例ID、状态、创建时间等详细信息。若用户无权限访问，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllNotebooks($request)
    {
        return $this->listAllNotebooksWithHttpInfo($request);
    }

    public function listAllNotebooksWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/all';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['feature'] !== null) {
            $queryParams['feature'] = $localVarParams['feature'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['poolId'] !== null) {
            $queryParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['flavor'] !== null) {
            $queryParams['flavor'] = $localVarParams['flavor'];
        }
        if ($localVarParams['imageId'] !== null) {
            $queryParams['image_id'] = $localVarParams['imageId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['billing'] !== null) {
            $queryParams['billing'] = $localVarParams['billing'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListAllNotebooksResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListAllNotebooksRequest');
    }

    /**
     * 查询用户所有Notebook资源池实例详情
     *
     * 查询用户所有Notebook资源池实例详情接口用于获取用户关联的所有Notebook资源池实例的详细信息。该接口适用于以下场景：当用户创建Notebook示例需要选择资源池时，可通过此接口获取所有资源池实例列表信息。使用该接口的前提条件是用户已注册并登录系统，且具有查看资源池实例的权限。调用成功后，接口将返回包含所有资源池实例的详细信息列表，包括实例名称、状态、节点规格等。若用户未登录、无权限访问或系统内部出现错误，接口将返回相应的错误信息，如未认证、无权限或服务不可用等。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAuthoringClusters($request)
    {
        return $this->listAuthoringClustersWithHttpInfo($request);
    }

    public function listAuthoringClustersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/authoring/clusters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['scope'] !== null) {
            $queryParams['scope'] = $localVarParams['scope'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListAuthoringClustersResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListAuthoringClustersRequest');
    }

    /**
     * 查询当前用户指定特性的开关及配额
     *
     * 查询当前用户指定特性的开关及配额接口用于获取指定特性在当前用户下的开关状态及配额信息。该接口适用于以下场景：当用户需要了解特定特性是否已开启、查看配额限制或监控已使用的资源情况时，可通过此接口查询相关信息。使用该接口的前提条件是用户已登录且具有查询权限，同时指定的特性必须存在。调用该接口后，系统将返回该特性是否已开启、配额总量及已使用的资源情况等详细信息。若用户无权限查询、特性不存在或系统出现异常，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFeatures($request)
    {
        return $this->listFeaturesWithHttpInfo($request);
    }

    public function listFeaturesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/authoring/features/{feature}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['feature'] !== null) {
            $pathParams['feature'] = $localVarParams['feature'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListFeaturesResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListFeaturesRequest');
    }

    /**
     * 查询Notebook支持的有效规格列表
     *
     * 查询Notebook支持的有效规格列表接口用于获取运行Notebook实例时可使用的规格选项。该接口适用于以下场景：用户需要了解Notebook实例支持的配置选项时，可通过此接口查询可用的规格列表。使用该接口的前提条件是用户已登录系统并具有访问目标Notebook实例的权限。调用该接口后，系统将返回Notebook实例支持的有效规格列表，包括内存、CPU等配置信息。若用户无权限访问指定实例或Notebook实例未运行，接口将返回相应的错误信息。
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
        $resourcePath = '/v1/{project_id}/notebooks/flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['flavorType'] !== null) {
            $queryParams['flavor_type'] = $localVarParams['flavorType'];
        }
        if ($localVarParams['feature'] !== null) {
            $queryParams['feature'] = $localVarParams['feature'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListFlavorsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListFlavorsRequest');
    }

    /**
     * 查询Notebook实例列表
     *
     * 查询Notebook实例列表接口用于获取满足特定条件的Notebook实例信息。该接口适用于以下场景：用户管理多个Notebook实例或查看特定状态的Notebook实例时，可通过此接口获取相关信息。使用该接口的前提条件是用户已创建Notebook实例，并且具有相应的查询权限。调用成功后，系统将返回符合条件的Notebook实例列表，包含实例ID、状态、创建时间等详细信息。若用户无权限访问或查询条件不明确，接口将返回相应的错误信息或空列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNotebooks($request)
    {
        return $this->listNotebooksWithHttpInfo($request);
    }

    public function listNotebooksWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['feature'] !== null) {
            $queryParams['feature'] = $localVarParams['feature'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['poolId'] !== null) {
            $queryParams['pool_id'] = $localVarParams['poolId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['owner'] !== null) {
            $queryParams['owner'] = $localVarParams['owner'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['flavor'] !== null) {
            $queryParams['flavor'] = $localVarParams['flavor'];
        }
        if ($localVarParams['imageId'] !== null) {
            $queryParams['image_id'] = $localVarParams['imageId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['billing'] !== null) {
            $queryParams['billing'] = $localVarParams['billing'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListNotebooksResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListNotebooksRequest');
    }

    /**
     * Notebook时长续约
     *
     * Notebook时长续约接口用于延长运行中的Notebook实例的运行时间。该接口适用于以下场景：用户需要延长Notebook实例的使用时间以完成长时间任务时，可通过此接口延长指定实例的运行时间。使用该接口的前提条件是用户已登录系统并具有操作目标Notebook实例的权限，同时Notebook实例必须处于运行状态。调用该接口后，系统将延长指定Notebook实例的运行时间，用户可继续使用。若用户无权限操作指定实例或Notebook实例未运行，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function renewLease($request)
    {
        return $this->renewLeaseWithHttpInfo($request);
    }

    public function renewLeaseWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{id}/lease';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['duration'] !== null) {
            $queryParams['duration'] = $localVarParams['duration'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\RenewLeaseResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\RenewLeaseRequest');
    }

    /**
     * 查询Notebook资源池详情
     *
     * 查询Notebook资源池详情接口用于获取资源池的详细信息。该接口适用于以下场景：当用户需要创建Notebook实例作业时，可通过此接口查询指定集群的详细信息。使用该接口的前提条件是集群已成功纳管且用户具有相应的访问权限。调用该接口后，系统将返回集群的实例ID、名称、Flavor规格、实例状态以及实例可打开的URL等详细信息。若集群不存在、未被纳管或用户无权限访问，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCluster($request)
    {
        return $this->showClusterWithHttpInfo($request);
    }

    public function showClusterWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/authoring/clusters/{cluster_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowClusterResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowClusterRequest');
    }

    /**
     * 查询运行中的Notebook可用时长
     *
     * 查询运行中的Notebook可用时长接口用于获取正在运行的Notebook实例的剩余可用时间。该接口适用于以下场景：用户需要了解Notebook实例的剩余运行时间以合理安排任务时，可通过此接口查询指定实例的可用时长。使用该接口的前提条件是用户已登录系统并具有访问目标Notebook实例的权限，同时Notebook实例必须处于运行状态。调用该接口后，系统将返回指定Notebook实例的可用时长信息。若用户无权限访问指定实例或Notebook实例未运行，接口将返回相应的错误信息。异常情况包括：若指定的Notebook实例不存在，或查询操作失败，接口将返回相应的错误提示。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLease($request)
    {
        return $this->showLeaseWithHttpInfo($request);
    }

    public function showLeaseWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{id}/lease';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowLeaseResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowLeaseRequest');
    }

    /**
     * 查询Notebook实例详情
     *
     * 查询Notebook实例详情接口用于获取指定Notebook实例的详细信息。该接口适用于以下场景：用户需要查看特定Notebook实例的详细配置、运行状态或获取访问链接时，可通过此接口获取相关信息。使用该接口的前提条件是Notebook实例已存在且用户具有相应的查询权限。调用成功后，系统将返回实例ID、名称、规格、镜像、实例状态和实例可打开的URL等详细信息。若实例不存在或用户无权限访问，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNotebook($request)
    {
        return $this->showNotebookWithHttpInfo($request);
    }

    public function showNotebookWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowNotebookResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowNotebookRequest');
    }

    /**
     * 查询Notebook资源类型下的标签
     *
     * 查询Notebook资源类型下的标签接口用于获取用户当前project下Notebook实例的标签信息。该接口适用于以下场景：用户需要管理或统计Notebook资源时，可通过此接口查询特定标签或所有标签的Notebook实例。使用该接口的前提条件是用户已登录系统并具有访问权限，同时可指定工作空间或默认查询所有工作空间。调用该接口后，系统将返回指定Notebook实例的标签列表，包括标签名称、标签值等信息。若用户无权限，则返回相应的异常信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNotebookTags($request)
    {
        return $this->showNotebookTagsWithHttpInfo($request);
    }

    public function showNotebookTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowNotebookTagsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowNotebookTagsRequest');
    }

    /**
     * 查询Notebook支持的可切换规格列表
     *
     * 查询Notebook支持的可切换规格列表接口用于获取创建Notebook实例时可选择的规格选项。该接口适用于以下场景：用户需要了解Notebook实例支持的配置选项时，可通过此接口查询可用的规格列表。使用该接口的前提条件是用户已登录系统并具有创建Notebook实例的权限。调用该接口后，系统将返回Notebook实例支持的可切换规格列表，包括内存、CPU等配置信息。若用户无权限创建Notebook实例，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSwitchableFlavors($request)
    {
        return $this->showSwitchableFlavorsWithHttpInfo($request);
    }

    public function showSwitchableFlavorsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{id}/flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowSwitchableFlavorsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowSwitchableFlavorsRequest');
    }

    /**
     * 启动Notebook实例
     *
     * 启动Notebook实例接口用于启动已创建的Notebook实例。该接口适用于以下场景：用户需要开始运行Notebook实例以进行数据处理、模型训练或开发时，可通过此接口启动指定的Notebook实例。使用该接口的前提条件是用户已登录系统并具有操作目标Notebook实例的权限，同时Notebook实例必须处于停止状态且配置正确。调用该接口后，系统将启动指定的Notebook实例，用户可开始使用。若用户无权限操作指定实例或Notebook实例未停止，接口将返回相应的错误信息。异常情况包括：若指定的Notebook实例不存在，或启动操作失败，接口将返回相应的错误提示。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startNotebook($request)
    {
        return $this->startNotebookWithHttpInfo($request);
    }

    public function startNotebookWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['duration'] !== null) {
            $queryParams['duration'] = $localVarParams['duration'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\StartNotebookResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\StartNotebookRequest');
    }

    /**
     * 停止Notebook实例
     *
     * 停止Notebook实例接口用于停止正在运行的Notebook实例。该接口适用于以下场景：用户需要释放Notebook实例占用的资源或结束当前运行的任务时，可通过此接口停止指定的Notebook实例。使用该接口的前提条件是用户已登录系统并具有操作目标Notebook实例的权限，同时Notebook实例必须处于运行状态。调用该接口后，系统将停止指定的Notebook实例，释放相关资源。若用户无权限操作指定实例或Notebook实例未运行，接口将返回相应的错误信息。异常情况包括：若指定的Notebook实例不存在，或停止操作失败，接口将返回相应的错误提示。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopNotebook($request)
    {
        return $this->stopNotebookWithHttpInfo($request);
    }

    public function stopNotebookWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\StopNotebookResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\StopNotebookRequest');
    }

    /**
     * 更新Notebook实例
     *
     * 更新Notebook实例接口用于修改Notebook实例的配置信息，包括名称、描述、规格和镜像等。该接口适用于以下场景：用户需要调整Notebook实例的配置以适应新的需求时，可通过此接口更新实例的详细信息。使用该接口的前提条件是用户已登录系统并具有操作目标Notebook实例的权限，同时Notebook实例必须处于停止状态。调用该接口后，系统将更新指定Notebook实例的配置信息。若用户无权限操作指定实例或Notebook实例未停止，接口将返回相应的错误信息。异常情况包括：若指定的Notebook实例不存在，或更新参数无效，接口将返回相应的错误提示。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNotebook($request)
    {
        return $this->updateNotebookWithHttpInfo($request);
    }

    public function updateNotebookWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/notebooks/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['id'] = $localVarParams['id'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateNotebookResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateNotebookRequest');
    }

    /**
     * 新建Workflow工作流
     *
     * 创建Workflow工作流。[可参考[如何开发Workflow](https://support.huaweicloud.com/usermanual-standard-modelarts/modelarts_workflow_0292.html)，创建工作流。](tag:hc)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkflow($request)
    {
        return $this->createWorkflowWithHttpInfo($request);
    }

    public function createWorkflowWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowRequest');
    }

    /**
     * 创建在线服务包
     *
     * 计费工作流购买资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkflowPurchasePool($request)
    {
        return $this->createWorkflowPurchasePoolWithHttpInfo($request);
    }

    public function createWorkflowPurchasePoolWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/service/packages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowPurchasePoolResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowPurchasePoolRequest');
    }

    /**
     * 在线服务鉴权
     *
     * 计费工作流在线服务鉴权。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkflowServiceAuth($request)
    {
        return $this->createWorkflowServiceAuthWithHttpInfo($request);
    }

    public function createWorkflowServiceAuthWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/service/auth';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowServiceAuthResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowServiceAuthRequest');
    }

    /**
     * 删除Workflow工作流
     *
     * 通过ID删除Workflow工作流。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWorkflow($request)
    {
        return $this->deleteWorkflowWithHttpInfo($request);
    }

    public function deleteWorkflowWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteWorkflowResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteWorkflowRequest');
    }

    /**
     * 获取Workflow工作流列表
     *
     * 展示Workflow工作流列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkflows($request)
    {
        return $this->listWorkflowsWithHttpInfo($request);
    }

    public function listWorkflowsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['labels'] !== null) {
            $queryParams['labels'] = $localVarParams['labels'];
        }
        if ($localVarParams['templateId'] !== null) {
            $queryParams['template_id'] = $localVarParams['templateId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['searchType'] !== null) {
            $queryParams['search_type'] = $localVarParams['searchType'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListWorkflowsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListWorkflowsRequest');
    }

    /**
     * 查询Workflow工作流
     *
     * 通过ID查询Workflow工作流详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkflow($request)
    {
        return $this->showWorkflowWithHttpInfo($request);
    }

    public function showWorkflowWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowRequest');
    }

    /**
     * Workflow列表所有标签
     *
     * Workflow列表所有标签接口用于获取指定项目下所有工作流的标签信息。
     * 该接口适用于以下场景：当用户需要了解项目中所有工作流的标签配置，以便进行资源管理和筛选时，可以通过此接口获取标签列表。使用该接口的前提条件是用户已登录并具有查看工作流标签的权限。响应消息体中包含每个工作流的标签信息，如标签键和值。若用户无权限或项目下无工作流，接口将返回相应的错误信息或空列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkflowLabels($request)
    {
        return $this->showWorkflowLabelsWithHttpInfo($request);
    }

    public function showWorkflowLabelsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/labels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['templateId'] !== null) {
            $queryParams['template_id'] = $localVarParams['templateId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowLabelsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowLabelsRequest');
    }

    /**
     * 总览Workflow工作流
     *
     * 获取Workflow工作流统计信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkflowsOverview($request)
    {
        return $this->showWorkflowsOverviewWithHttpInfo($request);
    }

    public function showWorkflowsOverviewWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/overview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['searchType'] !== null) {
            $queryParams['search_type'] = $localVarParams['searchType'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowsOverviewResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowsOverviewRequest');
    }

    /**
     * 查询Workflow待办事项
     *
     * 获取Workflow待办列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkflowsTodolist($request)
    {
        return $this->showWorkflowsTodolistWithHttpInfo($request);
    }

    public function showWorkflowsTodolistWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/todolist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowsTodolistResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowsTodolistRequest');
    }

    /**
     * 修改Workflow工作流
     *
     * 更新Workflow工作流信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWorkflow($request)
    {
        return $this->updateWorkflowWithHttpInfo($request);
    }

    public function updateWorkflowWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateWorkflowResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateWorkflowRequest');
    }

    /**
     * 新建Workflow Execution
     *
     * 创建Workflow Execution。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkflowExecution($request)
    {
        return $this->createWorkflowExecutionWithHttpInfo($request);
    }

    public function createWorkflowExecutionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/executions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowExecutionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowExecutionRequest');
    }

    /**
     * 管理Workflow Execution
     *
     * 本接口支持对Workflow Execution进行停止或重跑操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkflowExecutionsActions($request)
    {
        return $this->createWorkflowExecutionsActionsWithHttpInfo($request);
    }

    public function createWorkflowExecutionsActionsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/executions/{execution_id}/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowExecutionsActionsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowExecutionsActionsRequest');
    }

    /**
     * 管理Workflow StepExecution
     *
     * 本接口支持对Workflow StepExecution进行重试、停止和继续操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkflowStepExecutionsActions($request)
    {
        return $this->createWorkflowStepExecutionsActionsWithHttpInfo($request);
    }

    public function createWorkflowStepExecutionsActionsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/executions/{execution_id}/step-executions/{step_execution_id}/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
        }
        if ($localVarParams['stepExecutionId'] !== null) {
            $pathParams['step_execution_id'] = $localVarParams['stepExecutionId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowStepExecutionsActionsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowStepExecutionsActionsRequest');
    }

    /**
     * 删除Workflow Execution
     *
     * 通过ID删除Workflow Execution。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWorkflowExecution($request)
    {
        return $this->deleteWorkflowExecutionWithHttpInfo($request);
    }

    public function deleteWorkflowExecutionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/executions/{execution_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteWorkflowExecutionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteWorkflowExecutionRequest');
    }

    /**
     * 获取Workflow Execution列表的所有标签
     *
     * 获取Workflow Execution列表的所有标签接口用于查询指定工作流执行记录中的所有标签。
     * 该接口适用于以下场景：当用户需要查看工作流执行记录的标签信息，以便进行分类、筛选或统计时，可以通过此接口获取所有标签的列表。使用该接口的前提条件是用户已登录且具有查看工作流执行记录的权限。接口响应消息体中包含每个标签的详细信息，如标签键和标签值。若用户无权限操作或指定的工作流执行记录不存在，接口将返回相应的错误信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listExecutionLabels($request)
    {
        return $this->listExecutionLabelsWithHttpInfo($request);
    }

    public function listExecutionLabelsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/executions/labels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListExecutionLabelsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListExecutionLabelsRequest');
    }

    /**
     * 获取Execution列表
     *
     * 查询Workflow下的执行记录列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkflowExecutions($request)
    {
        return $this->listWorkflowExecutionsWithHttpInfo($request);
    }

    public function listWorkflowExecutionsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/executions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workspaceId'] !== null) {
            $queryParams['workspace_id'] = $localVarParams['workspaceId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['labels'] !== null) {
            $queryParams['labels'] = $localVarParams['labels'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['sceneId'] !== null) {
            $queryParams['scene_id'] = $localVarParams['sceneId'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListWorkflowExecutionsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListWorkflowExecutionsRequest');
    }

    /**
     * 获取StepExecution列表
     *
     * 查询指定工作流中各步骤的执行情况。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkflowStepExecution($request)
    {
        return $this->listWorkflowStepExecutionWithHttpInfo($request);
    }

    public function listWorkflowStepExecutionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/step-executions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListWorkflowStepExecutionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ListWorkflowStepExecutionRequest');
    }

    /**
     * 查询Workflow Execution
     *
     * 通过ID查询Workflow Execution详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkflowExecution($request)
    {
        return $this->showWorkflowExecutionWithHttpInfo($request);
    }

    public function showWorkflowExecutionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/executions/{execution_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowExecutionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowExecutionRequest');
    }

    /**
     * 获取Workflow工作流节点度量信息
     *
     * 获取Workflow工作流节点的度量信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkflowStepExecutionMetrics($request)
    {
        return $this->showWorkflowStepExecutionMetricsWithHttpInfo($request);
    }

    public function showWorkflowStepExecutionMetricsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/executions/{execution_id}/step-executions/{step_execution_id}/metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
        }
        if ($localVarParams['stepExecutionId'] !== null) {
            $pathParams['step_execution_id'] = $localVarParams['stepExecutionId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowStepExecutionMetricsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowStepExecutionMetricsRequest');
    }

    /**
     * 更新Workflow Execution
     *
     * 通过ID更新Workflow Exectuion。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWorkflowExecution($request)
    {
        return $this->updateWorkflowExecutionWithHttpInfo($request);
    }

    public function updateWorkflowExecutionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/executions/{execution_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
        }
        if ($localVarParams['executionId'] !== null) {
            $pathParams['execution_id'] = $localVarParams['executionId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateWorkflowExecutionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateWorkflowExecutionRequest');
    }

    /**
     * 创建工作流定时调度
     *
     * 创建Workflow定时调度。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkflowSchedule($request)
    {
        return $this->createWorkflowScheduleWithHttpInfo($request);
    }

    public function createWorkflowScheduleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/schedules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowScheduleResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowScheduleRequest');
    }

    /**
     * 删除工作流定时调度信息
     *
     * 删除工作流调度信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWorkflowScheduleId($request)
    {
        return $this->deleteWorkflowScheduleIdWithHttpInfo($request);
    }

    public function deleteWorkflowScheduleIdWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/schedules/{schedule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
        }
        if ($localVarParams['scheduleId'] !== null) {
            $pathParams['schedule_id'] = $localVarParams['scheduleId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteWorkflowScheduleIdResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteWorkflowScheduleIdRequest');
    }

    /**
     * 查询工作流定时调度详情
     *
     * 查询工作流调度详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkflowSchedule($request)
    {
        return $this->showWorkflowScheduleWithHttpInfo($request);
    }

    public function showWorkflowScheduleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/schedules/{schedule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
        }
        if ($localVarParams['scheduleId'] !== null) {
            $pathParams['schedule_id'] = $localVarParams['scheduleId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowScheduleResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowScheduleRequest');
    }

    /**
     * 查询工作流定时调度列表
     *
     * 查询工作流定时调度列表接口用于获取指定项目下所有工作流的定时调度信息。
     * 该接口适用于以下场景：当用户需要查看项目中所有工作流的定时调度配置，以便进行任务管理和调度优化时，可以通过此接口获取定时调度列表。使用该接口的前提条件是用户已登录并具有查看工作流定时调度的权限。响应消息体中包含每个工作流的定时调度信息，如调度ID、调度时间、状态等。若用户无权限或项目下无工作流定时调度，接口将返回相应的错误信息或空列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkflowScheduleList($request)
    {
        return $this->showWorkflowScheduleListWithHttpInfo($request);
    }

    public function showWorkflowScheduleListWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/schedules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowScheduleListResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowScheduleListRequest');
    }

    /**
     * 更新工作流定时调度信息
     *
     * 更新WorkflowSchedule信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWorkflowSchedule($request)
    {
        return $this->updateWorkflowScheduleWithHttpInfo($request);
    }

    public function updateWorkflowScheduleWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/schedules/{schedule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
        }
        if ($localVarParams['scheduleId'] !== null) {
            $pathParams['schedule_id'] = $localVarParams['scheduleId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateWorkflowScheduleResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateWorkflowScheduleRequest');
    }

    /**
     * 新建消息订阅Subscription
     *
     * 为Workflow工作流添加消息订阅功能。工作流已订阅的事件发生时，会产生消息提醒。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkflowSubscriptions($request)
    {
        return $this->createWorkflowSubscriptionsWithHttpInfo($request);
    }

    public function createWorkflowSubscriptionsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/subscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowSubscriptionsResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\CreateWorkflowSubscriptionsRequest');
    }

    /**
     * 删除消息订阅Subscription
     *
     * 删除已订阅的消息订阅Subscription。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWorkflowSubscription($request)
    {
        return $this->deleteWorkflowSubscriptionWithHttpInfo($request);
    }

    public function deleteWorkflowSubscriptionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/subscriptions/{subscription_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
        }
        if ($localVarParams['subscriptionId'] !== null) {
            $pathParams['subscription_id'] = $localVarParams['subscriptionId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteWorkflowSubscriptionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\DeleteWorkflowSubscriptionRequest');
    }

    /**
     * 查询消息订阅Subscription详情
     *
     * 查询Workflow工作流已订阅的订阅信息详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWorkflowSubscription($request)
    {
        return $this->showWorkflowSubscriptionWithHttpInfo($request);
    }

    public function showWorkflowSubscriptionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/subscriptions/{subscription_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
        }
        if ($localVarParams['subscriptionId'] !== null) {
            $pathParams['subscription_id'] = $localVarParams['subscriptionId'];
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowSubscriptionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\ShowWorkflowSubscriptionRequest');
    }

    /**
     * 更新消息订阅Subscription
     *
     * 更新Workflow工作流已订阅的订阅信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWorkflowSubscription($request)
    {
        return $this->updateWorkflowSubscriptionWithHttpInfo($request);
    }

    public function updateWorkflowSubscriptionWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/workflows/{workflow_id}/subscriptions/{subscription_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['subscriptionId'] !== null) {
            $pathParams['subscription_id'] = $localVarParams['subscriptionId'];
        }
        if ($localVarParams['workflowId'] !== null) {
            $pathParams['workflow_id'] = $localVarParams['workflowId'];
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
                ['application/json;charset=UTF-8', 'application/json']
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
            $responseType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateWorkflowSubscriptionResponse',
            $requestType='\HuaweiCloud\SDK\ModelArts\V1\Model\UpdateWorkflowSubscriptionRequest');
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