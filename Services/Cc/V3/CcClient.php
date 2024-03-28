<?php

namespace HuaweiCloud\SDK\Cc\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CcClient extends Client
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
        return new ClientBuilder(new CcClient(), "GlobalCredentials");
    }


    /**
     * 创建授权
     *
     * 网络实例所属租户授予云连接实例所属租户加载其网络实例的权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAuthorisation($request)
    {
        return $this->createAuthorisationWithHttpInfo($request);
    }

    public function createAuthorisationWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/authorisations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\CreateAuthorisationResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\CreateAuthorisationRequest');
    }

    /**
     * 删除授权
     *
     * 网络实例所属租户取消授予云连接实例所属租户加载其网络实例的权限。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteAuthorisation($request)
    {
        return $this->deleteAuthorisationWithHttpInfo($request);
    }

    public function deleteAuthorisationWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/authorisations/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteAuthorisationResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteAuthorisationRequest');
    }

    /**
     * 查询授权列表
     *
     * 网络实例所属租户查看其已经授予其他租户的权限。
     * 分页查询使用的参数为marker、limit。marker和limit一起使用时才会生效，单独使用无效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAuthorisations($request)
    {
        return $this->listAuthorisationsWithHttpInfo($request);
    }

    public function listAuthorisationsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/authorisations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['cloudConnectionId'] !== null) {
            $queryParams['cloud_connection_id'] = $localVarParams['cloudConnectionId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListAuthorisationsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListAuthorisationsRequest');
    }

    /**
     * 查询权限列表
     *
     * 云连接实例所属租户查询其可加载其他租户的网络实例权限。
     * 分页查询使用的参数为marker、limit。marker和limit一起使用时才会生效，单独使用无效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPermissions($request)
    {
        return $this->listPermissionsWithHttpInfo($request);
    }

    public function listPermissionsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['cloudConnectionId'] !== null) {
            $queryParams['cloud_connection_id'] = $localVarParams['cloudConnectionId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListPermissionsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListPermissionsRequest');
    }

    /**
     * 更新授权
     *
     * 更新授权实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateAuthorisation($request)
    {
        return $this->updateAuthorisationWithHttpInfo($request);
    }

    public function updateAuthorisationWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/authorisations/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateAuthorisationResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateAuthorisationRequest');
    }

    /**
     * 将带宽包实例绑定到云连接实例
     *
     * 将带宽包实例绑定到云连接实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateBandwidthPackage($request)
    {
        return $this->associateBandwidthPackageWithHttpInfo($request);
    }

    public function associateBandwidthPackageWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/bandwidth-packages/{id}/associate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\AssociateBandwidthPackageResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\AssociateBandwidthPackageRequest');
    }

    /**
     * 创建带宽包实例
     *
     * 创建带宽包实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createBandwidthPackage($request)
    {
        return $this->createBandwidthPackageWithHttpInfo($request);
    }

    public function createBandwidthPackageWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/bandwidth-packages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\CreateBandwidthPackageResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\CreateBandwidthPackageRequest');
    }

    /**
     * 删除带宽包实例
     *
     * 删除带宽包实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteBandwidthPackage($request)
    {
        return $this->deleteBandwidthPackageWithHttpInfo($request);
    }

    public function deleteBandwidthPackageWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/bandwidth-packages/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteBandwidthPackageResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteBandwidthPackageRequest');
    }

    /**
     * 解除带宽包实例与云连接实例的绑定
     *
     * 解除带宽包实例与云连接实例的绑定。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateBandwidthPackage($request)
    {
        return $this->disassociateBandwidthPackageWithHttpInfo($request);
    }

    public function disassociateBandwidthPackageWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/bandwidth-packages/{id}/disassociate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\DisassociateBandwidthPackageResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\DisassociateBandwidthPackageRequest');
    }

    /**
     * 查询带宽包的标签信息
     *
     * 查询带宽包的标签信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBandwidthPackageTags($request)
    {
        return $this->listBandwidthPackageTagsWithHttpInfo($request);
    }

    public function listBandwidthPackageTagsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/bandwidth-packages/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListBandwidthPackageTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListBandwidthPackageTagsRequest');
    }

    /**
     * 查询带宽包列表
     *
     * 查询带宽包列表。
     * 分页查询使用的参数为marker、limit。marker和limit一起使用时才会生效，单独使用无效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBandwidthPackages($request)
    {
        return $this->listBandwidthPackagesWithHttpInfo($request);
    }

    public function listBandwidthPackagesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/bandwidth-packages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['cloudConnectionId'] !== null) {
            $queryParams['cloud_connection_id'] = $localVarParams['cloudConnectionId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['billingMode'] !== null) {
            $queryParams['billing_mode'] = $localVarParams['billingMode'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListBandwidthPackagesResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListBandwidthPackagesRequest');
    }

    /**
     * 通过标签过滤带宽包实例
     *
     * 通过标签过滤带宽包实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listBandwidthPackagesByTags($request)
    {
        return $this->listBandwidthPackagesByTagsWithHttpInfo($request);
    }

    public function listBandwidthPackagesByTagsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/bandwidth-packages/filter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListBandwidthPackagesByTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListBandwidthPackagesByTagsRequest');
    }

    /**
     * 查询带宽包实例
     *
     * 查询带宽包实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showBandwidthPackage($request)
    {
        return $this->showBandwidthPackageWithHttpInfo($request);
    }

    public function showBandwidthPackageWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/bandwidth-packages/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ShowBandwidthPackageResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ShowBandwidthPackageRequest');
    }

    /**
     * 创建带宽包标签
     *
     * 创建带宽包标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function tagBandwidthPackage($request)
    {
        return $this->tagBandwidthPackageWithHttpInfo($request);
    }

    public function tagBandwidthPackageWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/bandwidth-packages/{id}/tag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\TagBandwidthPackageResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\TagBandwidthPackageRequest');
    }

    /**
     * 删除带宽包标签
     *
     * 删除带宽包标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function untagBandwidthPackage($request)
    {
        return $this->untagBandwidthPackageWithHttpInfo($request);
    }

    public function untagBandwidthPackageWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/bandwidth-packages/{id}/untag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\UntagBandwidthPackageResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\UntagBandwidthPackageRequest');
    }

    /**
     * 更新带宽包实例
     *
     * 更新带宽包实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateBandwidthPackage($request)
    {
        return $this->updateBandwidthPackageWithHttpInfo($request);
    }

    public function updateBandwidthPackageWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/bandwidth-packages/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateBandwidthPackageResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateBandwidthPackageRequest');
    }

    /**
     * 应用中心网络策略
     *
     * 应用中心网络策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function applyCentralNetworkPolicy($request)
    {
        return $this->applyCentralNetworkPolicyWithHttpInfo($request);
    }

    public function applyCentralNetworkPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/policies/{policy_id}/apply';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ApplyCentralNetworkPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ApplyCentralNetworkPolicyRequest');
    }

    /**
     * 创建中心网络
     *
     * 创建中心网络。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCentralNetwork($request)
    {
        return $this->createCentralNetworkWithHttpInfo($request);
    }

    public function createCentralNetworkWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-networks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\CreateCentralNetworkResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\CreateCentralNetworkRequest');
    }

    /**
     * 创建一个新版本的中心网络策略
     *
     * 创建一份只读的中心网络的策略。如果您有策略文档内容改动，需要基于此版本重新创建一个新版本的策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCentralNetworkPolicy($request)
    {
        return $this->createCentralNetworkPolicyWithHttpInfo($request);
    }

    public function createCentralNetworkPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\CreateCentralNetworkPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\CreateCentralNetworkPolicyRequest');
    }

    /**
     * 删除中心网络
     *
     * 删除中心网络，请先清除附件后再删除中心网络。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCentralNetwork($request)
    {
        return $this->deleteCentralNetworkWithHttpInfo($request);
    }

    public function deleteCentralNetworkWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-networks/{central_network_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteCentralNetworkResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteCentralNetworkRequest');
    }

    /**
     * 删除中心网络策略版本
     *
     * 删除中心网络策略版本。您无法删除正在被应用的中心策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCentralNetworkPolicy($request)
    {
        return $this->deleteCentralNetworkPolicyWithHttpInfo($request);
    }

    public function deleteCentralNetworkPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteCentralNetworkPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteCentralNetworkPolicyRequest');
    }

    /**
     * 查询所有版本的中心网络策略列表
     *
     * 查询所有版本的中心网络策略列表。
     * 分页查询使用的参数为marker、limit。limit默认值为0，没有指定marker时返回第一条数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCentralNetworkPolicies($request)
    {
        return $this->listCentralNetworkPoliciesWithHttpInfo($request);
    }

    public function listCentralNetworkPoliciesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['version'] !== null) {
            $queryParams['version'] = $localVarParams['version'];
        }
        if ($localVarParams['isApplied'] !== null) {
            $queryParams['is_applied'] = $localVarParams['isApplied'];
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkPoliciesResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkPoliciesRequest');
    }

    /**
     * 查询中心网络策略变化集
     *
     * 查询与当前应用中心网络策略的变化集。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCentralNetworkPolicyChangeSet($request)
    {
        return $this->listCentralNetworkPolicyChangeSetWithHttpInfo($request);
    }

    public function listCentralNetworkPolicyChangeSetWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/policies/{policy_id}/change-set';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkPolicyChangeSetResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkPolicyChangeSetRequest');
    }

    /**
     * 查询中心网络的标签信息
     *
     * 查询中心网络的标签信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCentralNetworkTags($request)
    {
        return $this->listCentralNetworkTagsWithHttpInfo($request);
    }

    public function listCentralNetworkTagsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-networks/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkTagsRequest');
    }

    /**
     * 查询中心网络列表
     *
     * 查询中心网络列表。
     * 分页查询使用的参数为marker、limit。limit默认值为0，没有指定marker时返回第一条数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCentralNetworks($request)
    {
        return $this->listCentralNetworksWithHttpInfo($request);
    }

    public function listCentralNetworksWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-networks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['enterpriseRouterId'] !== null) {
            $queryParams['enterprise_router_id'] = $localVarParams['enterpriseRouterId'];
        }
        if ($localVarParams['attachmentInstanceId'] !== null) {
            $queryParams['attachment_instance_id'] = $localVarParams['attachmentInstanceId'];
        }
        if ($localVarParams['globalConnectionBandwidthId'] !== null) {
            $queryParams['global_connection_bandwidth_id'] = $localVarParams['globalConnectionBandwidthId'];
        }
        if ($localVarParams['connectionId'] !== null) {
            $queryParams['connection_id'] = $localVarParams['connectionId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworksResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworksRequest');
    }

    /**
     * 通过标签过滤中心网络实例
     *
     * 通过标签过滤中心网络实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCentralNetworksByTags($request)
    {
        return $this->listCentralNetworksByTagsWithHttpInfo($request);
    }

    public function listCentralNetworksByTagsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-networks/filter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworksByTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworksByTagsRequest');
    }

    /**
     * 查询中心网络详情
     *
     * 查询中心网络详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCentralNetwork($request)
    {
        return $this->showCentralNetworkWithHttpInfo($request);
    }

    public function showCentralNetworkWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-networks/{central_network_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ShowCentralNetworkResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ShowCentralNetworkRequest');
    }

    /**
     * 创建中心网络标签
     *
     * 创建中心网络标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function tagCentralNetwork($request)
    {
        return $this->tagCentralNetworkWithHttpInfo($request);
    }

    public function tagCentralNetworkWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-networks/{central_network_id}/tag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\TagCentralNetworkResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\TagCentralNetworkRequest');
    }

    /**
     * 删除中心网络标签
     *
     * 删除中心网络标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function untagCentralNetwork($request)
    {
        return $this->untagCentralNetworkWithHttpInfo($request);
    }

    public function untagCentralNetworkWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-networks/{central_network_id}/untag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\UntagCentralNetworkResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\UntagCentralNetworkRequest');
    }

    /**
     * 更新中心网络详情
     *
     * 更新中心网络详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCentralNetwork($request)
    {
        return $this->updateCentralNetworkWithHttpInfo($request);
    }

    public function updateCentralNetworkWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-networks/{central_network_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateCentralNetworkResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateCentralNetworkRequest');
    }

    /**
     * 创建中心网络ER路由表附件
     *
     * 创建中心网络的路由表附件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCentralNetworkErRouteTableAttachment($request)
    {
        return $this->createCentralNetworkErRouteTableAttachmentWithHttpInfo($request);
    }

    public function createCentralNetworkErRouteTableAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/er-route-table-attachments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\CreateCentralNetworkErRouteTableAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\CreateCentralNetworkErRouteTableAttachmentRequest');
    }

    /**
     * 创建中心网络GDGW附件
     *
     * 创建中心网络的GDGW附件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCentralNetworkGdgwAttachment($request)
    {
        return $this->createCentralNetworkGdgwAttachmentWithHttpInfo($request);
    }

    public function createCentralNetworkGdgwAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/gdgw-attachments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\CreateCentralNetworkGdgwAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\CreateCentralNetworkGdgwAttachmentRequest');
    }

    /**
     * 删除中心网络附件
     *
     * 删除中心网络附件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCentralNetworkAttachment($request)
    {
        return $this->deleteCentralNetworkAttachmentWithHttpInfo($request);
    }

    public function deleteCentralNetworkAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/attachments/{attachment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
        }
        if ($localVarParams['attachmentId'] !== null) {
            $pathParams['attachment_id'] = $localVarParams['attachmentId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteCentralNetworkAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteCentralNetworkAttachmentRequest');
    }

    /**
     * 查询中心网络附件列表
     *
     * 查询中心网络附件列表，分页查询使用的参数为marker、limit。limit默认值为0，没有指定marker时返回第一条数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCentralNetworkAttachments($request)
    {
        return $this->listCentralNetworkAttachmentsWithHttpInfo($request);
    }

    public function listCentralNetworkAttachmentsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/attachments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['attachmentInstanceType'] !== null) {
            $queryParams['attachment_instance_type'] = $localVarParams['attachmentInstanceType'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['attachmentInstanceId'] !== null) {
            $queryParams['attachment_instance_id'] = $localVarParams['attachmentInstanceId'];
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkAttachmentsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkAttachmentsRequest');
    }

    /**
     * 查询中心网络ER路由表附件列表
     *
     * 查询中心网络ER路由表附件列表。
     * 分页查询使用的参数为marker、limit。limit默认值为0，没有指定marker时返回第一条数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCentralNetworkErRouteTableAttachments($request)
    {
        return $this->listCentralNetworkErRouteTableAttachmentsWithHttpInfo($request);
    }

    public function listCentralNetworkErRouteTableAttachmentsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/er-route-table-attachments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['attachmentInstanceId'] !== null) {
            $queryParams['attachment_instance_id'] = $localVarParams['attachmentInstanceId'];
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkErRouteTableAttachmentsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkErRouteTableAttachmentsRequest');
    }

    /**
     * 查询中心网络GDGW附件列表
     *
     * 查询中心网络GDGW附件列表。
     * 分页查询使用的参数为marker、limit。limit默认值为0，没有指定marker时返回第一条数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCentralNetworkGdgwAttachments($request)
    {
        return $this->listCentralNetworkGdgwAttachmentsWithHttpInfo($request);
    }

    public function listCentralNetworkGdgwAttachmentsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/gdgw-attachments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['globalDcGatewayId'] !== null) {
            $queryParams['global_dc_gateway_id'] = $localVarParams['globalDcGatewayId'];
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkGdgwAttachmentsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkGdgwAttachmentsRequest');
    }

    /**
     * 查询中心网络ER路由表附件详情
     *
     * 查询中心网络ER路由表附件详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCentralNetworkErRouteTableAttachment($request)
    {
        return $this->showCentralNetworkErRouteTableAttachmentWithHttpInfo($request);
    }

    public function showCentralNetworkErRouteTableAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/er-route-table-attachments/{er_route_table_attachment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
        }
        if ($localVarParams['erRouteTableAttachmentId'] !== null) {
            $pathParams['er_route_table_attachment_id'] = $localVarParams['erRouteTableAttachmentId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ShowCentralNetworkErRouteTableAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ShowCentralNetworkErRouteTableAttachmentRequest');
    }

    /**
     * 查询中心网络GDGW附件详情
     *
     * 查询中心网络GDGW附件详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCentralNetworkGdgwAttachment($request)
    {
        return $this->showCentralNetworkGdgwAttachmentWithHttpInfo($request);
    }

    public function showCentralNetworkGdgwAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/gdgw-attachments/{gdgw_attachment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
        }
        if ($localVarParams['gdgwAttachmentId'] !== null) {
            $pathParams['gdgw_attachment_id'] = $localVarParams['gdgwAttachmentId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ShowCentralNetworkGdgwAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ShowCentralNetworkGdgwAttachmentRequest');
    }

    /**
     * 更新中心网络ER路由表附件
     *
     * 更新中心网络ER路由表附件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCentralNetworkErRouteTableAttachment($request)
    {
        return $this->updateCentralNetworkErRouteTableAttachmentWithHttpInfo($request);
    }

    public function updateCentralNetworkErRouteTableAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/er-route-table-attachments/{er_route_table_attachment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
        }
        if ($localVarParams['erRouteTableAttachmentId'] !== null) {
            $pathParams['er_route_table_attachment_id'] = $localVarParams['erRouteTableAttachmentId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateCentralNetworkErRouteTableAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateCentralNetworkErRouteTableAttachmentRequest');
    }

    /**
     * 更新中心网络GDGW附件
     *
     * 更新中心网络GDGW附件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCentralNetworkGdgwAttachment($request)
    {
        return $this->updateCentralNetworkGdgwAttachmentWithHttpInfo($request);
    }

    public function updateCentralNetworkGdgwAttachmentWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/gdgw-attachments/{gdgw_attachment_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
        }
        if ($localVarParams['gdgwAttachmentId'] !== null) {
            $pathParams['gdgw_attachment_id'] = $localVarParams['gdgwAttachmentId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateCentralNetworkGdgwAttachmentResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateCentralNetworkGdgwAttachmentRequest');
    }

    /**
     * 查询中心网络能力列表
     *
     * 查询中心网络能力列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCentralNetworkCapabilities($request)
    {
        return $this->listCentralNetworkCapabilitiesWithHttpInfo($request);
    }

    public function listCentralNetworkCapabilitiesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/capabilities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['capability'] !== null) {
            $queryParams['capability'] = $localVarParams['capability'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkCapabilitiesResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkCapabilitiesRequest');
    }

    /**
     * 查询中心网络连接列表
     *
     * 查询中心网络连接列表接口。
     * 分页查询使用的参数为marker、limit。limit默认值为0，没有指定marker时返回第一条数据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCentralNetworkConnections($request)
    {
        return $this->listCentralNetworkConnectionsWithHttpInfo($request);
    }

    public function listCentralNetworkConnectionsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['globalConnectionBandwidthId'] !== null) {
            $queryParams['global_connection_bandwidth_id'] = $localVarParams['globalConnectionBandwidthId'];
        }
        if ($localVarParams['bandwidthType'] !== null) {
            $queryParams['bandwidth_type'] = $localVarParams['bandwidthType'];
        }
        if ($localVarParams['connectionType'] !== null) {
            $queryParams['connection_type'] = $localVarParams['connectionType'];
        }
        if ($localVarParams['isCrossRegion'] !== null) {
            $queryParams['is_cross_region'] = $localVarParams['isCrossRegion'];
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkConnectionsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkConnectionsRequest');
    }

    /**
     * 更新中心网络连接接口
     *
     * 更新中心网络连接接口（仅支持更新带宽）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCentralNetworkConnection($request)
    {
        return $this->updateCentralNetworkConnectionWithHttpInfo($request);
    }

    public function updateCentralNetworkConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/central-network/{central_network_id}/connections/{connection_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['centralNetworkId'] !== null) {
            $pathParams['central_network_id'] = $localVarParams['centralNetworkId'];
        }
        if ($localVarParams['connectionId'] !== null) {
            $pathParams['connection_id'] = $localVarParams['connectionId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateCentralNetworkConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateCentralNetworkConnectionRequest');
    }

    /**
     * 查询中心网络配额
     *
     * 查询中心网络配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCentralNetworkQuotas($request)
    {
        return $this->listCentralNetworkQuotasWithHttpInfo($request);
    }

    public function listCentralNetworkQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcn/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['quotaType'] !== null) {
            $queryParams['quota_type'] = $localVarParams['quotaType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkQuotasResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCentralNetworkQuotasRequest');
    }

    /**
     * 创建云连接实例
     *
     * 创建云连接实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createCloudConnection($request)
    {
        return $this->createCloudConnectionWithHttpInfo($request);
    }

    public function createCloudConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/cloud-connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\CreateCloudConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\CreateCloudConnectionRequest');
    }

    /**
     * 删除云连接实例
     *
     * 删除云连接实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteCloudConnection($request)
    {
        return $this->deleteCloudConnectionWithHttpInfo($request);
    }

    public function deleteCloudConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/cloud-connections/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteCloudConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteCloudConnectionRequest');
    }

    /**
     * 查询云连接实例的标签信息
     *
     * 查询云连接实例的标签信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCloudConnectionTags($request)
    {
        return $this->listCloudConnectionTagsWithHttpInfo($request);
    }

    public function listCloudConnectionTagsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/cloud-connections/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCloudConnectionTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCloudConnectionTagsRequest');
    }

    /**
     * 查询云连接列表
     *
     * 查询云连接列表。
     * 分页查询使用的参数为marker、limit。marker和limit一起使用时才会生效，单独使用无效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCloudConnections($request)
    {
        return $this->listCloudConnectionsWithHttpInfo($request);
    }

    public function listCloudConnectionsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/cloud-connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['usedScene'] !== null) {
            $queryParams['used_scene'] = $localVarParams['usedScene'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCloudConnectionsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCloudConnectionsRequest');
    }

    /**
     * 通过标签过滤云连接实例
     *
     * 通过标签过滤云连接实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCloudConnectionsByTags($request)
    {
        return $this->listCloudConnectionsByTagsWithHttpInfo($request);
    }

    public function listCloudConnectionsByTagsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/cloud-connections/filter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCloudConnectionsByTagsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCloudConnectionsByTagsRequest');
    }

    /**
     * 查询云连接实例
     *
     * 查询云连接实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCloudConnection($request)
    {
        return $this->showCloudConnectionWithHttpInfo($request);
    }

    public function showCloudConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/cloud-connections/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ShowCloudConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ShowCloudConnectionRequest');
    }

    /**
     * 创建云连接实例标签
     *
     * 创建云连接实例标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function tagCloudConnection($request)
    {
        return $this->tagCloudConnectionWithHttpInfo($request);
    }

    public function tagCloudConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/cloud-connections/{id}/tag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\TagCloudConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\TagCloudConnectionRequest');
    }

    /**
     * 删除云连接实例标签
     *
     * 删除云连接实例标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function untagCloudConnection($request)
    {
        return $this->untagCloudConnectionWithHttpInfo($request);
    }

    public function untagCloudConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/cloud-connections/{id}/untag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\UntagCloudConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\UntagCloudConnectionRequest');
    }

    /**
     * 更新云连接实例
     *
     * 更新云连接实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCloudConnection($request)
    {
        return $this->updateCloudConnectionWithHttpInfo($request);
    }

    public function updateCloudConnectionWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/cloud-connections/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateCloudConnectionResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateCloudConnectionRequest');
    }

    /**
     * 查询云连接配额
     *
     * 查询云连接配额。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCloudConnectionQuotas($request)
    {
        return $this->listCloudConnectionQuotasWithHttpInfo($request);
    }

    public function listCloudConnectionQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['quotaType'] !== null) {
            $queryParams['quota_type'] = $localVarParams['quotaType'];
        }
        if ($localVarParams['cloudConnectionId'] !== null) {
            $queryParams['cloud_connection_id'] = $localVarParams['cloudConnectionId'];
        }
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCloudConnectionQuotasResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCloudConnectionQuotasRequest');
    }

    /**
     * 查询云连接路由条目列表
     *
     * 查询云连接路由条目列表。
     * 分页查询使用的参数为marker、limit。marker和limit一起使用时才会生效，单独使用无效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCloudConnectionRoutes($request)
    {
        return $this->listCloudConnectionRoutesWithHttpInfo($request);
    }

    public function listCloudConnectionRoutesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/cloud-connection-routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['cloudConnectionId'] !== null) {
            $queryParams['cloud_connection_id'] = $localVarParams['cloudConnectionId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListCloudConnectionRoutesResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListCloudConnectionRoutesRequest');
    }

    /**
     * 查询云连接路由条目详情
     *
     * 查询云连接路由条目列表。
     * 分页查询使用的参数为marker、limit。marker和limit一起使用时才会生效，单独使用无效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCloudConnectionRoutes($request)
    {
        return $this->showCloudConnectionRoutesWithHttpInfo($request);
    }

    public function showCloudConnectionRoutesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/cloud-connection-routes/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ShowCloudConnectionRoutesResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ShowCloudConnectionRoutesRequest');
    }

    /**
     * 全域互联带宽绑定实例
     *
     * 全域互联带宽绑定实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function associateGlobalConnectionBandwidthInstance($request)
    {
        return $this->associateGlobalConnectionBandwidthInstanceWithHttpInfo($request);
    }

    public function associateGlobalConnectionBandwidthInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcb/gcbandwidths/{id}/associate-instance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\AssociateGlobalConnectionBandwidthInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\AssociateGlobalConnectionBandwidthInstanceRequest');
    }

    /**
     * 创建全域互联带宽
     *
     * 创建全域互联带宽。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGlobalConnectionBandwidth($request)
    {
        return $this->createGlobalConnectionBandwidthWithHttpInfo($request);
    }

    public function createGlobalConnectionBandwidthWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcb/gcbandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\CreateGlobalConnectionBandwidthResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\CreateGlobalConnectionBandwidthRequest');
    }

    /**
     * 删除全域互联带宽
     *
     * 删除全域互联带宽。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGlobalConnectionBandwidth($request)
    {
        return $this->deleteGlobalConnectionBandwidthWithHttpInfo($request);
    }

    public function deleteGlobalConnectionBandwidthWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcb/gcbandwidths/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteGlobalConnectionBandwidthResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteGlobalConnectionBandwidthRequest');
    }

    /**
     * 全域互联带宽解绑实例
     *
     * 全域互联带宽解绑实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disassociateGlobalConnectionBandwidthInstance($request)
    {
        return $this->disassociateGlobalConnectionBandwidthInstanceWithHttpInfo($request);
    }

    public function disassociateGlobalConnectionBandwidthInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcb/gcbandwidths/{id}/disassociate-instance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\DisassociateGlobalConnectionBandwidthInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\DisassociateGlobalConnectionBandwidthInstanceRequest');
    }

    /**
     * 查询全域互联带宽租户配置信息
     *
     * 查询全域互联带宽租户配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGlobalConnectionBandwidthConfigs($request)
    {
        return $this->listGlobalConnectionBandwidthConfigsWithHttpInfo($request);
    }

    public function listGlobalConnectionBandwidthConfigsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcb/configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListGlobalConnectionBandwidthConfigsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListGlobalConnectionBandwidthConfigsRequest');
    }

    /**
     * 查询线路等级列表
     *
     * 查询线路等级列表。
     * 分页查询使用的参数为marker、limit。marker和limit一起使用时才会生效，单独使用无效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGlobalConnectionBandwidthLineLevels($request)
    {
        return $this->listGlobalConnectionBandwidthLineLevelsWithHttpInfo($request);
    }

    public function listGlobalConnectionBandwidthLineLevelsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcb/line-levels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['localArea'] !== null) {
            $queryParams['local_area'] = $localVarParams['localArea'];
        }
        if ($localVarParams['remoteArea'] !== null) {
            $queryParams['remote_area'] = $localVarParams['remoteArea'];
        }
        if ($localVarParams['levels'] !== null) {
            $queryParams['levels'] = $localVarParams['levels'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListGlobalConnectionBandwidthLineLevelsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListGlobalConnectionBandwidthLineLevelsRequest');
    }

    /**
     * 查询站点列表
     *
     * 查询站点列表。
     * 分页查询使用的参数为marker、limit。marker和limit一起使用时才会生效，单独使用无效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGlobalConnectionBandwidthSites($request)
    {
        return $this->listGlobalConnectionBandwidthSitesWithHttpInfo($request);
    }

    public function listGlobalConnectionBandwidthSitesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcb/sites';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['siteCode'] !== null) {
            $queryParams['site_code'] = $localVarParams['siteCode'];
        }
        if ($localVarParams['siteType'] !== null) {
            $queryParams['site_type'] = $localVarParams['siteType'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListGlobalConnectionBandwidthSitesResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListGlobalConnectionBandwidthSitesRequest');
    }

    /**
     * 查询线路规格列表
     *
     * 查询线路规格列表。租户白名单控制，默认为空。
     * 分页查询使用的参数为marker、limit。marker和limit一起使用时才会生效，单独使用无效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGlobalConnectionBandwidthSpecCodes($request)
    {
        return $this->listGlobalConnectionBandwidthSpecCodesWithHttpInfo($request);
    }

    public function listGlobalConnectionBandwidthSpecCodesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcb/spec-codes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['localArea'] !== null) {
            $queryParams['local_area'] = $localVarParams['localArea'];
        }
        if ($localVarParams['remoteArea'] !== null) {
            $queryParams['remote_area'] = $localVarParams['remoteArea'];
        }
        if ($localVarParams['level'] !== null) {
            $queryParams['level'] = $localVarParams['level'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListGlobalConnectionBandwidthSpecCodesResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListGlobalConnectionBandwidthSpecCodesRequest');
    }

    /**
     * 查询全域互联带宽列表
     *
     * 查询全域互联带宽列表。
     * 分页查询使用的参数为marker、limit。marker和limit一起使用时才会生效，单独使用无效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGlobalConnectionBandwidths($request)
    {
        return $this->listGlobalConnectionBandwidthsWithHttpInfo($request);
    }

    public function listGlobalConnectionBandwidthsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcb/gcbandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['bindingService'] !== null) {
            $queryParams['binding_service'] = $localVarParams['bindingService'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['chargeMode'] !== null) {
            $queryParams['charge_mode'] = $localVarParams['chargeMode'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListGlobalConnectionBandwidthsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListGlobalConnectionBandwidthsRequest');
    }

    /**
     * 查询符合绑定条件的全域互联带宽列表
     *
     * 查询符合绑定条件的全域互联带宽列表。
     * 分页查询使用的参数为marker、limit。marker和limit一起使用时才会生效，单独使用无效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSupportBindingConnectionBandwidths($request)
    {
        return $this->listSupportBindingConnectionBandwidthsWithHttpInfo($request);
    }

    public function listSupportBindingConnectionBandwidthsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcb/gcbandwidths/support-bindings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['localArea'] !== null) {
            $queryParams['local_area'] = $localVarParams['localArea'];
        }
        if ($localVarParams['remoteArea'] !== null) {
            $queryParams['remote_area'] = $localVarParams['remoteArea'];
        }
        if ($localVarParams['bindingService'] !== null) {
            $queryParams['binding_service'] = $localVarParams['bindingService'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListSupportBindingConnectionBandwidthsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListSupportBindingConnectionBandwidthsRequest');
    }

    /**
     * 查询全域互联带宽详情
     *
     * 查询全域互联带宽详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showGlobalConnectionBandwidth($request)
    {
        return $this->showGlobalConnectionBandwidthWithHttpInfo($request);
    }

    public function showGlobalConnectionBandwidthWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcb/gcbandwidths/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ShowGlobalConnectionBandwidthResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ShowGlobalConnectionBandwidthRequest');
    }

    /**
     * 更新全域互联带宽详情
     *
     * 更新全域互联带宽详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGlobalConnectionBandwidth($request)
    {
        return $this->updateGlobalConnectionBandwidthWithHttpInfo($request);
    }

    public function updateGlobalConnectionBandwidthWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/gcb/gcbandwidths/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateGlobalConnectionBandwidthResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateGlobalConnectionBandwidthRequest');
    }

    /**
     * 创建域间带宽实例
     *
     * 创建域间带宽实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createInterRegionBandwidth($request)
    {
        return $this->createInterRegionBandwidthWithHttpInfo($request);
    }

    public function createInterRegionBandwidthWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/inter-region-bandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\CreateInterRegionBandwidthResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\CreateInterRegionBandwidthRequest');
    }

    /**
     * 删除域间带宽实例
     *
     * 删除域间带宽实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteInterRegionBandwidth($request)
    {
        return $this->deleteInterRegionBandwidthWithHttpInfo($request);
    }

    public function deleteInterRegionBandwidthWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/inter-region-bandwidths/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteInterRegionBandwidthResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteInterRegionBandwidthRequest');
    }

    /**
     * 查询域间带宽列表
     *
     * 查询域间带宽列表。
     * 分页查询使用的参数为marker、limit。marker和limit一起使用时才会生效，单独使用无效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listInterRegionBandwidths($request)
    {
        return $this->listInterRegionBandwidthsWithHttpInfo($request);
    }

    public function listInterRegionBandwidthsWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/inter-region-bandwidths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['cloudConnectionId'] !== null) {
            $queryParams['cloud_connection_id'] = $localVarParams['cloudConnectionId'];
        }
        if ($localVarParams['bandwidthPackageId'] !== null) {
            $queryParams['bandwidth_package_id'] = $localVarParams['bandwidthPackageId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListInterRegionBandwidthsResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListInterRegionBandwidthsRequest');
    }

    /**
     * 查询域间带宽实例
     *
     * 查询域间带宽实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showInterRegionBandwidth($request)
    {
        return $this->showInterRegionBandwidthWithHttpInfo($request);
    }

    public function showInterRegionBandwidthWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/inter-region-bandwidths/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ShowInterRegionBandwidthResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ShowInterRegionBandwidthRequest');
    }

    /**
     * 更新域间带宽实例
     *
     * 更新域间带宽实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateInterRegionBandwidth($request)
    {
        return $this->updateInterRegionBandwidthWithHttpInfo($request);
    }

    public function updateInterRegionBandwidthWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/inter-region-bandwidths/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateInterRegionBandwidthResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateInterRegionBandwidthRequest');
    }

    /**
     * 创建网络实例
     *
     * 创建网络实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createNetworkInstance($request)
    {
        return $this->createNetworkInstanceWithHttpInfo($request);
    }

    public function createNetworkInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/network-instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\CreateNetworkInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\CreateNetworkInstanceRequest');
    }

    /**
     * 删除网络实例
     *
     * 删除网络实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteNetworkInstance($request)
    {
        return $this->deleteNetworkInstanceWithHttpInfo($request);
    }

    public function deleteNetworkInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/network-instances/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteNetworkInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\DeleteNetworkInstanceRequest');
    }

    /**
     * 查询网络实例列表
     *
     * 查询云连接列表。
     * 分页查询使用的参数为marker、limit。marker和limit一起使用时才会生效，单独使用无效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listNetworkInstances($request)
    {
        return $this->listNetworkInstancesWithHttpInfo($request);
    }

    public function listNetworkInstancesWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/network-instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['id'] !== null) {
            $queryParams['id'] = $localVarParams['id'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['description'] !== null) {
            $queryParams['description'] = $localVarParams['description'];
        }
        if ($localVarParams['cloudConnectionId'] !== null) {
            $queryParams['cloud_connection_id'] = $localVarParams['cloudConnectionId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['regionId'] !== null) {
            $queryParams['region_id'] = $localVarParams['regionId'];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ListNetworkInstancesResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ListNetworkInstancesRequest');
    }

    /**
     * 查询网络实例
     *
     * 查询网络实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showNetworkInstance($request)
    {
        return $this->showNetworkInstanceWithHttpInfo($request);
    }

    public function showNetworkInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/network-instances/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\ShowNetworkInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\ShowNetworkInstanceRequest');
    }

    /**
     * 更新网络实例
     *
     * 更新网络实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateNetworkInstance($request)
    {
        return $this->updateNetworkInstanceWithHttpInfo($request);
    }

    public function updateNetworkInstanceWithHttpInfo($request)
    {
        $resourcePath = '/v3/{domain_id}/ccaas/network-instances/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateNetworkInstanceResponse',
            $requestType='\HuaweiCloud\SDK\Cc\V3\Model\UpdateNetworkInstanceRequest');
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