<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListImageLocalRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListImageLocalRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * imageName  镜像名称
    * imageVersion  镜像版本
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示数量
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
    * localImageType  镜像类型，包含如下:  - other_image : 非SWR镜像  - swr_image : SWR镜像
    * imageSize  镜像大小，单位字节
    * startLatestUpdateTime  最近更新时间搜索开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  最近更新时间搜索结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间搜索开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间搜索结束日期，时间单位 毫秒（ms）
    * hasVul  是否存在软件漏洞
    * hostName  本地镜像所关联服务器的名称
    * hostId  本地镜像所关联服务器的ID
    * hostIp  本地镜像所关联服务器的IP（公网或私网）
    * containerId  本地镜像所关联容器的ID
    * containerName  本地镜像所关联容器的名称
    * podId  本地镜像所关联Pod的ID
    * podName  本地镜像所关联Pod的名称
    * appName  本地镜像所关联软件的名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'scanStatus' => 'string',
            'localImageType' => 'string',
            'imageSize' => 'int',
            'startLatestUpdateTime' => 'int',
            'endLatestUpdateTime' => 'int',
            'startLatestScanTime' => 'int',
            'endLatestScanTime' => 'int',
            'hasVul' => 'bool',
            'hostName' => 'string',
            'hostId' => 'string',
            'hostIp' => 'string',
            'containerId' => 'string',
            'containerName' => 'string',
            'podId' => 'string',
            'podName' => 'string',
            'appName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * imageName  镜像名称
    * imageVersion  镜像版本
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示数量
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
    * localImageType  镜像类型，包含如下:  - other_image : 非SWR镜像  - swr_image : SWR镜像
    * imageSize  镜像大小，单位字节
    * startLatestUpdateTime  最近更新时间搜索开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  最近更新时间搜索结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间搜索开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间搜索结束日期，时间单位 毫秒（ms）
    * hasVul  是否存在软件漏洞
    * hostName  本地镜像所关联服务器的名称
    * hostId  本地镜像所关联服务器的ID
    * hostIp  本地镜像所关联服务器的IP（公网或私网）
    * containerId  本地镜像所关联容器的ID
    * containerName  本地镜像所关联容器的名称
    * podId  本地镜像所关联Pod的ID
    * podName  本地镜像所关联Pod的名称
    * appName  本地镜像所关联软件的名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'imageName' => null,
        'imageVersion' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'scanStatus' => null,
        'localImageType' => null,
        'imageSize' => 'int64',
        'startLatestUpdateTime' => 'int64',
        'endLatestUpdateTime' => 'int64',
        'startLatestScanTime' => 'int64',
        'endLatestScanTime' => 'int64',
        'hasVul' => null,
        'hostName' => null,
        'hostId' => null,
        'hostIp' => null,
        'containerId' => null,
        'containerName' => null,
        'podId' => null,
        'podName' => null,
        'appName' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * imageName  镜像名称
    * imageVersion  镜像版本
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示数量
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
    * localImageType  镜像类型，包含如下:  - other_image : 非SWR镜像  - swr_image : SWR镜像
    * imageSize  镜像大小，单位字节
    * startLatestUpdateTime  最近更新时间搜索开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  最近更新时间搜索结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间搜索开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间搜索结束日期，时间单位 毫秒（ms）
    * hasVul  是否存在软件漏洞
    * hostName  本地镜像所关联服务器的名称
    * hostId  本地镜像所关联服务器的ID
    * hostIp  本地镜像所关联服务器的IP（公网或私网）
    * containerId  本地镜像所关联容器的ID
    * containerName  本地镜像所关联容器的名称
    * podId  本地镜像所关联Pod的ID
    * podName  本地镜像所关联Pod的名称
    * appName  本地镜像所关联软件的名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'offset' => 'offset',
            'limit' => 'limit',
            'scanStatus' => 'scan_status',
            'localImageType' => 'local_image_type',
            'imageSize' => 'image_size',
            'startLatestUpdateTime' => 'start_latest_update_time',
            'endLatestUpdateTime' => 'end_latest_update_time',
            'startLatestScanTime' => 'start_latest_scan_time',
            'endLatestScanTime' => 'end_latest_scan_time',
            'hasVul' => 'has_vul',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'hostIp' => 'host_ip',
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'podId' => 'pod_id',
            'podName' => 'pod_name',
            'appName' => 'app_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * imageName  镜像名称
    * imageVersion  镜像版本
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示数量
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
    * localImageType  镜像类型，包含如下:  - other_image : 非SWR镜像  - swr_image : SWR镜像
    * imageSize  镜像大小，单位字节
    * startLatestUpdateTime  最近更新时间搜索开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  最近更新时间搜索结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间搜索开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间搜索结束日期，时间单位 毫秒（ms）
    * hasVul  是否存在软件漏洞
    * hostName  本地镜像所关联服务器的名称
    * hostId  本地镜像所关联服务器的ID
    * hostIp  本地镜像所关联服务器的IP（公网或私网）
    * containerId  本地镜像所关联容器的ID
    * containerName  本地镜像所关联容器的名称
    * podId  本地镜像所关联Pod的ID
    * podName  本地镜像所关联Pod的名称
    * appName  本地镜像所关联软件的名称
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'scanStatus' => 'setScanStatus',
            'localImageType' => 'setLocalImageType',
            'imageSize' => 'setImageSize',
            'startLatestUpdateTime' => 'setStartLatestUpdateTime',
            'endLatestUpdateTime' => 'setEndLatestUpdateTime',
            'startLatestScanTime' => 'setStartLatestScanTime',
            'endLatestScanTime' => 'setEndLatestScanTime',
            'hasVul' => 'setHasVul',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'hostIp' => 'setHostIp',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'podId' => 'setPodId',
            'podName' => 'setPodName',
            'appName' => 'setAppName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * imageName  镜像名称
    * imageVersion  镜像版本
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示数量
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
    * localImageType  镜像类型，包含如下:  - other_image : 非SWR镜像  - swr_image : SWR镜像
    * imageSize  镜像大小，单位字节
    * startLatestUpdateTime  最近更新时间搜索开始日期，时间单位 毫秒（ms）
    * endLatestUpdateTime  最近更新时间搜索结束日期，时间单位 毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间搜索开始日期，时间单位 毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间搜索结束日期，时间单位 毫秒（ms）
    * hasVul  是否存在软件漏洞
    * hostName  本地镜像所关联服务器的名称
    * hostId  本地镜像所关联服务器的ID
    * hostIp  本地镜像所关联服务器的IP（公网或私网）
    * containerId  本地镜像所关联容器的ID
    * containerName  本地镜像所关联容器的名称
    * podId  本地镜像所关联Pod的ID
    * podName  本地镜像所关联Pod的名称
    * appName  本地镜像所关联软件的名称
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'scanStatus' => 'getScanStatus',
            'localImageType' => 'getLocalImageType',
            'imageSize' => 'getImageSize',
            'startLatestUpdateTime' => 'getStartLatestUpdateTime',
            'endLatestUpdateTime' => 'getEndLatestUpdateTime',
            'startLatestScanTime' => 'getStartLatestScanTime',
            'endLatestScanTime' => 'getEndLatestScanTime',
            'hasVul' => 'getHasVul',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'hostIp' => 'getHostIp',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'podId' => 'getPodId',
            'podName' => 'getPodName',
            'appName' => 'getAppName'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['localImageType'] = isset($data['localImageType']) ? $data['localImageType'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['startLatestUpdateTime'] = isset($data['startLatestUpdateTime']) ? $data['startLatestUpdateTime'] : null;
        $this->container['endLatestUpdateTime'] = isset($data['endLatestUpdateTime']) ? $data['endLatestUpdateTime'] : null;
        $this->container['startLatestScanTime'] = isset($data['startLatestScanTime']) ? $data['startLatestScanTime'] : null;
        $this->container['endLatestScanTime'] = isset($data['endLatestScanTime']) ? $data['endLatestScanTime'] : null;
        $this->container['hasVul'] = isset($data['hasVul']) ? $data['hasVul'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['podId'] = isset($data['podId']) ? $data['podId'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageVersion']) && !preg_match("/^.*$/", $this->container['imageVersion'])) {
                $invalidProperties[] = "invalid value for 'imageVersion', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['localImageType']) && (mb_strlen($this->container['localImageType']) > 64)) {
                $invalidProperties[] = "invalid value for 'localImageType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['localImageType']) && (mb_strlen($this->container['localImageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'localImageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestScanTime']) && ($this->container['endLatestScanTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'endLatestScanTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['endLatestScanTime']) && ($this->container['endLatestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podId']) && (mb_strlen($this->container['podId']) > 128)) {
                $invalidProperties[] = "invalid value for 'podId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['podId']) && (mb_strlen($this->container['podId']) < 0)) {
                $invalidProperties[] = "invalid value for 'podId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) > 128)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) < 0)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 0)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 0.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，查询所有企业项目时填写：all_granted_eps
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID，查询所有企业项目时填写：all_granted_eps
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets imageName
    *  镜像名称
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 镜像名称
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageVersion
    *  镜像版本
    *
    * @return string|null
    */
    public function getImageVersion()
    {
        return $this->container['imageVersion'];
    }

    /**
    * Sets imageVersion
    *
    * @param string|null $imageVersion 镜像版本
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量：指定返回记录的开始位置
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets scanStatus
    *  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
    *
    * @return string|null
    */
    public function getScanStatus()
    {
        return $this->container['scanStatus'];
    }

    /**
    * Sets scanStatus
    *
    * @param string|null $scanStatus 扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - waiting_for_scan : 等待扫描
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets localImageType
    *  镜像类型，包含如下:  - other_image : 非SWR镜像  - swr_image : SWR镜像
    *
    * @return string|null
    */
    public function getLocalImageType()
    {
        return $this->container['localImageType'];
    }

    /**
    * Sets localImageType
    *
    * @param string|null $localImageType 镜像类型，包含如下:  - other_image : 非SWR镜像  - swr_image : SWR镜像
    *
    * @return $this
    */
    public function setLocalImageType($localImageType)
    {
        $this->container['localImageType'] = $localImageType;
        return $this;
    }

    /**
    * Gets imageSize
    *  镜像大小，单位字节
    *
    * @return int|null
    */
    public function getImageSize()
    {
        return $this->container['imageSize'];
    }

    /**
    * Sets imageSize
    *
    * @param int|null $imageSize 镜像大小，单位字节
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets startLatestUpdateTime
    *  最近更新时间搜索开始日期，时间单位 毫秒（ms）
    *
    * @return int|null
    */
    public function getStartLatestUpdateTime()
    {
        return $this->container['startLatestUpdateTime'];
    }

    /**
    * Sets startLatestUpdateTime
    *
    * @param int|null $startLatestUpdateTime 最近更新时间搜索开始日期，时间单位 毫秒（ms）
    *
    * @return $this
    */
    public function setStartLatestUpdateTime($startLatestUpdateTime)
    {
        $this->container['startLatestUpdateTime'] = $startLatestUpdateTime;
        return $this;
    }

    /**
    * Gets endLatestUpdateTime
    *  最近更新时间搜索结束日期，时间单位 毫秒（ms）
    *
    * @return int|null
    */
    public function getEndLatestUpdateTime()
    {
        return $this->container['endLatestUpdateTime'];
    }

    /**
    * Sets endLatestUpdateTime
    *
    * @param int|null $endLatestUpdateTime 最近更新时间搜索结束日期，时间单位 毫秒（ms）
    *
    * @return $this
    */
    public function setEndLatestUpdateTime($endLatestUpdateTime)
    {
        $this->container['endLatestUpdateTime'] = $endLatestUpdateTime;
        return $this;
    }

    /**
    * Gets startLatestScanTime
    *  最近一次扫描完成时间搜索开始日期，时间单位 毫秒（ms）
    *
    * @return int|null
    */
    public function getStartLatestScanTime()
    {
        return $this->container['startLatestScanTime'];
    }

    /**
    * Sets startLatestScanTime
    *
    * @param int|null $startLatestScanTime 最近一次扫描完成时间搜索开始日期，时间单位 毫秒（ms）
    *
    * @return $this
    */
    public function setStartLatestScanTime($startLatestScanTime)
    {
        $this->container['startLatestScanTime'] = $startLatestScanTime;
        return $this;
    }

    /**
    * Gets endLatestScanTime
    *  最近一次扫描完成时间搜索结束日期，时间单位 毫秒（ms）
    *
    * @return int|null
    */
    public function getEndLatestScanTime()
    {
        return $this->container['endLatestScanTime'];
    }

    /**
    * Sets endLatestScanTime
    *
    * @param int|null $endLatestScanTime 最近一次扫描完成时间搜索结束日期，时间单位 毫秒（ms）
    *
    * @return $this
    */
    public function setEndLatestScanTime($endLatestScanTime)
    {
        $this->container['endLatestScanTime'] = $endLatestScanTime;
        return $this;
    }

    /**
    * Gets hasVul
    *  是否存在软件漏洞
    *
    * @return bool|null
    */
    public function getHasVul()
    {
        return $this->container['hasVul'];
    }

    /**
    * Sets hasVul
    *
    * @param bool|null $hasVul 是否存在软件漏洞
    *
    * @return $this
    */
    public function setHasVul($hasVul)
    {
        $this->container['hasVul'] = $hasVul;
        return $this;
    }

    /**
    * Gets hostName
    *  本地镜像所关联服务器的名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 本地镜像所关联服务器的名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  本地镜像所关联服务器的ID
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 本地镜像所关联服务器的ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostIp
    *  本地镜像所关联服务器的IP（公网或私网）
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp 本地镜像所关联服务器的IP（公网或私网）
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets containerId
    *  本地镜像所关联容器的ID
    *
    * @return string|null
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string|null $containerId 本地镜像所关联容器的ID
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets containerName
    *  本地镜像所关联容器的名称
    *
    * @return string|null
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string|null $containerName 本地镜像所关联容器的名称
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets podId
    *  本地镜像所关联Pod的ID
    *
    * @return string|null
    */
    public function getPodId()
    {
        return $this->container['podId'];
    }

    /**
    * Sets podId
    *
    * @param string|null $podId 本地镜像所关联Pod的ID
    *
    * @return $this
    */
    public function setPodId($podId)
    {
        $this->container['podId'] = $podId;
        return $this;
    }

    /**
    * Gets podName
    *  本地镜像所关联Pod的名称
    *
    * @return string|null
    */
    public function getPodName()
    {
        return $this->container['podName'];
    }

    /**
    * Sets podName
    *
    * @param string|null $podName 本地镜像所关联Pod的名称
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
        return $this;
    }

    /**
    * Gets appName
    *  本地镜像所关联软件的名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 本地镜像所关联软件的名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

