<?php

namespace HuaweiCloud\SDK\Cph\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CphClient extends Client
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
        $client = new ClientBuilder(new CphClient());
        return $client;
    }


    /**
     * 共享镜像给指定账号
     *
     * 镜像共享,共享镜像给指定账号。
     * - 镜像只能共享给同region下的其他[华为云](tag:hws,hws_hk)账号(project_id)。
     * - 同一镜像最多只能共享给10个其他账号。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function addImageMember($request)
    {
        return $this->addImageMemberWithHttpInfo($request);
    }

    public function addImageMemberWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/images/{image_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\AddImageMemberResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\AddImageMemberRequest');
    }

    /**
     * 批量添加标签
     *
     * 批量添加标签。
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
        $resourcePath = '/v1/{project_id}/{resource_type}/{resource_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\BatchCreateTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\BatchCreateTagsRequest');
    }

    /**
     * 批量删除标签
     *
     * 批量删除标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteTags($request)
    {
        return $this->batchDeleteTagsWithHttpInfo($request);
    }

    public function batchDeleteTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/{resource_type}/{resource_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\BatchDeleteTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\BatchDeleteTagsRequest');
    }

    /**
     * 导出云手机数据
     *
     * 批量导出云手机中的数据。该接口为异步接口。[接口调用前请先确保已完成CPH服务操作OBS桶的委托授权。委托CPH操作OBS桶请参见[委托CPH操作OBS桶](https://support.huaweicloud.com/bestpractice-cph/cph_bp_0050.html)。](tag:hws)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchExportCloudPhoneData($request)
    {
        return $this->batchExportCloudPhoneDataWithHttpInfo($request);
    }

    public function batchExportCloudPhoneDataWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/batch-storage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\BatchExportCloudPhoneDataResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\BatchExportCloudPhoneDataRequest');
    }

    /**
     * 恢复云手机数据
     *
     * 批量恢复数据到云手机中。该接口为异步接口。[接口调用前请先确保已完成CPH服务操作OBS桶的委托授权。委托CPH操作OBS桶请参见[委托CPH操作OBS桶](https://support.huaweicloud.com/bestpractice-cph/cph_bp_0050.html)。](tag:hws)
     * 
     * 高版本手机导出的数据无法在低版本手机内恢复。低版本手机导出的数据可以在高版本手机内恢复，但可能会在极少数场景下有不兼容的风险。因此推荐您在同版本手机间进行导出与恢复。
     * 
     * 手机在运行状态会有数据缓存，直接运行恢复的文件可能带来访问失败、应用崩溃等现象，建议在还原成功后重启手机，以保证云手机稳定运行。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchImportCloudPhoneData($request)
    {
        return $this->batchImportCloudPhoneDataWithHttpInfo($request);
    }

    public function batchImportCloudPhoneDataWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/batch-restore';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\BatchImportCloudPhoneDataResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\BatchImportCloudPhoneDataRequest');
    }

    /**
     * 获取云手机连接信息
     *
     * 获取云手机连接信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchShowPhoneConnectInfos($request)
    {
        return $this->batchShowPhoneConnectInfosWithHttpInfo($request);
    }

    public function batchShowPhoneConnectInfosWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/batch-connection';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\BatchShowPhoneConnectInfosResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\BatchShowPhoneConnectInfosRequest');
    }

    /**
     * 切换云手机服务器
     *
     * 切换云手机服务器, 支持您换一台新的云手机服务器。切换后服务器名称、服务器ID与原服务器相同, 服务器计费保持不变。服务器切换的同时服务器上的手机重新创建，不保留用户数据。切换需要额外的资源和资源配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeCloudPhoneServer($request)
    {
        return $this->changeCloudPhoneServerWithHttpInfo($request);
    }

    public function changeCloudPhoneServerWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/cloud-phone/servers/{server_id}/change';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ChangeCloudPhoneServerResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ChangeCloudPhoneServerRequest');
    }

    /**
     * 变更云手机服务器规格
     *
     * 变更云手机服务器规格。接口调用成功后，大约2分钟左右规格会变更结束，在订单中心可以查看到变更的订单状态为成功，且查询服务器的详细信息，可以查看到服务器规格名称已经变成新的规格名称。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeCloudPhoneServerModel($request)
    {
        return $this->changeCloudPhoneServerModelWithHttpInfo($request);
    }

    public function changeCloudPhoneServerModelWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/servers/change-server-model';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ChangeCloudPhoneServerModelResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ChangeCloudPhoneServerModelRequest');
    }

    /**
     * 创建云手机裸服务器
     *
     * 该接口创建的服务器仅包含服务器和服务器的镜像，不包含云手机实例和镜像等内容。若需要创建包含云手机实例的服务器，请使用创建云手机服务器接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCloudPhoneSingleServer($request)
    {
        return $this->createCloudPhoneSingleServerWithHttpInfo($request);
    }

    public function createCloudPhoneSingleServerWithHttpInfo($request)
    {
        $resourcePath = '/v2.1/{project_id}/cloud-phone/servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerRequest');
    }

    /**
     * [创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)云手机服务器
     *
     * [创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)云手机服务器，支持您复用已有的VPC网络管理云手机服务器，支持云手机服务器复用您已[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)的共享带宽等资源。
     * - 请确保您使用的账号具有CPH AgencyDependencyAccess权限。
     * - 请确保您有足够的服务器及网络配额，配额校验不通过将导致创建失败。
     * [- 当前只支持按需创建。](tag:fcs)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNet2CloudPhoneServer($request)
    {
        return $this->createNet2CloudPhoneServerWithHttpInfo($request);
    }

    public function createNet2CloudPhoneServerWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/cloud-phone/servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequest');
    }

    /**
     * 删除云手机服务器
     *
     * 删除云手机服务器，仅可以删除按需购买的云手机服务器，最多删除十台。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCloudPhoneServer($request)
    {
        return $this->deleteCloudPhoneServerWithHttpInfo($request);
    }

    public function deleteCloudPhoneServerWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/cloud-phone/servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\DeleteCloudPhoneServerResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\DeleteCloudPhoneServerRequest');
    }

    /**
     * 删除镜像
     *
     * 删除自定义镜像
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
        $resourcePath = '/v1/{project_id}/cloud-phone/images/{image_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\DeleteImageResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\DeleteImageRequest');
    }

    /**
     * 删除共享镜像
     *
     * 删除共享镜像
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteImageMember($request)
    {
        return $this->deleteImageMemberWithHttpInfo($request);
    }

    public function deleteImageMemberWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/images/{image_id}/members/{member_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['memberId'] !== null) {
            $pathParams['member_id'] = $localVarParams['memberId'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\DeleteImageMemberResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\DeleteImageMemberRequest');
    }

    /**
     * 删除共享应用
     *
     * 在共享应用存储目录中删除共享应用，该功能仅在支持共享应用的云手机规格上可实现。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteShareApps($request)
    {
        return $this->deleteShareAppsWithHttpInfo($request);
    }

    public function deleteShareAppsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/share-apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\DeleteShareAppsResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\DeleteShareAppsRequest');
    }

    /**
     * 删除共享存储文件
     *
     * 删除共享存储目录中文件，该功能仅在支持共享存储的云手机规格上可实现。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteShareFiles($request)
    {
        return $this->deleteShareFilesWithHttpInfo($request);
    }

    public function deleteShareFilesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/share-files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\DeleteShareFilesResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\DeleteShareFilesRequest');
    }

    /**
     * 扩容云手机数据盘大小
     *
     * 扩容云手机数据盘大小
     * [- 注意: 本接口会产生扩容新增容量的费用，新增容量不算入服务器免费存储额度内。](tag:hc,hk,cmcc,ctc)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function expandPhoneDataVolumeSize($request)
    {
        return $this->expandPhoneDataVolumeSizeWithHttpInfo($request);
    }

    public function expandPhoneDataVolumeSizeWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/expand-volume';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ExpandPhoneDataVolumeSizeResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ExpandPhoneDataVolumeSizeRequest');
    }

    /**
     * 云手机流量导流
     *
     * 手机流量路由修改。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function importTraffic($request)
    {
        return $this->importTrafficWithHttpInfo($request);
    }

    public function importTrafficWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones-traffic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ImportTrafficResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ImportTrafficRequest');
    }

    /**
     * 查询手机镜像
     *
     * 根据项目ID查询可用的手机镜像。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCloudPhoneImages($request)
    {
        return $this->listCloudPhoneImagesWithHttpInfo($request);
    }

    public function listCloudPhoneImagesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phone-images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageType'] !== null) {
            $queryParams['image_type'] = $localVarParams['imageType'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ListCloudPhoneImagesResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ListCloudPhoneImagesRequest');
    }

    /**
     * 查询云手机规格列表
     *
     * 查询或统计云手机的规格列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCloudPhoneModels($request)
    {
        return $this->listCloudPhoneModelsWithHttpInfo($request);
    }

    public function listCloudPhoneModelsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phone-models';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ListCloudPhoneModelsResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ListCloudPhoneModelsRequest');
    }

    /**
     * 查询云手机服务器规格列表
     *
     * 查询云手机服务器的规格列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCloudPhoneServerModels($request)
    {
        return $this->listCloudPhoneServerModelsWithHttpInfo($request);
    }

    public function listCloudPhoneServerModelsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/server-models';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['productType'] !== null) {
            $queryParams['product_type'] = $localVarParams['productType'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ListCloudPhoneServerModelsResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ListCloudPhoneServerModelsRequest');
    }

    /**
     * 查询云手机服务器列表
     *
     * 分页查询云手机服务器，云手机服务器列表按照创建时间进行降序排列。分页查询可以指定offset以及limit。如果不存在云手机服务器，则返回空列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCloudPhoneServers($request)
    {
        return $this->listCloudPhoneServersWithHttpInfo($request);
    }

    public function listCloudPhoneServersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serverName'] !== null) {
            $queryParams['server_name'] = $localVarParams['serverName'];
        }
        if ($localVarParams['serverId'] !== null) {
            $queryParams['server_id'] = $localVarParams['serverId'];
        }
        if ($localVarParams['networkVersion'] !== null) {
            $queryParams['network_version'] = $localVarParams['networkVersion'];
        }
        if ($localVarParams['phoneModelName'] !== null) {
            $queryParams['phone_model_name'] = $localVarParams['phoneModelName'];
        }
        if ($localVarParams['createSince'] !== null) {
            $queryParams['create_since'] = $localVarParams['createSince'];
        }
        if ($localVarParams['createUntil'] !== null) {
            $queryParams['create_until'] = $localVarParams['createUntil'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ListCloudPhoneServersResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ListCloudPhoneServersRequest');
    }

    /**
     * 查询云手机列表
     *
     * 分页查询云手机，云手机列表按照创建时间进行降序排列。分页查询可以指定offset以及limit。如果不存在云手机，则返回空列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCloudPhones($request)
    {
        return $this->listCloudPhonesWithHttpInfo($request);
    }

    public function listCloudPhonesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['phoneName'] !== null) {
            $queryParams['phone_name'] = $localVarParams['phoneName'];
        }
        if ($localVarParams['serverId'] !== null) {
            $queryParams['server_id'] = $localVarParams['serverId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ListCloudPhonesResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ListCloudPhonesRequest');
    }

    /**
     * 查询编码服务
     *
     * 查询编码服务列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEncodeServers($request)
    {
        return $this->listEncodeServersWithHttpInfo($request);
    }

    public function listEncodeServersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/encode-servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['serverId'] !== null) {
            $queryParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ListEncodeServersResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ListEncodeServersRequest');
    }

    /**
     * 获取镜像已共享账号列表
     *
     * 获取镜像已共享账号列表
     * - 路径中的project_id为共享账号的租户id
     * - 路径中的image_id为共享账号的镜像id
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listImageMembers($request)
    {
        return $this->listImageMembersWithHttpInfo($request);
    }

    public function listImageMembersWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/images/{image_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ListImageMembersResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ListImageMembersRequest');
    }

    /**
     * 查询自定义镜像列表
     *
     * 查询自定义镜像列表
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
        $resourcePath = '/v1/{project_id}/cloud-phone/images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['imageType'] !== null) {
            $queryParams['image_type'] = $localVarParams['imageType'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['imageId'] !== null) {
            $queryParams['image_id'] = $localVarParams['imageId'];
        }
        if ($localVarParams['imageName'] !== null) {
            $queryParams['image_name'] = $localVarParams['imageName'];
        }
        if ($localVarParams['createSince'] !== null) {
            $queryParams['create_since'] = $localVarParams['createSince'];
        }
        if ($localVarParams['createUntil'] !== null) {
            $queryParams['create_until'] = $localVarParams['createUntil'];
        }
        if ($localVarParams['srcProjectId'] !== null) {
            $queryParams['src_project_id'] = $localVarParams['srcProjectId'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ListImagesResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ListImagesRequest');
    }

    /**
     * 查询任务执行状态列表
     *
     * 查询同一个request id下的任务。
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
        $resourcePath = '/v1/{project_id}/cloud-phone/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['requestId'] !== null) {
            $queryParams['request_id'] = $localVarParams['requestId'];
        }
        if ($localVarParams['requestIds'] !== null) {
            $queryParams['request_ids'] = $localVarParams['requestIds'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ListJobsResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ListJobsRequest');
    }

    /**
     * 查询项目标签
     *
     * 查询租户在指定区域和资源类型的所有标签集合。
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
        $resourcePath = '/v1/{project_id}/{resource_type}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ListProjectTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ListProjectTagsRequest');
    }

    /**
     * 查询资源实例
     *
     * 查询资源实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceInstances($request)
    {
        return $this->listResourceInstancesWithHttpInfo($request);
    }

    public function listResourceInstancesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/{resource_type}/resource_instances/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ListResourceInstancesResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ListResourceInstancesRequest');
    }

    /**
     * 查询资源标签
     *
     * 查询资源标签列表。
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
        $resourcePath = '/v1/{project_id}/{resource_type}/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ListResourceTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ListResourceTagsRequest');
    }

    /**
     * 查询共享存储文件
     *
     * 查询共享存储指定路径下的文件列表，该功能仅在支持共享存储的云手机规格上可实现。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listShareFiles($request)
    {
        return $this->listShareFilesWithHttpInfo($request);
    }

    public function listShareFilesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/servers/share-files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['serverIds'] !== null) {
            $queryParams['server_ids'] = $localVarParams['serverIds'];
        }
        if ($localVarParams['path'] !== null) {
            $queryParams['path'] = $localVarParams['path'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ListShareFilesResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ListShareFilesRequest');
    }

    /**
     * 推送共享应用
     *
     * 推送应用tar文件至共享应用存储目录中，该功能仅在支持共享应用的云手机服务器上可实现。[接口调用前请先确保已完成CPH服务操作OBS桶的委托授权。委托CPH操作OBS桶请参见[委托CPH操作OBS桶](https://support.huaweicloud.com/bestpractice-cph/cph_bp_0050.html)。](tag:hws)
     * 
     * 注意：不能向存在低安卓版本云手机的服务器推送高安卓版本手机导出的应用包，否则可能会造成手机数据兼容性问题。如果您使用的是physical.kg1.4xlarge.a.cp服务器规格，请确保共享存储的可用空间大于两倍的tar包大小
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function pushShareApps($request)
    {
        return $this->pushShareAppsWithHttpInfo($request);
    }

    public function pushShareAppsWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/share-apps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\PushShareAppsResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\PushShareAppsRequest');
    }

    /**
     * 推送共享存储文件
     *
     * 推送文件至共享存储目录中，该功能仅在支持共享存储的云手机规格上可实现。[接口调用前请先确保已完成CPH服务操作OBS桶的委托授权。委托CPH操作OBS桶请参见[委托CPH操作OBS桶](https://support.huaweicloud.com/bestpractice-cph/cph_bp_0050.html)。](tag:hws)
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function pushShareFiles($request)
    {
        return $this->pushShareFilesWithHttpInfo($request);
    }

    public function pushShareFilesWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/share-files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\PushShareFilesResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\PushShareFilesRequest');
    }

    /**
     * 重置云手机
     *
     * 批量重置云手机，将云手机恢复出厂设置。该接口为异步接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetCloudPhone($request)
    {
        return $this->resetCloudPhoneWithHttpInfo($request);
    }

    public function resetCloudPhoneWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/batch-reset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ResetCloudPhoneResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ResetCloudPhoneRequest');
    }

    /**
     * 重启云手机
     *
     * 批量重启云手机，也可用于开启云手机。该接口为异步接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restartCloudPhone($request)
    {
        return $this->restartCloudPhoneWithHttpInfo($request);
    }

    public function restartCloudPhoneWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/batch-restart';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\RestartCloudPhoneResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\RestartCloudPhoneRequest');
    }

    /**
     * 重启云手机服务器
     *
     * 批量重启云手机服务器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restartCloudPhoneServer($request)
    {
        return $this->restartCloudPhoneServerWithHttpInfo($request);
    }

    public function restartCloudPhoneServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/servers/batch-restart';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\RestartCloudPhoneServerResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\RestartCloudPhoneServerRequest');
    }

    /**
     * 重启编码服务
     *
     * 批量重启编码服务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restartEncodeServer($request)
    {
        return $this->restartEncodeServerWithHttpInfo($request);
    }

    public function restartEncodeServerWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/encode-servers/batch-restart';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\RestartEncodeServerResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\RestartEncodeServerRequest');
    }

    /**
     * 查询带宽信息
     *
     * 查询云手机使用的带宽信息，本接口只适用于使用系统定义网络的服务器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBandwidthDetail($request)
    {
        return $this->showBandwidthDetailWithHttpInfo($request);
    }

    public function showBandwidthDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/bandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ShowBandwidthDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ShowBandwidthDetailRequest');
    }

    /**
     * 查询云手机详情
     *
     * 查询云手机的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCloudPhoneDetail($request)
    {
        return $this->showCloudPhoneDetailWithHttpInfo($request);
    }

    public function showCloudPhoneDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/{phone_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['phoneId'] !== null) {
            $pathParams['phone_id'] = $localVarParams['phoneId'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ShowCloudPhoneDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ShowCloudPhoneDetailRequest');
    }

    /**
     * 查询云手机服务器详情
     *
     * 根据server_id查询云手机服务器的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCloudPhoneServerDetail($request)
    {
        return $this->showCloudPhoneServerDetailWithHttpInfo($request);
    }

    public function showCloudPhoneServerDetailWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/servers/{server_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ShowCloudPhoneServerDetailResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ShowCloudPhoneServerDetailRequest');
    }

    /**
     * 查询任务执行状态
     *
     * 查询任务的执行状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showJob($request)
    {
        return $this->showJobWithHttpInfo($request);
    }

    public function showJobWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\ShowJobResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\ShowJobRequest');
    }

    /**
     * 关闭云手机
     *
     * 批量关闭云手机。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function stopCloudPhone($request)
    {
        return $this->stopCloudPhoneWithHttpInfo($request);
    }

    public function stopCloudPhoneWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/batch-stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\StopCloudPhoneResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\StopCloudPhoneRequest');
    }

    /**
     * 修改共享带宽
     *
     * 修改云手机使用的共享带宽大小，本接口只适用于使用系统定义网络的服务器。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBandwidth($request)
    {
        return $this->updateBandwidthWithHttpInfo($request);
    }

    public function updateBandwidthWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/bandwidths/{band_width_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['bandWidthId'] !== null) {
            $pathParams['band_width_id'] = $localVarParams['bandWidthId'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\UpdateBandwidthResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\UpdateBandwidthRequest');
    }

    /**
     * 更新云手机属性
     *
     * 部分云手机属性开放更新能力，部分属性无法更新，部分属性需要重启手机生效，属性约束请云手机属性列表。如果手机处于异常状态，属性更新后需恢复手机状态为运行中才可生效。该接口为异步接口。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCloudPhoneProperty($request)
    {
        return $this->updateCloudPhonePropertyWithHttpInfo($request);
    }

    public function updateCloudPhonePropertyWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/batch-update-property';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\UpdateCloudPhonePropertyResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\UpdateCloudPhonePropertyRequest');
    }

    /**
     * 更新共享镜像接受信息
     *
     * 用户收到共享镜像后，选择接受或拒绝共享镜像。未接受的共享镜像无法使用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateImageMember($request)
    {
        return $this->updateImageMemberWithHttpInfo($request);
    }

    public function updateImageMemberWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/images/{image_id}/members';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\UpdateImageMemberResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\UpdateImageMemberRequest');
    }

    /**
     * 更改密钥对
     *
     * 修改连接云手机的密钥对。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateKeypair($request)
    {
        return $this->updateKeypairWithHttpInfo($request);
    }

    public function updateKeypairWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/servers/open-access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\UpdateKeypairResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\UpdateKeypairRequest');
    }

    /**
     * 修改云手机名称
     *
     * 根据phoneId修改phoneName。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePhoneName($request)
    {
        return $this->updatePhoneNameWithHttpInfo($request);
    }

    public function updatePhoneNameWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/{phone_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['phoneId'] !== null) {
            $pathParams['phone_id'] = $localVarParams['phoneId'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\UpdatePhoneNameResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\UpdatePhoneNameRequest');
    }

    /**
     * 修改云手机服务器名称
     *
     * 根据serverId修改serverName。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateServerName($request)
    {
        return $this->updateServerNameWithHttpInfo($request);
    }

    public function updateServerNameWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/servers/{server_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\UpdateServerNameResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\UpdateServerNameRequest');
    }

    /**
     * 安装apk
     *
     * 在云手机中安装apk。系统会将指定的apk文件下载后直接安装到云手机中。
     * 支持安装单apk应用和多apk应用。可使用install命令安装单apk应用，一次只支持安装一个apk，如果一次传多个apk只有第一个安装成功；可使用install-multiple命令安装多apk应用（多apk应用为单个应用拆分成多个apk），一次只支持同一个应用的多个apk。该接口为异步接口。[接口调用前请先确保已完成CPH服务操作OBS桶的委托授权。委托CPH操作OBS桶请参见[委托CPH操作OBS桶](https://support.huaweicloud.com/bestpractice-cph/cph_bp_0050.html)。](tag:hws)
     * - 管理面性能有限，对相同服务器批量执行的ADB命令，将会阻塞云手机其他任务执行。
     * - 允许安装的apk大小限制为2G（即不可将obs桶内大于2G的apk安装到手机中），超过限制将返回错误。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function installApk($request)
    {
        return $this->installApkWithHttpInfo($request);
    }

    public function installApkWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/commands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\InstallApkResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\InstallApkRequest');
    }

    /**
     * 推送文件
     *
     * 推送文件到云手机文件系统中。系统会将所指定的文件下载解压后，将解压后的内容全部推送到云手机的根目录下。只支持指定tar格式的文件进行推送，您需要将tar文件提前上传至您的OBS桶中。该接口为异步接口。[接口调用前请先确保已完成CPH服务操作OBS桶的委托授权。委托CPH操作OBS桶请参见[委托CPH操作OBS桶](https://support.huaweicloud.com/bestpractice-cph/cph_bp_0050.html)。](tag:hws)
     * - 管理面性能有限，对相同服务器批量执行的ADB命令，将会阻塞云手机其他任务执行。
     * - 允许推送的文件大小限制为6G（即不可将obs桶内大于6G的文件推送到手机中），超过限制将返回错误。
     * - 手机的系统有限制，推送到系统盘不保证推送成功，推荐把文件推送到手机的数据盘。所以在构建\&quot;tar\&quot;文件时，应将待推送的文件放到本地创建的data目录后将其打包（如tar -cvf data.tar data ），以确保把文件推送到手机的数据盘下。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function pushFile($request)
    {
        return $this->pushFileWithHttpInfo($request);
    }

    public function pushFileWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/commands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\PushFileResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\PushFileRequest');
    }

    /**
     * 异步执行adb命令
     *
     * 在云手机中执行shell命令。该接口为异步接口。
     * - 管理面性能有限，对相同服务器批量执行的ADB命令，将会阻塞云手机其他任务执行。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runShellCommand($request)
    {
        return $this->runShellCommandWithHttpInfo($request);
    }

    public function runShellCommandWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/commands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\RunShellCommandResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\RunShellCommandRequest');
    }

    /**
     * 同步执行adb命令
     *
     * 在云手机中同步执行命令并返回命令执行的输出信息，该接口仅支持adb shell命令的执行。1分钟内每个用户调用接口次数上限为6次，每个云手机允许执行命令超时时间为2秒，接口时间不超过30秒，执行云手机数越多，接口耗时相应越长。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function runSyncCommand($request)
    {
        return $this->runSyncCommandWithHttpInfo($request);
    }

    public function runSyncCommandWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/sync-commands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\RunSyncCommandResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\RunSyncCommandRequest');
    }

    /**
     * 卸载apk
     *
     * 在云手机中卸载apk。该接口为异步接口。
     * - 管理面性能有限，对相同服务器批量执行的ADB命令，将会阻塞云手机其他任务执行。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uninstallApk($request)
    {
        return $this->uninstallApkWithHttpInfo($request);
    }

    public function uninstallApkWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/cloud-phone/phones/commands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cph\V1\Model\UninstallApkResponse',
            $requestType='\HuaweiCloud\SDK\Cph\V1\Model\UninstallApkRequest');
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