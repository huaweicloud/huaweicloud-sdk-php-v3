<?php

namespace HuaweiCloud\SDK\Ecs\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class EcsClient extends Client
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
        return new ClientBuilder(new EcsClient());
    }


    /**
     * 云服务器组添加成员
     * 将云服务器加入云服务器组。添加成功后，如果该云服务器组是反亲和性策略的，则该云服务器与云服务器组中的其他成员尽量分散地创建在不同主机上。如果该云服务器时故障域类型的，则该云服务器会拥有故障域属性。
     *
     * @param $request 请求对象
     * @return response
     */
    public function addServerGroupMember($request)
    {
        return $this->addServerGroupMemberWithHttpInfo($request);
    }

    public function addServerGroupMemberWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/os-server-groups/{server_group_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverGroupId'] !== null) {
            $pathParams['server_group_id'] = $localVarParams['serverGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\AddServerGroupMemberResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\AddServerGroupMemberRequest');
    }

    /**
     * 弹性云服务器挂载磁盘
     * 把磁盘挂载到弹性云服务器上。
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachServerVolume($request)
    {
        return $this->attachServerVolumeWithHttpInfo($request);
    }

    public function attachServerVolumeWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/attachvolume';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\AttachServerVolumeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\AttachServerVolumeRequest');
    }

    /**
     * 批量添加云服务器网卡
     * 给云服务器添加一张或多张网卡。
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAddServerNics($request)
    {
        return $this->batchAddServerNicsWithHttpInfo($request);
    }

    public function batchAddServerNicsWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/nics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchAddServerNicsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchAddServerNicsRequest');
    }

    /**
     * 批量添加云服务器标签
     * - 为指定云服务器批量添加标签。  - 标签管理服务TMS使用该接口批量管理云服务器的标签。
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateServerTags($request)
    {
        return $this->batchCreateServerTagsWithHttpInfo($request);
    }

    public function batchCreateServerTagsWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchCreateServerTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchCreateServerTagsRequest');
    }

    /**
     * 批量删除云服务器网卡
     * 卸载并删除云服务器中的一张或多张网卡。
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteServerNics($request)
    {
        return $this->batchDeleteServerNicsWithHttpInfo($request);
    }

    public function batchDeleteServerNicsWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/nics/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchDeleteServerNicsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchDeleteServerNicsRequest');
    }

    /**
     * 批量删除云服务器标签
     * - 为指定云服务器批量删除标签。  - 标签管理服务TMS使用该接口批量管理云服务器的标签。
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteServerTags($request)
    {
        return $this->batchDeleteServerTagsWithHttpInfo($request);
    }

    public function batchDeleteServerTagsWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchDeleteServerTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchDeleteServerTagsRequest');
    }

    /**
     * 批量重启云服务器
     * 根据给定的云服务器ID列表，批量重启云服务器，一次最多可以重启1000台。
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchRebootServers($request)
    {
        return $this->batchRebootServersWithHttpInfo($request);
    }

    public function batchRebootServersWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchRebootServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchRebootServersRequest');
    }

    /**
     * 批量启动云服务器
     * 根据给定的云服务器ID列表，批量启动云服务器，一次最多可以启动1000台。
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchStartServers($request)
    {
        return $this->batchStartServersWithHttpInfo($request);
    }

    public function batchStartServersWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchStartServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchStartServersRequest');
    }

    /**
     * 批量关闭云服务器
     * 根据给定的云服务器ID列表，批量关闭云服务器，一次最多可以关闭1000台。
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchStopServers($request)
    {
        return $this->batchStopServersWithHttpInfo($request);
    }

    public function batchStopServersWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchStopServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\BatchStopServersRequest');
    }

    /**
     * 切换弹性云服务器操作系统(安装Cloud init)
     * 切换弹性云服务器操作系统。支持弹性云服务器数据盘不变的情况下，使用新镜像重装系统盘。  调用该接口后，系统将卸载系统盘，然后使用新镜像重新创建系统盘，并挂载至弹性云服务器，实现切换操作系统功能。
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeServerOsWithCloudInit($request)
    {
        return $this->changeServerOsWithCloudInitWithHttpInfo($request);
    }

    public function changeServerOsWithCloudInitWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudservers/{server_id}/changeos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ChangeServerOsWithCloudInitResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ChangeServerOsWithCloudInitRequest');
    }

    /**
     * 创建云服务器(按需)
     * 创建一台或多台[按需付费](https://support.huaweicloud.com/productdesc-ecs/ecs_01_0065.html)方式的云服务器。  弹性云服务器的登录鉴权方式包括两种：密钥对、密码。为安全起见，推荐使用密钥对方式。  - 密钥对 密钥对指使用密钥对作为弹性云服务器的鉴权方式。 接口调用方法：使用key_name字段，指定弹性云服务器登录时使用的密钥文件。  - 密码 密码指使用设置初始密码方式作为弹性云服务器的鉴权方式，此时，您可以通过用户名密码方式登录弹性云服务器，Linux操作系统时为root用户的初始密码，Windows操作系统时为Administrator用户的初始密码。  接口调用方法：使用adminPass字段，指定管理员帐号的初始登录密码。对于镜像已安装Cloud-init的Linux云服务器，如果需要使用密文密码，可以使用user_data字段进行密码注入。  &gt; 对于安装Cloud-init镜像的Linux云服务器云主机，若指定user_data字段，则adminPass字段无效。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPostPaidServers($request)
    {
        return $this->createPostPaidServersWithHttpInfo($request);
    }

    public function createPostPaidServersWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\CreatePostPaidServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\CreatePostPaidServersRequest');
    }

    /**
     * 创建云服务器组
     * 创建弹性云服务器组。  与原生的创建云服务器组接口不同之处在于该接口支持企业项目细粒度权限的校验。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createServerGroup($request)
    {
        return $this->createServerGroupWithHttpInfo($request);
    }

    public function createServerGroupWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/os-server-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\CreateServerGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\CreateServerGroupRequest');
    }

    /**
     * 创建云服务器
     * 创建一台或多台云服务器。  指该接口兼容《弹性云服务器接口参考》创建云服务器v1的功能，同时合入新功能，支持创建[包年/包月](https://support.huaweicloud.com/productdesc-ecs/ecs_01_0065.html)的弹性云服务器。  弹性云服务器的登录鉴权方式包括两种：密钥对、密码。为安全起见，推荐使用密钥对方式。  - 密钥对  指使用密钥对作为弹性云服务器的鉴权方式。  接口调用方法：使用key_name字段，指定弹性云服务器登录时使用的密钥文件。  - 密码  指使用设置初始密码方式作为弹性云服务器的鉴权方式，此时，您可以通过用户名密码方式登录弹性云服务器，Linux操作系统时为root用户的初始密码，Windows操作系统时为Administrator用户的初始密码。  接口调用方法：使用adminPass字段，指定管理员帐号的初始登录密码。对于镜像已安装Cloud-init的Linux云服务器，如果需要使用密文密码，可以使用user_data字段进行密码注入。  &gt; 对于安装Cloud-init镜像的Linux云服务器云主机，若指定user_data字段，则adminPass字段无效。  购买操作示例： - [使用API购买ECS过程中常见问题及处理方法](https://support.huaweicloud.com/api-ecs/ecs_04_0007.html) - [获取Token并检验Token的有效期 ](https://support.huaweicloud.com/api-ecs/ecs_04_0008.html)
     *
     * @param $request 请求对象
     * @return response
     */
    public function createServers($request)
    {
        return $this->createServersWithHttpInfo($request);
    }

    public function createServersWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1.1/{project_id}/cloudservers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\CreateServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\CreateServersRequest');
    }

    /**
     * 删除云服务器组
     * 删除云服务器组。  与原生的删除云服务器组接口不同之处在于该接口支持企业项目细粒度权限的校验。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteServerGroup($request)
    {
        return $this->deleteServerGroupWithHttpInfo($request);
    }

    public function deleteServerGroupWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/os-server-groups/{server_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverGroupId'] !== null) {
            $pathParams['server_group_id'] = $localVarParams['serverGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\DeleteServerGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\DeleteServerGroupRequest');
    }

    /**
     * 云服务器组删除成员
     * 将弹性云服务器移出云服务器组。移出后，该云服务器与云服务器组中的成员不再遵从反亲和策略。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteServerGroupMember($request)
    {
        return $this->deleteServerGroupMemberWithHttpInfo($request);
    }

    public function deleteServerGroupMemberWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/os-server-groups/{server_group_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverGroupId'] !== null) {
            $pathParams['server_group_id'] = $localVarParams['serverGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\DeleteServerGroupMemberResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\DeleteServerGroupMemberRequest');
    }

    /**
     * 删除云服务器指定元数据
     * 删除云服务器指定元数据。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteServerMetadata($request)
    {
        return $this->deleteServerMetadataWithHttpInfo($request);
    }

    public function deleteServerMetadataWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/metadata/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['key'] !== null) {
            $pathParams['key'] = $localVarParams['key'];
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\DeleteServerMetadataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\DeleteServerMetadataRequest');
    }

    /**
     * 删除云服务器
     * 根据指定的云服务器ID列表，删除云服务器。  系统支持删除单台云服务器和批量删除多台云服务器操作，批量删除云服务器时，一次最多可以删除1000台。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteServers($request)
    {
        return $this->deleteServersWithHttpInfo($request);
    }

    public function deleteServersWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\DeleteServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\DeleteServersRequest');
    }

    /**
     * 弹性云服务器卸载磁盘
     * 从弹性云服务器中卸载磁盘。
     *
     * @param $request 请求对象
     * @return response
     */
    public function detachServerVolume($request)
    {
        return $this->detachServerVolumeWithHttpInfo($request);
    }

    public function detachServerVolumeWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/detachvolume/{volume_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['deleteFlag'] !== null) {
            $queryParams['delete_flag'] = $localVarParams['deleteFlag'];
        }
        if ($localVarParams['serverId'] !== null) {
            $pathParams['server_id'] = $localVarParams['serverId'];
        }
        if ($localVarParams['volumeId'] !== null) {
            $pathParams['volume_id'] = $localVarParams['volumeId'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\DetachServerVolumeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\DetachServerVolumeRequest');
    }

    /**
     * 查询规格详情和规格扩展信息列表
     * 查询云服务器规格详情信息和规格扩展信息列表。
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
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['availabilityZone'] !== null) {
            $queryParams['availability_zone'] = $localVarParams['availabilityZone'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ListFlavorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ListFlavorsRequest');
    }

    /**
     * 查询云服务器规格变更支持列表
     * 变更规格时，部分规格的云服务器之间不能互相变更。您可以通过本接口，通过指定弹性云服务器规格，查询该规格可以变更的规格列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResizeFlavors($request)
    {
        return $this->listResizeFlavorsWithHttpInfo($request);
    }

    public function listResizeFlavorsWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/resize_flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceUuid'] !== null) {
            $queryParams['instance_uuid'] = $localVarParams['instanceUuid'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['sortDir'] !== null) {
            $queryParams['sort_dir'] = $localVarParams['sortDir'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['sourceFlavorId'] !== null) {
            $queryParams['source_flavor_id'] = $localVarParams['sourceFlavorId'];
        }
        if ($localVarParams['sourceFlavorName'] !== null) {
            $queryParams['source_flavor_name'] = $localVarParams['sourceFlavorName'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ListResizeFlavorsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ListResizeFlavorsRequest');
    }

    /**
     * 查询弹性云服务器磁盘信息
     * 查询弹性云服务器挂载的磁盘信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServerBlockDevices($request)
    {
        return $this->listServerBlockDevicesWithHttpInfo($request);
    }

    public function listServerBlockDevicesWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/block_device';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ListServerBlockDevicesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ListServerBlockDevicesRequest');
    }

    /**
     * 查询云服务器组列表
     * 查询弹性云服务器组。  与原生的创建云服务器组接口不同之处在于该接口支持企业项目细粒度权限的校验。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServerGroups($request)
    {
        return $this->listServerGroupsWithHttpInfo($request);
    }

    public function listServerGroupsWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/os-server-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ListServerGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ListServerGroupsRequest');
    }

    /**
     * 查询云服务器网卡信息
     * 查询云服务器网卡信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServerInterfaces($request)
    {
        return $this->listServerInterfacesWithHttpInfo($request);
    }

    public function listServerInterfacesWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/os-interface';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ListServerInterfacesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ListServerInterfacesRequest');
    }

    /**
     * 查询云服务器详情列表
     * 根据用户请求条件从数据库筛选、查询所有的弹性云服务器，并关联相关表获取到弹性云服务器的详细信息。  该接口支持查询弹性云服务器计费方式，以及是否被冻结。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServersDetails($request)
    {
        return $this->listServersDetailsWithHttpInfo($request);
    }

    public function listServersDetailsWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['flavor'] !== null) {
            $queryParams['flavor'] = $localVarParams['flavor'];
        }
        if ($localVarParams['ip'] !== null) {
            $queryParams['ip'] = $localVarParams['ip'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['notTags'] !== null) {
            $queryParams['not_tags'] = $localVarParams['notTags'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['reservationId'] !== null) {
            $queryParams['reservation_id'] = $localVarParams['reservationId'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ListServersDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ListServersDetailsRequest');
    }

    /**
     * 添加安全组
     * 为弹性云服务器添加一个安全组。  添加多个安全组时，建议最多为弹性云服务器添加5个安全组。
     *
     * @param $request 请求对象
     * @return response
     */
    public function novaAssociateSecurityGroup($request)
    {
        return $this->novaAssociateSecurityGroupWithHttpInfo($request);
    }

    public function novaAssociateSecurityGroupWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/servers/{server_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaAssociateSecurityGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaAssociateSecurityGroupRequest');
    }

    /**
     * 创建和导入SSH密钥
     * 创建SSH密钥，或把公钥导入系统，生成密钥对。  创建SSH密钥成功后，请把响应数据中的私钥内容保存到本地文件，用户使用该私钥登录云服务器云主机。为保证云服务器云主机器安全，私钥数据只能读取一次，请妥善保管。
     *
     * @param $request 请求对象
     * @return response
     */
    public function novaCreateKeypair($request)
    {
        return $this->novaCreateKeypairWithHttpInfo($request);
    }

    public function novaCreateKeypairWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/os-keypairs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['openStackApiVersion'] !== null) {
            $headerParams['open_stack_api_version'] = $localVarParams['openStackApiVersion'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaCreateKeypairResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaCreateKeypairRequest');
    }

    /**
     * 创建云服务器
     * 创建一台弹性云服务器。  弹性云服务器创建完成后，如需开启自动恢复功能，可以调用配置云服务器自动恢复的接口，具体使用请参见管理云服务器自动恢复动作。  该接口在云服务器创建失败后不支持自动回滚。若需要自动回滚能力，可以调用POST /v1/{project_id}/cloudservers接口，具体使用请参见创建云服务器（按需）。
     *
     * @param $request 请求对象
     * @return response
     */
    public function novaCreateServers($request)
    {
        return $this->novaCreateServersWithHttpInfo($request);
    }

    public function novaCreateServersWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/servers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['openStackApiVersion'] !== null) {
            $headerParams['open_stack_api_version'] = $localVarParams['openStackApiVersion'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaCreateServersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaCreateServersRequest');
    }

    /**
     * 删除SSH密钥
     * 根据SSH密钥的名称，删除指定SSH密钥。
     *
     * @param $request 请求对象
     * @return response
     */
    public function novaDeleteKeypair($request)
    {
        return $this->novaDeleteKeypairWithHttpInfo($request);
    }

    public function novaDeleteKeypairWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/os-keypairs/{keypair_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['keypairName'] !== null) {
            $pathParams['keypair_name'] = $localVarParams['keypairName'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaDeleteKeypairResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaDeleteKeypairRequest');
    }

    /**
     * 删除云服务器
     * 删除一台云服务器。
     *
     * @param $request 请求对象
     * @return response
     */
    public function novaDeleteServer($request)
    {
        return $this->novaDeleteServerWithHttpInfo($request);
    }

    public function novaDeleteServerWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/servers/{server_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaDeleteServerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaDeleteServerRequest');
    }

    /**
     * 移除安全组
     * 移除弹性云服务器中的安全组。
     *
     * @param $request 请求对象
     * @return response
     */
    public function novaDisassociateSecurityGroup($request)
    {
        return $this->novaDisassociateSecurityGroupWithHttpInfo($request);
    }

    public function novaDisassociateSecurityGroupWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/servers/{server_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaDisassociateSecurityGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaDisassociateSecurityGroupRequest');
    }

    /**
     * 查询可用区列表
     * 查询可用域列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function novaListAvailabilityZones($request)
    {
        return $this->novaListAvailabilityZonesWithHttpInfo($request);
    }

    public function novaListAvailabilityZonesWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/os-availability-zone';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaListAvailabilityZonesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaListAvailabilityZonesRequest');
    }

    /**
     * 查询SSH密钥列表
     * 查询SSH密钥信息列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function novaListKeypairs($request)
    {
        return $this->novaListKeypairsWithHttpInfo($request);
    }

    public function novaListKeypairsWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/os-keypairs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['openStackApiVersion'] !== null) {
            $headerParams['open_stack_api_version'] = $localVarParams['openStackApiVersion'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaListKeypairsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaListKeypairsRequest');
    }

    /**
     * 查询指定云服务器安全组列表
     * 查询指定弹性云服务器的安全组。
     *
     * @param $request 请求对象
     * @return response
     */
    public function novaListServerSecurityGroups($request)
    {
        return $this->novaListServerSecurityGroupsWithHttpInfo($request);
    }

    public function novaListServerSecurityGroupsWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/servers/{server_id}/os-security-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaListServerSecurityGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaListServerSecurityGroupsRequest');
    }

    /**
     * 查询云服务器详情列表
     * 查询云服务器详情信息列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function novaListServersDetails($request)
    {
        return $this->novaListServersDetailsWithHttpInfo($request);
    }

    public function novaListServersDetailsWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/servers/detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['changesSince'] !== null) {
            $queryParams['changes_since'] = $localVarParams['changesSince'];
        }
        if ($localVarParams['flavor'] !== null) {
            $queryParams['flavor'] = $localVarParams['flavor'];
        }
        if ($localVarParams['image'] !== null) {
            $queryParams['image'] = $localVarParams['image'];
        }
        if ($localVarParams['ip'] !== null) {
            $queryParams['ip'] = $localVarParams['ip'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['notTags'] !== null) {
            $queryParams['not_tags'] = $localVarParams['notTags'];
        }
        if ($localVarParams['reservationId'] !== null) {
            $queryParams['reservation_id'] = $localVarParams['reservationId'];
        }
        if ($localVarParams['sortKey'] !== null) {
            $queryParams['sort_key'] = $localVarParams['sortKey'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['tags'] !== null) {
            $queryParams['tags'] = $localVarParams['tags'];
        }
        if ($localVarParams['openStackApiVersion'] !== null) {
            $headerParams['open_stack_api_version'] = $localVarParams['openStackApiVersion'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaListServersDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaListServersDetailsRequest');
    }

    /**
     * 查询SSH密钥详情
     * 根据SSH密钥名称查询指定SSH密钥。
     *
     * @param $request 请求对象
     * @return response
     */
    public function novaShowKeypair($request)
    {
        return $this->novaShowKeypairWithHttpInfo($request);
    }

    public function novaShowKeypairWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/os-keypairs/{keypair_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['openStackApiVersion'] !== null) {
            $headerParams['open_stack_api_version'] = $localVarParams['openStackApiVersion'];
        }
        if ($localVarParams['keypairName'] !== null) {
            $pathParams['keypair_name'] = $localVarParams['keypairName'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaShowKeypairResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaShowKeypairRequest');
    }

    /**
     * 查询云服务器详情
     * 根据云服务器ID，查询云服务器的详细信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function novaShowServer($request)
    {
        return $this->novaShowServerWithHttpInfo($request);
    }

    public function novaShowServerWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2.1/{project_id}/servers/{server_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['openStackApiVersion'] !== null) {
            $headerParams['open_stack_api_version'] = $localVarParams['openStackApiVersion'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaShowServerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\NovaShowServerRequest');
    }

    /**
     * 重装弹性云服务器操作系统(安装Cloud-init)
     * 重装弹性云服务器的操作系统。支持弹性云服务器数据盘不变的情况下，使用原镜像重装系统盘。  调用该接口后，系统将卸载系统盘，然后使用原镜像重新创建系统盘，并挂载至弹性云服务器，实现重装操作系统功能。
     *
     * @param $request 请求对象
     * @return response
     */
    public function reinstallServerWithCloudInit($request)
    {
        return $this->reinstallServerWithCloudInitWithHttpInfo($request);
    }

    public function reinstallServerWithCloudInitWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v2/{project_id}/cloudservers/{server_id}/reinstallos';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ReinstallServerWithCloudInitResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ReinstallServerWithCloudInitRequest');
    }

    /**
     * 一键重置弹性云服务器密码(企业项目)
     * 重置弹性云服务器管理帐号（root用户或Administrator用户）的密码。
     *
     * @param $request 请求对象
     * @return response
     */
    public function resetServerPassword($request)
    {
        return $this->resetServerPasswordWithHttpInfo($request);
    }

    public function resetServerPasswordWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/os-reset-password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ResetServerPasswordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ResetServerPasswordRequest');
    }

    /**
     * 变更云服务器规格(按需)
     * 当您创建的弹性云服务器规格无法满足业务需要时，可以变更云服务器规格，升级vCPU、内存。具体接口的使用，请参见本节内容。  变更规格时，部分规格的云服务器之间不能互相变更。  您可以通过接口“/v1/{project_id}/cloudservers/resize_flavors?{instance_uuid,source_flavor_id,source_flavor_name}”查询支持列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function resizePostPaidServer($request)
    {
        return $this->resizePostPaidServerWithHttpInfo($request);
    }

    public function resizePostPaidServerWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/resize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ResizePostPaidServerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ResizePostPaidServerRequest');
    }

    /**
     * 变更云服务器规格
     * 变更云服务器规格。  v1.1版本：指该接口兼容v1接口的功能，同时合入新功能，支持变更包年/包月弹性云服务器的规格。  注意事项：  - 该接口可以使用合作伙伴自身的AK/SK或者token调用，也可以用合作伙伴子客户的AK/SK或者token来调用。 - 如果使用AK/SK认证方式，示例代码中region请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)中“弹性云服务 ECS”下“区域”的内容，，serviceName（英文服务名称缩写）请指定为ECS。 - Endpoint请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)中“弹性云服务 ECS”下“终端节点（Endpoint）”的内容。
     *
     * @param $request 请求对象
     * @return response
     */
    public function resizeServer($request)
    {
        return $this->resizeServerWithHttpInfo($request);
    }

    public function resizeServerWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1.1/{project_id}/cloudservers/{server_id}/resize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ResizeServerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ResizeServerRequest');
    }

    /**
     * 查询是否支持一键重置密码
     * 查询弹性云服务器是否支持一键重置密码。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResetPasswordFlag($request)
    {
        return $this->showResetPasswordFlagWithHttpInfo($request);
    }

    public function showResetPasswordFlagWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/os-resetpwd-flag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowResetPasswordFlagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowResetPasswordFlagRequest');
    }

    /**
     * 查询云服务器详情
     * 查询弹性云服务器的详细信息。  该接口支持查询弹性云服务器的计费方式，以及是否被冻结。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showServer($request)
    {
        return $this->showServerWithHttpInfo($request);
    }

    public function showServerWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowServerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowServerRequest');
    }

    /**
     * 查询云服务器组详情
     * 查询弹性云服务器组详情。  与原生的创建云服务器组接口不同之处在于该接口支持企业项目细粒度权限的校验。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showServerGroup($request)
    {
        return $this->showServerGroupWithHttpInfo($request);
    }

    public function showServerGroupWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/os-server-groups/{server_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['serverGroupId'] !== null) {
            $pathParams['server_group_id'] = $localVarParams['serverGroupId'];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowServerGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowServerGroupRequest');
    }

    /**
     * 查询租户配额
     * 查询租户配额信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showServerLimits($request)
    {
        return $this->showServerLimitsWithHttpInfo($request);
    }

    public function showServerLimitsWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/limits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowServerLimitsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowServerLimitsRequest');
    }

    /**
     * 获取VNC远程登录地址
     * 获取弹性云服务器VNC远程登录地址。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showServerRemoteConsole($request)
    {
        return $this->showServerRemoteConsoleWithHttpInfo($request);
    }

    public function showServerRemoteConsoleWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/remote_console';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowServerRemoteConsoleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowServerRemoteConsoleRequest');
    }

    /**
     * 查询云服务器标签
     * - 查询指定云服务器的标签信息。  - 标签管理服务TMS使用该接口查询指定云服务器的全部标签数据。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showServerTags($request)
    {
        return $this->showServerTagsWithHttpInfo($request);
    }

    public function showServerTagsWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowServerTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowServerTagsRequest');
    }

    /**
     * 修改云服务器
     * 修改云服务器信息，目前支持修改云服务器名称及描述和hostname。
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateServer($request)
    {
        return $this->updateServerWithHttpInfo($request);
    }

    public function updateServerWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\UpdateServerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\UpdateServerRequest');
    }

    /**
     * 修改云服务器销毁时间
     * 修改按需服务器，设置定时销毁时间。如果设置的销毁时间为空，表示取消销毁时间。  该接口支持企业项目细粒度权限的校验，具体细粒度请参见 ecs:cloudServers:put。
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateServerAutoTerminateTime($request)
    {
        return $this->updateServerAutoTerminateTimeWithHttpInfo($request);
    }

    public function updateServerAutoTerminateTimeWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/actions/update-auto-terminate-time';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\UpdateServerAutoTerminateTimeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\UpdateServerAutoTerminateTimeRequest');
    }

    /**
     * 更新云服务器元数据
     * 更新云服务器元数据。  - 如果元数据中没有待更新字段，则自动添加该字段。  - 如果元数据中已存在待更新字段，则直接更新字段值。  - 如果元数据中的字段不再请求参数中，则保持不变
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateServerMetadata($request)
    {
        return $this->updateServerMetadataWithHttpInfo($request);
    }

    public function updateServerMetadataWithHttpInfo($request)
    {
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/cloudservers/{server_id}/metadata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\UpdateServerMetadataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\UpdateServerMetadataRequest');
    }

    /**
     * 查询任务的执行状态
     * 查询Job的执行状态。  对于创建云服务器、删除云服务器、云服务器批量操作和网卡操作等异步API，命令下发后，会返回job_id，通过job_id可以查询任务的执行状态。
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
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowJobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Ecs\V2\Model\ShowJobRequest');
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
        $collectionFormats = null,
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
        $collectionFormats,
        $requestType);
    }
}