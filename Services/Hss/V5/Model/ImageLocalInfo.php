<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageLocalInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageLocalInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageName  镜像名称
    * imageId  镜像ID
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * localImageType  本地镜像类型
    * scanStatus  扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
    * imageSize  镜像大小，单位字节
    * latestUpdateTime  镜像版本最后更新时间，时间单位毫秒（ms）
    * latestScanTime  最近扫描时间，时间单位毫秒（ms）
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * hostNum  关联主机数
    * containerNum  关联容器数
    * componentNum  关联组件数
    * scanFailedDesc  扫描失败原因，包含如下10种。   - \"unknown_error\":未知错误   - \"failed_to_match_agent\":对应主机未开启容器版防护或agent离线   - \"create_container_failed\":创建容器失败        - \"get_container_info_failed\":获取容器信息失败   - \"docker_offline\":docker引擎不在线   - \"get_docker_root_failed\":获取容器根文件系统失败   - \"image_not_exist_or_docker_api_fault\":镜像不存在或docker接口错误   - \"huge_image\":超大镜像   - \"docker_root_in_nfs\":容器根目录位于网络挂载   - \"response_timed_out\":响应超时
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageName' => 'string',
            'imageId' => 'string',
            'imageDigest' => 'string',
            'imageVersion' => 'string',
            'localImageType' => 'string',
            'scanStatus' => 'string',
            'imageSize' => 'int',
            'latestUpdateTime' => 'int',
            'latestScanTime' => 'int',
            'vulNum' => 'int',
            'unsafeSettingNum' => 'int',
            'maliciousFileNum' => 'int',
            'hostNum' => 'int',
            'containerNum' => 'int',
            'componentNum' => 'int',
            'scanFailedDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageName  镜像名称
    * imageId  镜像ID
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * localImageType  本地镜像类型
    * scanStatus  扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
    * imageSize  镜像大小，单位字节
    * latestUpdateTime  镜像版本最后更新时间，时间单位毫秒（ms）
    * latestScanTime  最近扫描时间，时间单位毫秒（ms）
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * hostNum  关联主机数
    * containerNum  关联容器数
    * componentNum  关联组件数
    * scanFailedDesc  扫描失败原因，包含如下10种。   - \"unknown_error\":未知错误   - \"failed_to_match_agent\":对应主机未开启容器版防护或agent离线   - \"create_container_failed\":创建容器失败        - \"get_container_info_failed\":获取容器信息失败   - \"docker_offline\":docker引擎不在线   - \"get_docker_root_failed\":获取容器根文件系统失败   - \"image_not_exist_or_docker_api_fault\":镜像不存在或docker接口错误   - \"huge_image\":超大镜像   - \"docker_root_in_nfs\":容器根目录位于网络挂载   - \"response_timed_out\":响应超时
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageName' => null,
        'imageId' => null,
        'imageDigest' => null,
        'imageVersion' => null,
        'localImageType' => null,
        'scanStatus' => null,
        'imageSize' => 'int64',
        'latestUpdateTime' => 'int64',
        'latestScanTime' => 'int64',
        'vulNum' => 'int64',
        'unsafeSettingNum' => 'int64',
        'maliciousFileNum' => 'int64',
        'hostNum' => 'int64',
        'containerNum' => 'int64',
        'componentNum' => 'int64',
        'scanFailedDesc' => null
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
    * imageName  镜像名称
    * imageId  镜像ID
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * localImageType  本地镜像类型
    * scanStatus  扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
    * imageSize  镜像大小，单位字节
    * latestUpdateTime  镜像版本最后更新时间，时间单位毫秒（ms）
    * latestScanTime  最近扫描时间，时间单位毫秒（ms）
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * hostNum  关联主机数
    * containerNum  关联容器数
    * componentNum  关联组件数
    * scanFailedDesc  扫描失败原因，包含如下10种。   - \"unknown_error\":未知错误   - \"failed_to_match_agent\":对应主机未开启容器版防护或agent离线   - \"create_container_failed\":创建容器失败        - \"get_container_info_failed\":获取容器信息失败   - \"docker_offline\":docker引擎不在线   - \"get_docker_root_failed\":获取容器根文件系统失败   - \"image_not_exist_or_docker_api_fault\":镜像不存在或docker接口错误   - \"huge_image\":超大镜像   - \"docker_root_in_nfs\":容器根目录位于网络挂载   - \"response_timed_out\":响应超时
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageName' => 'image_name',
            'imageId' => 'image_id',
            'imageDigest' => 'image_digest',
            'imageVersion' => 'image_version',
            'localImageType' => 'local_image_type',
            'scanStatus' => 'scan_status',
            'imageSize' => 'image_size',
            'latestUpdateTime' => 'latest_update_time',
            'latestScanTime' => 'latest_scan_time',
            'vulNum' => 'vul_num',
            'unsafeSettingNum' => 'unsafe_setting_num',
            'maliciousFileNum' => 'malicious_file_num',
            'hostNum' => 'host_num',
            'containerNum' => 'container_num',
            'componentNum' => 'component_num',
            'scanFailedDesc' => 'scan_failed_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageName  镜像名称
    * imageId  镜像ID
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * localImageType  本地镜像类型
    * scanStatus  扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
    * imageSize  镜像大小，单位字节
    * latestUpdateTime  镜像版本最后更新时间，时间单位毫秒（ms）
    * latestScanTime  最近扫描时间，时间单位毫秒（ms）
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * hostNum  关联主机数
    * containerNum  关联容器数
    * componentNum  关联组件数
    * scanFailedDesc  扫描失败原因，包含如下10种。   - \"unknown_error\":未知错误   - \"failed_to_match_agent\":对应主机未开启容器版防护或agent离线   - \"create_container_failed\":创建容器失败        - \"get_container_info_failed\":获取容器信息失败   - \"docker_offline\":docker引擎不在线   - \"get_docker_root_failed\":获取容器根文件系统失败   - \"image_not_exist_or_docker_api_fault\":镜像不存在或docker接口错误   - \"huge_image\":超大镜像   - \"docker_root_in_nfs\":容器根目录位于网络挂载   - \"response_timed_out\":响应超时
    *
    * @var string[]
    */
    protected static $setters = [
            'imageName' => 'setImageName',
            'imageId' => 'setImageId',
            'imageDigest' => 'setImageDigest',
            'imageVersion' => 'setImageVersion',
            'localImageType' => 'setLocalImageType',
            'scanStatus' => 'setScanStatus',
            'imageSize' => 'setImageSize',
            'latestUpdateTime' => 'setLatestUpdateTime',
            'latestScanTime' => 'setLatestScanTime',
            'vulNum' => 'setVulNum',
            'unsafeSettingNum' => 'setUnsafeSettingNum',
            'maliciousFileNum' => 'setMaliciousFileNum',
            'hostNum' => 'setHostNum',
            'containerNum' => 'setContainerNum',
            'componentNum' => 'setComponentNum',
            'scanFailedDesc' => 'setScanFailedDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageName  镜像名称
    * imageId  镜像ID
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * localImageType  本地镜像类型
    * scanStatus  扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
    * imageSize  镜像大小，单位字节
    * latestUpdateTime  镜像版本最后更新时间，时间单位毫秒（ms）
    * latestScanTime  最近扫描时间，时间单位毫秒（ms）
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * hostNum  关联主机数
    * containerNum  关联容器数
    * componentNum  关联组件数
    * scanFailedDesc  扫描失败原因，包含如下10种。   - \"unknown_error\":未知错误   - \"failed_to_match_agent\":对应主机未开启容器版防护或agent离线   - \"create_container_failed\":创建容器失败        - \"get_container_info_failed\":获取容器信息失败   - \"docker_offline\":docker引擎不在线   - \"get_docker_root_failed\":获取容器根文件系统失败   - \"image_not_exist_or_docker_api_fault\":镜像不存在或docker接口错误   - \"huge_image\":超大镜像   - \"docker_root_in_nfs\":容器根目录位于网络挂载   - \"response_timed_out\":响应超时
    *
    * @var string[]
    */
    protected static $getters = [
            'imageName' => 'getImageName',
            'imageId' => 'getImageId',
            'imageDigest' => 'getImageDigest',
            'imageVersion' => 'getImageVersion',
            'localImageType' => 'getLocalImageType',
            'scanStatus' => 'getScanStatus',
            'imageSize' => 'getImageSize',
            'latestUpdateTime' => 'getLatestUpdateTime',
            'latestScanTime' => 'getLatestScanTime',
            'vulNum' => 'getVulNum',
            'unsafeSettingNum' => 'getUnsafeSettingNum',
            'maliciousFileNum' => 'getMaliciousFileNum',
            'hostNum' => 'getHostNum',
            'containerNum' => 'getContainerNum',
            'componentNum' => 'getComponentNum',
            'scanFailedDesc' => 'getScanFailedDesc'
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
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageDigest'] = isset($data['imageDigest']) ? $data['imageDigest'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['localImageType'] = isset($data['localImageType']) ? $data['localImageType'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['latestUpdateTime'] = isset($data['latestUpdateTime']) ? $data['latestUpdateTime'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['vulNum'] = isset($data['vulNum']) ? $data['vulNum'] : null;
        $this->container['unsafeSettingNum'] = isset($data['unsafeSettingNum']) ? $data['unsafeSettingNum'] : null;
        $this->container['maliciousFileNum'] = isset($data['maliciousFileNum']) ? $data['maliciousFileNum'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['containerNum'] = isset($data['containerNum']) ? $data['containerNum'] : null;
        $this->container['componentNum'] = isset($data['componentNum']) ? $data['componentNum'] : null;
        $this->container['scanFailedDesc'] = isset($data['scanFailedDesc']) ? $data['scanFailedDesc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['localImageType']) && (mb_strlen($this->container['localImageType']) > 256)) {
                $invalidProperties[] = "invalid value for 'localImageType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['localImageType']) && (mb_strlen($this->container['localImageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'localImageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 256)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestUpdateTime']) && ($this->container['latestUpdateTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'latestUpdateTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['latestUpdateTime']) && ($this->container['latestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unsafeSettingNum']) && ($this->container['unsafeSettingNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'unsafeSettingNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['unsafeSettingNum']) && ($this->container['unsafeSettingNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unsafeSettingNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maliciousFileNum']) && ($this->container['maliciousFileNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'maliciousFileNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['maliciousFileNum']) && ($this->container['maliciousFileNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'maliciousFileNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerNum']) && ($this->container['containerNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'containerNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['containerNum']) && ($this->container['containerNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'containerNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['componentNum']) && ($this->container['componentNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'componentNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['componentNum']) && ($this->container['componentNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'componentNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanFailedDesc']) && (mb_strlen($this->container['scanFailedDesc']) > 64)) {
                $invalidProperties[] = "invalid value for 'scanFailedDesc', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scanFailedDesc']) && (mb_strlen($this->container['scanFailedDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanFailedDesc', the character length must be bigger than or equal to 0.";
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
    * Gets imageId
    *  镜像ID
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 镜像ID
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageDigest
    *  镜像digest
    *
    * @return string|null
    */
    public function getImageDigest()
    {
        return $this->container['imageDigest'];
    }

    /**
    * Sets imageDigest
    *
    * @param string|null $imageDigest 镜像digest
    *
    * @return $this
    */
    public function setImageDigest($imageDigest)
    {
        $this->container['imageDigest'] = $imageDigest;
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
    * Gets localImageType
    *  本地镜像类型
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
    * @param string|null $localImageType 本地镜像类型
    *
    * @return $this
    */
    public function setLocalImageType($localImageType)
    {
        $this->container['localImageType'] = $localImageType;
        return $this;
    }

    /**
    * Gets scanStatus
    *  扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
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
    * @param string|null $scanStatus 扫描状态，包含如下：   - unscan：未扫描   - success：扫描完成   - scanning：正在扫描   - failed：扫描失败   - waiting：等待扫描
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
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
    * Gets latestUpdateTime
    *  镜像版本最后更新时间，时间单位毫秒（ms）
    *
    * @return int|null
    */
    public function getLatestUpdateTime()
    {
        return $this->container['latestUpdateTime'];
    }

    /**
    * Sets latestUpdateTime
    *
    * @param int|null $latestUpdateTime 镜像版本最后更新时间，时间单位毫秒（ms）
    *
    * @return $this
    */
    public function setLatestUpdateTime($latestUpdateTime)
    {
        $this->container['latestUpdateTime'] = $latestUpdateTime;
        return $this;
    }

    /**
    * Gets latestScanTime
    *  最近扫描时间，时间单位毫秒（ms）
    *
    * @return int|null
    */
    public function getLatestScanTime()
    {
        return $this->container['latestScanTime'];
    }

    /**
    * Sets latestScanTime
    *
    * @param int|null $latestScanTime 最近扫描时间，时间单位毫秒（ms）
    *
    * @return $this
    */
    public function setLatestScanTime($latestScanTime)
    {
        $this->container['latestScanTime'] = $latestScanTime;
        return $this;
    }

    /**
    * Gets vulNum
    *  漏洞个数
    *
    * @return int|null
    */
    public function getVulNum()
    {
        return $this->container['vulNum'];
    }

    /**
    * Sets vulNum
    *
    * @param int|null $vulNum 漏洞个数
    *
    * @return $this
    */
    public function setVulNum($vulNum)
    {
        $this->container['vulNum'] = $vulNum;
        return $this;
    }

    /**
    * Gets unsafeSettingNum
    *  基线扫描未通过数
    *
    * @return int|null
    */
    public function getUnsafeSettingNum()
    {
        return $this->container['unsafeSettingNum'];
    }

    /**
    * Sets unsafeSettingNum
    *
    * @param int|null $unsafeSettingNum 基线扫描未通过数
    *
    * @return $this
    */
    public function setUnsafeSettingNum($unsafeSettingNum)
    {
        $this->container['unsafeSettingNum'] = $unsafeSettingNum;
        return $this;
    }

    /**
    * Gets maliciousFileNum
    *  恶意文件数
    *
    * @return int|null
    */
    public function getMaliciousFileNum()
    {
        return $this->container['maliciousFileNum'];
    }

    /**
    * Sets maliciousFileNum
    *
    * @param int|null $maliciousFileNum 恶意文件数
    *
    * @return $this
    */
    public function setMaliciousFileNum($maliciousFileNum)
    {
        $this->container['maliciousFileNum'] = $maliciousFileNum;
        return $this;
    }

    /**
    * Gets hostNum
    *  关联主机数
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum 关联主机数
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets containerNum
    *  关联容器数
    *
    * @return int|null
    */
    public function getContainerNum()
    {
        return $this->container['containerNum'];
    }

    /**
    * Sets containerNum
    *
    * @param int|null $containerNum 关联容器数
    *
    * @return $this
    */
    public function setContainerNum($containerNum)
    {
        $this->container['containerNum'] = $containerNum;
        return $this;
    }

    /**
    * Gets componentNum
    *  关联组件数
    *
    * @return int|null
    */
    public function getComponentNum()
    {
        return $this->container['componentNum'];
    }

    /**
    * Sets componentNum
    *
    * @param int|null $componentNum 关联组件数
    *
    * @return $this
    */
    public function setComponentNum($componentNum)
    {
        $this->container['componentNum'] = $componentNum;
        return $this;
    }

    /**
    * Gets scanFailedDesc
    *  扫描失败原因，包含如下10种。   - \"unknown_error\":未知错误   - \"failed_to_match_agent\":对应主机未开启容器版防护或agent离线   - \"create_container_failed\":创建容器失败        - \"get_container_info_failed\":获取容器信息失败   - \"docker_offline\":docker引擎不在线   - \"get_docker_root_failed\":获取容器根文件系统失败   - \"image_not_exist_or_docker_api_fault\":镜像不存在或docker接口错误   - \"huge_image\":超大镜像   - \"docker_root_in_nfs\":容器根目录位于网络挂载   - \"response_timed_out\":响应超时
    *
    * @return string|null
    */
    public function getScanFailedDesc()
    {
        return $this->container['scanFailedDesc'];
    }

    /**
    * Sets scanFailedDesc
    *
    * @param string|null $scanFailedDesc 扫描失败原因，包含如下10种。   - \"unknown_error\":未知错误   - \"failed_to_match_agent\":对应主机未开启容器版防护或agent离线   - \"create_container_failed\":创建容器失败        - \"get_container_info_failed\":获取容器信息失败   - \"docker_offline\":docker引擎不在线   - \"get_docker_root_failed\":获取容器根文件系统失败   - \"image_not_exist_or_docker_api_fault\":镜像不存在或docker接口错误   - \"huge_image\":超大镜像   - \"docker_root_in_nfs\":容器根目录位于网络挂载   - \"response_timed_out\":响应超时
    *
    * @return $this
    */
    public function setScanFailedDesc($scanFailedDesc)
    {
        $this->container['scanFailedDesc'] = $scanFailedDesc;
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

