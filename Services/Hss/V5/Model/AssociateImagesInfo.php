<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateImagesInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateImagesInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 多架构关联镜像的记录唯一标识ID **取值范围**: 最小值0，最大值9223372036854775807
    * imageId  **参数解释**: 多架构关联镜像的唯一标识ID **取值范围**: 字符长度0-64位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64位
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
    * scanStatus  **参数解释**： 扫描状态 **取值范围**： - unscan：未扫描。 - success：扫描完成。 - scanning：正在扫描。 - failed：扫描失败。 - download_failed：下载失败。 - image_oversized：镜像超大。 - waiting_for_scan：等待扫描。
    * vulNum  **参数解释**: 漏洞个数 **取值范围**: 取值0-2147483647
    * unsafeSettingNum  **参数解释**: 基线扫描未通过数 **取值范围**: 取值0-2147483647
    * maliciousFileNum  **参数解释**: 恶意文件数 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'imageId' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageType' => 'string',
            'namespace' => 'string',
            'imageDigest' => 'string',
            'scanStatus' => 'string',
            'vulNum' => 'int',
            'unsafeSettingNum' => 'int',
            'maliciousFileNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 多架构关联镜像的记录唯一标识ID **取值范围**: 最小值0，最大值9223372036854775807
    * imageId  **参数解释**: 多架构关联镜像的唯一标识ID **取值范围**: 字符长度0-64位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64位
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
    * scanStatus  **参数解释**： 扫描状态 **取值范围**： - unscan：未扫描。 - success：扫描完成。 - scanning：正在扫描。 - failed：扫描失败。 - download_failed：下载失败。 - image_oversized：镜像超大。 - waiting_for_scan：等待扫描。
    * vulNum  **参数解释**: 漏洞个数 **取值范围**: 取值0-2147483647
    * unsafeSettingNum  **参数解释**: 基线扫描未通过数 **取值范围**: 取值0-2147483647
    * maliciousFileNum  **参数解释**: 恶意文件数 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'imageId' => null,
        'imageName' => null,
        'imageVersion' => null,
        'imageType' => null,
        'namespace' => null,
        'imageDigest' => null,
        'scanStatus' => null,
        'vulNum' => 'int32',
        'unsafeSettingNum' => 'int32',
        'maliciousFileNum' => 'int32'
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
    * id  **参数解释**: 多架构关联镜像的记录唯一标识ID **取值范围**: 最小值0，最大值9223372036854775807
    * imageId  **参数解释**: 多架构关联镜像的唯一标识ID **取值范围**: 字符长度0-64位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64位
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
    * scanStatus  **参数解释**： 扫描状态 **取值范围**： - unscan：未扫描。 - success：扫描完成。 - scanning：正在扫描。 - failed：扫描失败。 - download_failed：下载失败。 - image_oversized：镜像超大。 - waiting_for_scan：等待扫描。
    * vulNum  **参数解释**: 漏洞个数 **取值范围**: 取值0-2147483647
    * unsafeSettingNum  **参数解释**: 基线扫描未通过数 **取值范围**: 取值0-2147483647
    * maliciousFileNum  **参数解释**: 恶意文件数 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageType' => 'image_type',
            'namespace' => 'namespace',
            'imageDigest' => 'image_digest',
            'scanStatus' => 'scan_status',
            'vulNum' => 'vul_num',
            'unsafeSettingNum' => 'unsafe_setting_num',
            'maliciousFileNum' => 'malicious_file_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 多架构关联镜像的记录唯一标识ID **取值范围**: 最小值0，最大值9223372036854775807
    * imageId  **参数解释**: 多架构关联镜像的唯一标识ID **取值范围**: 字符长度0-64位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64位
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
    * scanStatus  **参数解释**： 扫描状态 **取值范围**： - unscan：未扫描。 - success：扫描完成。 - scanning：正在扫描。 - failed：扫描失败。 - download_failed：下载失败。 - image_oversized：镜像超大。 - waiting_for_scan：等待扫描。
    * vulNum  **参数解释**: 漏洞个数 **取值范围**: 取值0-2147483647
    * unsafeSettingNum  **参数解释**: 基线扫描未通过数 **取值范围**: 取值0-2147483647
    * maliciousFileNum  **参数解释**: 恶意文件数 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageType' => 'setImageType',
            'namespace' => 'setNamespace',
            'imageDigest' => 'setImageDigest',
            'scanStatus' => 'setScanStatus',
            'vulNum' => 'setVulNum',
            'unsafeSettingNum' => 'setUnsafeSettingNum',
            'maliciousFileNum' => 'setMaliciousFileNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 多架构关联镜像的记录唯一标识ID **取值范围**: 最小值0，最大值9223372036854775807
    * imageId  **参数解释**: 多架构关联镜像的唯一标识ID **取值范围**: 字符长度0-64位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * imageType  **参数解释**: 镜像类型 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64位
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
    * scanStatus  **参数解释**： 扫描状态 **取值范围**： - unscan：未扫描。 - success：扫描完成。 - scanning：正在扫描。 - failed：扫描失败。 - download_failed：下载失败。 - image_oversized：镜像超大。 - waiting_for_scan：等待扫描。
    * vulNum  **参数解释**: 漏洞个数 **取值范围**: 取值0-2147483647
    * unsafeSettingNum  **参数解释**: 基线扫描未通过数 **取值范围**: 取值0-2147483647
    * maliciousFileNum  **参数解释**: 恶意文件数 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageType' => 'getImageType',
            'namespace' => 'getNamespace',
            'imageDigest' => 'getImageDigest',
            'scanStatus' => 'getScanStatus',
            'vulNum' => 'getVulNum',
            'unsafeSettingNum' => 'getUnsafeSettingNum',
            'maliciousFileNum' => 'getMaliciousFileNum'
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageDigest'] = isset($data['imageDigest']) ? $data['imageDigest'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['vulNum'] = isset($data['vulNum']) ? $data['vulNum'] : null;
        $this->container['unsafeSettingNum'] = isset($data['unsafeSettingNum']) ? $data['unsafeSettingNum'] : null;
        $this->container['maliciousFileNum'] = isset($data['maliciousFileNum']) ? $data['maliciousFileNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: 多架构关联镜像的记录唯一标识ID **取值范围**: 最小值0，最大值9223372036854775807
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
    * @param int|null $id **参数解释**: 多架构关联镜像的记录唯一标识ID **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**: 多架构关联镜像的唯一标识ID **取值范围**: 字符长度0-64位
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
    * @param string|null $imageId **参数解释**: 多架构关联镜像的唯一标识ID **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
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
    * @param string|null $imageName **参数解释**: 镜像名称 **取值范围**: 字符长度0-128位
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
    *  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
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
    * @param string|null $imageVersion **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
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
    *  **参数解释**: 镜像类型 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。
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
    * @param string|null $imageType **参数解释**: 镜像类型 **取值范围**: - private_image：SWR私有镜像。 - shared_image：SWR共享镜像。 - instance_image：SWR企业版镜像。 - harbor：Harbor仓库镜像。 - jfrog：Jfrog镜像。
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**: 组织名称 **取值范围**: 字符长度0-64位
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
    * @param string|null $namespace **参数解释**: 组织名称 **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets imageDigest
    *  **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
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
    * @param string|null $imageDigest **参数解释**: 镜像digest **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setImageDigest($imageDigest)
    {
        $this->container['imageDigest'] = $imageDigest;
        return $this;
    }

    /**
    * Gets scanStatus
    *  **参数解释**： 扫描状态 **取值范围**： - unscan：未扫描。 - success：扫描完成。 - scanning：正在扫描。 - failed：扫描失败。 - download_failed：下载失败。 - image_oversized：镜像超大。 - waiting_for_scan：等待扫描。
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
    * @param string|null $scanStatus **参数解释**： 扫描状态 **取值范围**： - unscan：未扫描。 - success：扫描完成。 - scanning：正在扫描。 - failed：扫描失败。 - download_failed：下载失败。 - image_oversized：镜像超大。 - waiting_for_scan：等待扫描。
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets vulNum
    *  **参数解释**: 漏洞个数 **取值范围**: 取值0-2147483647
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
    * @param int|null $vulNum **参数解释**: 漏洞个数 **取值范围**: 取值0-2147483647
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
    *  **参数解释**: 基线扫描未通过数 **取值范围**: 取值0-2147483647
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
    * @param int|null $unsafeSettingNum **参数解释**: 基线扫描未通过数 **取值范围**: 取值0-2147483647
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
    *  **参数解释**: 恶意文件数 **取值范围**: 取值0-2147483647
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
    * @param int|null $maliciousFileNum **参数解释**: 恶意文件数 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setMaliciousFileNum($maliciousFileNum)
    {
        $this->container['maliciousFileNum'] = $maliciousFileNum;
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

