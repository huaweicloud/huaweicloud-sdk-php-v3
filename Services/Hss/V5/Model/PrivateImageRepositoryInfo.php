<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivateImageRepositoryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivateImageRepositoryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * namespace  命名空间
    * imageName  镜像名称
    * imageId  镜像id
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
    * latestVersion  是否是最新版本
    * scanStatus  扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
    * imageSize  镜像大小
    * latestUpdateTime  镜像版本最后更新时间
    * latestScanTime  最近扫描时间
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * domainName  拥有者（共享镜像参数）
    * sharedStatus  共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    * scannable  是否可扫描
    * associationImages  多架构关联镜像信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'namespace' => 'string',
            'imageName' => 'string',
            'imageId' => 'string',
            'imageDigest' => 'string',
            'imageVersion' => 'string',
            'imageType' => 'string',
            'latestVersion' => 'bool',
            'scanStatus' => 'string',
            'imageSize' => 'int',
            'latestUpdateTime' => 'int',
            'latestScanTime' => 'int',
            'vulNum' => 'int',
            'unsafeSettingNum' => 'int',
            'maliciousFileNum' => 'int',
            'domainName' => 'string',
            'sharedStatus' => 'string',
            'scannable' => 'bool',
            'associationImages' => '\HuaweiCloud\SDK\Hss\V5\Model\AssociateImages[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * namespace  命名空间
    * imageName  镜像名称
    * imageId  镜像id
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
    * latestVersion  是否是最新版本
    * scanStatus  扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
    * imageSize  镜像大小
    * latestUpdateTime  镜像版本最后更新时间
    * latestScanTime  最近扫描时间
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * domainName  拥有者（共享镜像参数）
    * sharedStatus  共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    * scannable  是否可扫描
    * associationImages  多架构关联镜像信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'namespace' => null,
        'imageName' => null,
        'imageId' => null,
        'imageDigest' => null,
        'imageVersion' => null,
        'imageType' => null,
        'latestVersion' => null,
        'scanStatus' => null,
        'imageSize' => 'int64',
        'latestUpdateTime' => 'int64',
        'latestScanTime' => 'int64',
        'vulNum' => 'int32',
        'unsafeSettingNum' => 'int32',
        'maliciousFileNum' => 'int32',
        'domainName' => null,
        'sharedStatus' => null,
        'scannable' => 'int64',
        'associationImages' => null
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
    * id  id
    * namespace  命名空间
    * imageName  镜像名称
    * imageId  镜像id
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
    * latestVersion  是否是最新版本
    * scanStatus  扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
    * imageSize  镜像大小
    * latestUpdateTime  镜像版本最后更新时间
    * latestScanTime  最近扫描时间
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * domainName  拥有者（共享镜像参数）
    * sharedStatus  共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    * scannable  是否可扫描
    * associationImages  多架构关联镜像信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'imageId' => 'image_id',
            'imageDigest' => 'image_digest',
            'imageVersion' => 'image_version',
            'imageType' => 'image_type',
            'latestVersion' => 'latest_version',
            'scanStatus' => 'scan_status',
            'imageSize' => 'image_size',
            'latestUpdateTime' => 'latest_update_time',
            'latestScanTime' => 'latest_scan_time',
            'vulNum' => 'vul_num',
            'unsafeSettingNum' => 'unsafe_setting_num',
            'maliciousFileNum' => 'malicious_file_num',
            'domainName' => 'domain_name',
            'sharedStatus' => 'shared_status',
            'scannable' => 'scannable',
            'associationImages' => 'association_images'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * namespace  命名空间
    * imageName  镜像名称
    * imageId  镜像id
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
    * latestVersion  是否是最新版本
    * scanStatus  扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
    * imageSize  镜像大小
    * latestUpdateTime  镜像版本最后更新时间
    * latestScanTime  最近扫描时间
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * domainName  拥有者（共享镜像参数）
    * sharedStatus  共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    * scannable  是否可扫描
    * associationImages  多架构关联镜像信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'imageId' => 'setImageId',
            'imageDigest' => 'setImageDigest',
            'imageVersion' => 'setImageVersion',
            'imageType' => 'setImageType',
            'latestVersion' => 'setLatestVersion',
            'scanStatus' => 'setScanStatus',
            'imageSize' => 'setImageSize',
            'latestUpdateTime' => 'setLatestUpdateTime',
            'latestScanTime' => 'setLatestScanTime',
            'vulNum' => 'setVulNum',
            'unsafeSettingNum' => 'setUnsafeSettingNum',
            'maliciousFileNum' => 'setMaliciousFileNum',
            'domainName' => 'setDomainName',
            'sharedStatus' => 'setSharedStatus',
            'scannable' => 'setScannable',
            'associationImages' => 'setAssociationImages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * namespace  命名空间
    * imageName  镜像名称
    * imageId  镜像id
    * imageDigest  镜像digest
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
    * latestVersion  是否是最新版本
    * scanStatus  扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
    * imageSize  镜像大小
    * latestUpdateTime  镜像版本最后更新时间
    * latestScanTime  最近扫描时间
    * vulNum  漏洞个数
    * unsafeSettingNum  基线扫描未通过数
    * maliciousFileNum  恶意文件数
    * domainName  拥有者（共享镜像参数）
    * sharedStatus  共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    * scannable  是否可扫描
    * associationImages  多架构关联镜像信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'imageId' => 'getImageId',
            'imageDigest' => 'getImageDigest',
            'imageVersion' => 'getImageVersion',
            'imageType' => 'getImageType',
            'latestVersion' => 'getLatestVersion',
            'scanStatus' => 'getScanStatus',
            'imageSize' => 'getImageSize',
            'latestUpdateTime' => 'getLatestUpdateTime',
            'latestScanTime' => 'getLatestScanTime',
            'vulNum' => 'getVulNum',
            'unsafeSettingNum' => 'getUnsafeSettingNum',
            'maliciousFileNum' => 'getMaliciousFileNum',
            'domainName' => 'getDomainName',
            'sharedStatus' => 'getSharedStatus',
            'scannable' => 'getScannable',
            'associationImages' => 'getAssociationImages'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageDigest'] = isset($data['imageDigest']) ? $data['imageDigest'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['latestUpdateTime'] = isset($data['latestUpdateTime']) ? $data['latestUpdateTime'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['vulNum'] = isset($data['vulNum']) ? $data['vulNum'] : null;
        $this->container['unsafeSettingNum'] = isset($data['unsafeSettingNum']) ? $data['unsafeSettingNum'] : null;
        $this->container['maliciousFileNum'] = isset($data['maliciousFileNum']) ? $data['maliciousFileNum'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['sharedStatus'] = isset($data['sharedStatus']) ? $data['sharedStatus'] : null;
        $this->container['scannable'] = isset($data['scannable']) ? $data['scannable'] : null;
        $this->container['associationImages'] = isset($data['associationImages']) ? $data['associationImages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 128.";
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
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestUpdateTime']) && ($this->container['latestUpdateTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'latestUpdateTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['latestUpdateTime']) && ($this->container['latestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unsafeSettingNum']) && ($this->container['unsafeSettingNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unsafeSettingNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unsafeSettingNum']) && ($this->container['unsafeSettingNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unsafeSettingNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maliciousFileNum']) && ($this->container['maliciousFileNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'maliciousFileNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['maliciousFileNum']) && ($this->container['maliciousFileNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'maliciousFileNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 128)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sharedStatus']) && (mb_strlen($this->container['sharedStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'sharedStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sharedStatus']) && (mb_strlen($this->container['sharedStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'sharedStatus', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
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
    * Gets imageId
    *  镜像id
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
    * @param string|null $imageId 镜像id
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
    * Gets imageType
    *  镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType 镜像类型，包含如下2种。   - private_image ：私有镜像。   - shared_image ：共享镜像。
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets latestVersion
    *  是否是最新版本
    *
    * @return bool|null
    */
    public function getLatestVersion()
    {
        return $this->container['latestVersion'];
    }

    /**
    * Sets latestVersion
    *
    * @param bool|null $latestVersion 是否是最新版本
    *
    * @return $this
    */
    public function setLatestVersion($latestVersion)
    {
        $this->container['latestVersion'] = $latestVersion;
        return $this;
    }

    /**
    * Gets scanStatus
    *  扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
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
    * @param string|null $scanStatus 扫描状态，包含如下2种。   - unscan ：未扫描。   - success ：扫描完成。   - scanning ：正在扫描。   - failed ：扫描失败。   - download_failed ：下载失败。   - image_oversized ：镜像超大。   - waiting_for_scan ：等待扫描。
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
    *  镜像大小
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
    * @param int|null $imageSize 镜像大小
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
    *  镜像版本最后更新时间
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
    * @param int|null $latestUpdateTime 镜像版本最后更新时间
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
    *  最近扫描时间
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
    * @param int|null $latestScanTime 最近扫描时间
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
    * Gets domainName
    *  拥有者（共享镜像参数）
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 拥有者（共享镜像参数）
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets sharedStatus
    *  共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    *
    * @return string|null
    */
    public function getSharedStatus()
    {
        return $this->container['sharedStatus'];
    }

    /**
    * Sets sharedStatus
    *
    * @param string|null $sharedStatus 共享镜像状态，包含如下2种。   - expired ：已过期。   - effective ：有效。
    *
    * @return $this
    */
    public function setSharedStatus($sharedStatus)
    {
        $this->container['sharedStatus'] = $sharedStatus;
        return $this;
    }

    /**
    * Gets scannable
    *  是否可扫描
    *
    * @return bool|null
    */
    public function getScannable()
    {
        return $this->container['scannable'];
    }

    /**
    * Sets scannable
    *
    * @param bool|null $scannable 是否可扫描
    *
    * @return $this
    */
    public function setScannable($scannable)
    {
        $this->container['scannable'] = $scannable;
        return $this;
    }

    /**
    * Gets associationImages
    *  多架构关联镜像信息
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AssociateImages[]|null
    */
    public function getAssociationImages()
    {
        return $this->container['associationImages'];
    }

    /**
    * Sets associationImages
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AssociateImages[]|null $associationImages 多架构关联镜像信息
    *
    * @return $this
    */
    public function setAssociationImages($associationImages)
    {
        $this->container['associationImages'] = $associationImages;
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

