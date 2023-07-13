<?php

namespace HuaweiCloud\SDK\Ges\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class GesClient extends Client
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
        return new ClientBuilder(new GesClient());
    }


    /**
     * 绑定EIP
     *
     * 可以通过绑定弹性公网IP（简称EIP）访问GES服务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachEip2($request)
    {
        return $this->attachEip2WithHttpInfo($request);
    }

    public function attachEip2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/bind-eip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\AttachEip2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\AttachEip2Request');
    }

    /**
     * 清空图
     *
     * 清空图中所有数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function clearGraph2($request)
    {
        return $this->clearGraph2WithHttpInfo($request);
    }

    public function clearGraph2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/clear-graph';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['clearMetadata'] !== null) {
            $queryParams['clear_metadata'] = $localVarParams['clearMetadata'];
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ClearGraph2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ClearGraph2Request');
    }

    /**
     * 新增备份
     *
     * 新增备份。当前图数据出现错误或故障时，可以启动备份图进行恢复。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBackup2($request)
    {
        return $this->createBackup2WithHttpInfo($request);
    }

    public function createBackup2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/backups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\CreateBackup2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\CreateBackup2Request');
    }

    /**
     * 创建图
     *
     * 创建一个图。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGraph2($request)
    {
        return $this->createGraph2WithHttpInfo($request);
    }

    public function createGraph2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\CreateGraph2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\CreateGraph2Request');
    }

    /**
     * 新增元数据
     *
     * 新增元数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createMetadata2($request)
    {
        return $this->createMetadata2WithHttpInfo($request);
    }

    public function createMetadata2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/metadatas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\CreateMetadata2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\CreateMetadata2Request');
    }

    /**
     * 删除备份
     *
     * 删除备份。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBackup2($request)
    {
        return $this->deleteBackup2WithHttpInfo($request);
    }

    public function deleteBackup2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/backups/{backup_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
        }
        if ($localVarParams['backupId'] !== null) {
            $pathParams['backup_id'] = $localVarParams['backupId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\DeleteBackup2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\DeleteBackup2Request');
    }

    /**
     * 删除图
     *
     * 删除一个图。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGraph2($request)
    {
        return $this->deleteGraph2WithHttpInfo($request);
    }

    public function deleteGraph2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['keepBackup'] !== null) {
            $queryParams['keep_backup'] = $localVarParams['keepBackup'];
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\DeleteGraph2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\DeleteGraph2Request');
    }

    /**
     * 删除元数据
     *
     * 删除元数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteMetadata2($request)
    {
        return $this->deleteMetadata2WithHttpInfo($request);
    }

    public function deleteMetadata2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/metadatas/{metadata_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['metadataId'] !== null) {
            $pathParams['metadata_id'] = $localVarParams['metadataId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\DeleteMetadata2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\DeleteMetadata2Request');
    }

    /**
     * 解绑EIP
     *
     * 当无需继续使用EIP时，您可通过解绑EIP来释放网络资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detachEip2($request)
    {
        return $this->detachEip2WithHttpInfo($request);
    }

    public function detachEip2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/unbind-eip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\DetachEip2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\DetachEip2Request');
    }

    /**
     * 扩副本
     *
     * 扩副本能力允许动态扩容多个从节点，扩容的从节点可以处理读请求，从而提高读请求性能。
     * &gt; 1.一万边和百亿边规格的图暂不支持扩副本。
     * 2.进行扩副本操作后，不支持扩容图操作。
     * 3.如果要对图进行扩容和扩副本两个操作，需要您先进行扩容图操作，再进行扩副本操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function expandGraph2($request)
    {
        return $this->expandGraph2WithHttpInfo($request);
    }

    public function expandGraph2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/expand';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ExpandGraph2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ExpandGraph2Request');
    }

    /**
     * 导出图
     *
     * 导出图。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function exportGraph2($request)
    {
        return $this->exportGraph2WithHttpInfo($request);
    }

    public function exportGraph2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/export-graph';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ExportGraph2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ExportGraph2Request');
    }

    /**
     * 增量导入图
     *
     * 增量导入图数据。
     * &gt; 为防止系统重启时，不能正常恢复导入图数据，建议在使用图期间，不要删除存储在OBS中的数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importGraph2($request)
    {
        return $this->importGraph2WithHttpInfo($request);
    }

    public function importGraph2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/import-graph';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ImportGraph2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ImportGraph2Request');
    }

    /**
     * 查看所有备份列表
     *
     * 查询备份列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBackups2($request)
    {
        return $this->listBackups2WithHttpInfo($request);
    }

    public function listBackups2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/backups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ListBackups2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ListBackups2Request');
    }

    /**
     * 查看某个图的备份列表
     *
     * 查询某个图下的备份列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGraphBackups2($request)
    {
        return $this->listGraphBackups2WithHttpInfo($request);
    }

    public function listGraphBackups2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/backups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ListGraphBackups2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ListGraphBackups2Request');
    }

    /**
     * 查询图列表
     *
     * 查询当前租户所有的图。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGraphs2($request)
    {
        return $this->listGraphs2WithHttpInfo($request);
    }

    public function listGraphs2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ListGraphs2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ListGraphs2Request');
    }

    /**
     * 查询任务中心
     *
     * 查询管理面任务中心。当前创建图、关闭图、启动图、删除图、增加备份、导入图、导出图、升级图等操作为异步任务，该API用于查询这些任务的详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listJobs2($request)
    {
        return $this->listJobs2WithHttpInfo($request);
    }

    public function listJobs2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['graphName'] !== null) {
            $queryParams['graph_name'] = $localVarParams['graphName'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ListJobs2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ListJobs2Request');
    }

    /**
     * 查询元数据列表
     *
     * 查询元数据列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMetadatas2($request)
    {
        return $this->listMetadatas2WithHttpInfo($request);
    }

    public function listMetadatas2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/metadatas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ListMetadatas2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ListMetadatas2Request');
    }

    /**
     * 查询配额
     *
     * 查询租户配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQuotas2($request)
    {
        return $this->listQuotas2WithHttpInfo($request);
    }

    public function listQuotas2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ListQuotas2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ListQuotas2Request');
    }

    /**
     * 扩容图
     *
     * 扩容图规格。
     * &gt; 扩容图以后所有索引（复合索引和全文索引）都需要重新创建。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resizeGraph2($request)
    {
        return $this->resizeGraph2WithHttpInfo($request);
    }

    public function resizeGraph2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/resize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ResizeGraph2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ResizeGraph2Request');
    }

    /**
     * 强制重启图
     *
     * 强制启动一个图。针对导入、导出 、运行中 、清空中的图。强制重启图，会将该图执行中的异步任务变为失败，然后停止图、启动图到运行状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restartGraph2($request)
    {
        return $this->restartGraph2WithHttpInfo($request);
    }

    public function restartGraph2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/restart';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\RestartGraph2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\RestartGraph2Request');
    }

    /**
     * 查询图详情
     *
     * 根据图ID查询某个图详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGraph2($request)
    {
        return $this->showGraph2WithHttpInfo($request);
    }

    public function showGraph2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ShowGraph2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ShowGraph2Request');
    }

    /**
     * 查询Job状态-管理面
     *
     * 查询Job的执行状态。对创建图、关闭图、启动图、删除图、导入图等异步API命令下发后，会返回jobId，通过jobId查询任务的执行状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJob2($request)
    {
        return $this->showJob2WithHttpInfo($request);
    }

    public function showJob2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/jobs/{job_id}/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ShowJob2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ShowJob2Request');
    }

    /**
     * 查询元数据
     *
     * 查询某个元数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMetadata2($request)
    {
        return $this->showMetadata2WithHttpInfo($request);
    }

    public function showMetadata2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/metadatas/{metadata_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['metadataId'] !== null) {
            $pathParams['metadata_id'] = $localVarParams['metadataId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ShowMetadata2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ShowMetadata2Request');
    }

    /**
     * 启动图
     *
     * 启动一个图。暂时不用的图可以先关闭，需要使用时再启动。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function startGraph2($request)
    {
        return $this->startGraph2WithHttpInfo($request);
    }

    public function startGraph2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\StartGraph2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\StartGraph2Request');
    }

    /**
     * 关闭图
     *
     * 关闭一个图。如果图创建好了，暂时不用可以先关闭，需要使用时再启用。
     * &gt; 处于关闭状态的图不计算实例费用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopGraph2($request)
    {
        return $this->stopGraph2WithHttpInfo($request);
    }

    public function stopGraph2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\StopGraph2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\StopGraph2Request');
    }

    /**
     * 升级图
     *
     * 升级图。图引擎服务会定期升级版本，用户可根据需要升级图。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function upgradeGraph2($request)
    {
        return $this->upgradeGraph2WithHttpInfo($request);
    }

    public function upgradeGraph2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/upgrade';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\UpgradeGraph2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\UpgradeGraph2Request');
    }

    /**
     * 从OBS导入元数据
     *
     * 从OBS导入元数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadFromObs2($request)
    {
        return $this->uploadFromObs2WithHttpInfo($request);
    }

    public function uploadFromObs2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/metadata/upload-from-obs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\UploadFromObs2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\UploadFromObs2Request');
    }

    /**
     * 取消订阅场景分析插件
     *
     * 取消订阅scenes场景应用分析能力，取消订阅后对应scene下的application业务面API将不能使用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deregisterScenes2($request)
    {
        return $this->deregisterScenes2WithHttpInfo($request);
    }

    public function deregisterScenes2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/scenes/unregister';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\DeregisterScenes2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\DeregisterScenes2Request');
    }

    /**
     * 查询获取场景应用分析插件
     *
     * 查询scenes场景下的应用分析能力详情，可以获得对应场景下的application、参数和功能介绍详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScenes2($request)
    {
        return $this->listScenes2WithHttpInfo($request);
    }

    public function listScenes2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/scenes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['sceneName'] !== null) {
            $queryParams['scene_name'] = $localVarParams['sceneName'];
        }
        if ($localVarParams['applicationName'] !== null) {
            $queryParams['application_name'] = $localVarParams['applicationName'];
        }
        if ($localVarParams['graphId'] !== null) {
            $queryParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\ListScenes2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\ListScenes2Request');
    }

    /**
     * 订阅场景分析插件
     *
     * 订阅scenes应用场景分析能力，便于业务面API使用对应功能。
     * &gt; 已订阅的不可以重复订阅，需要更新请先取消原有订购，重新订购。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function registerScenes2($request)
    {
        return $this->registerScenes2WithHttpInfo($request);
    }

    public function registerScenes2WithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/graphs/{graph_id}/scenes/register';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['graphId'] !== null) {
            $pathParams['graph_id'] = $localVarParams['graphId'];
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
            $responseType='\HuaweiCloud\SDK\Ges\V2\Model\RegisterScenes2Response',
            $requestType='\HuaweiCloud\SDK\Ges\V2\Model\RegisterScenes2Request');
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