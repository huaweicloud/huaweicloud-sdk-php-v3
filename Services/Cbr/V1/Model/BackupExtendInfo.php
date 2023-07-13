<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupExtendInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupExtendInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoTrigger  是否是自动生成的备份副本
    * bootable  是否系统盘备份
    * incremental  是否是增备
    * snapshotId  卷备份副本的快照id
    * supportLld  是否支持lazyloading快速恢复
    * supportedRestoreMode  备份支持恢复的方式，当前取值包含na,snapshot和backup。如果该字段取值为snapshot，代表备份此时已经支持创建整机镜像；如果该字段取值为backup，备份支持通过云服务器上硬盘的备份进行恢复；如果该字段取值为na，备份不支持恢复。
    * osImagesData  备份注册镜像ID列表
    * containSystemDisk  整机备份是否包含系统盘
    * encrypted  是否加密
    * systemDisk  是否是系统盘
    * isMultiAz  备份类型是否为多AZ
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoTrigger' => 'bool',
            'bootable' => 'bool',
            'incremental' => 'bool',
            'snapshotId' => 'string',
            'supportLld' => 'bool',
            'supportedRestoreMode' => 'string',
            'osImagesData' => '\HuaweiCloud\SDK\Cbr\V1\Model\ImageData[]',
            'containSystemDisk' => 'bool',
            'encrypted' => 'bool',
            'systemDisk' => 'bool',
            'isMultiAz' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoTrigger  是否是自动生成的备份副本
    * bootable  是否系统盘备份
    * incremental  是否是增备
    * snapshotId  卷备份副本的快照id
    * supportLld  是否支持lazyloading快速恢复
    * supportedRestoreMode  备份支持恢复的方式，当前取值包含na,snapshot和backup。如果该字段取值为snapshot，代表备份此时已经支持创建整机镜像；如果该字段取值为backup，备份支持通过云服务器上硬盘的备份进行恢复；如果该字段取值为na，备份不支持恢复。
    * osImagesData  备份注册镜像ID列表
    * containSystemDisk  整机备份是否包含系统盘
    * encrypted  是否加密
    * systemDisk  是否是系统盘
    * isMultiAz  备份类型是否为多AZ
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoTrigger' => null,
        'bootable' => null,
        'incremental' => null,
        'snapshotId' => null,
        'supportLld' => null,
        'supportedRestoreMode' => null,
        'osImagesData' => null,
        'containSystemDisk' => null,
        'encrypted' => null,
        'systemDisk' => null,
        'isMultiAz' => null
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
    * autoTrigger  是否是自动生成的备份副本
    * bootable  是否系统盘备份
    * incremental  是否是增备
    * snapshotId  卷备份副本的快照id
    * supportLld  是否支持lazyloading快速恢复
    * supportedRestoreMode  备份支持恢复的方式，当前取值包含na,snapshot和backup。如果该字段取值为snapshot，代表备份此时已经支持创建整机镜像；如果该字段取值为backup，备份支持通过云服务器上硬盘的备份进行恢复；如果该字段取值为na，备份不支持恢复。
    * osImagesData  备份注册镜像ID列表
    * containSystemDisk  整机备份是否包含系统盘
    * encrypted  是否加密
    * systemDisk  是否是系统盘
    * isMultiAz  备份类型是否为多AZ
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoTrigger' => 'auto_trigger',
            'bootable' => 'bootable',
            'incremental' => 'incremental',
            'snapshotId' => 'snapshot_id',
            'supportLld' => 'support_lld',
            'supportedRestoreMode' => 'supported_restore_mode',
            'osImagesData' => 'os_images_data',
            'containSystemDisk' => 'contain_system_disk',
            'encrypted' => 'encrypted',
            'systemDisk' => 'system_disk',
            'isMultiAz' => 'is_multi_az'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoTrigger  是否是自动生成的备份副本
    * bootable  是否系统盘备份
    * incremental  是否是增备
    * snapshotId  卷备份副本的快照id
    * supportLld  是否支持lazyloading快速恢复
    * supportedRestoreMode  备份支持恢复的方式，当前取值包含na,snapshot和backup。如果该字段取值为snapshot，代表备份此时已经支持创建整机镜像；如果该字段取值为backup，备份支持通过云服务器上硬盘的备份进行恢复；如果该字段取值为na，备份不支持恢复。
    * osImagesData  备份注册镜像ID列表
    * containSystemDisk  整机备份是否包含系统盘
    * encrypted  是否加密
    * systemDisk  是否是系统盘
    * isMultiAz  备份类型是否为多AZ
    *
    * @var string[]
    */
    protected static $setters = [
            'autoTrigger' => 'setAutoTrigger',
            'bootable' => 'setBootable',
            'incremental' => 'setIncremental',
            'snapshotId' => 'setSnapshotId',
            'supportLld' => 'setSupportLld',
            'supportedRestoreMode' => 'setSupportedRestoreMode',
            'osImagesData' => 'setOsImagesData',
            'containSystemDisk' => 'setContainSystemDisk',
            'encrypted' => 'setEncrypted',
            'systemDisk' => 'setSystemDisk',
            'isMultiAz' => 'setIsMultiAz'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoTrigger  是否是自动生成的备份副本
    * bootable  是否系统盘备份
    * incremental  是否是增备
    * snapshotId  卷备份副本的快照id
    * supportLld  是否支持lazyloading快速恢复
    * supportedRestoreMode  备份支持恢复的方式，当前取值包含na,snapshot和backup。如果该字段取值为snapshot，代表备份此时已经支持创建整机镜像；如果该字段取值为backup，备份支持通过云服务器上硬盘的备份进行恢复；如果该字段取值为na，备份不支持恢复。
    * osImagesData  备份注册镜像ID列表
    * containSystemDisk  整机备份是否包含系统盘
    * encrypted  是否加密
    * systemDisk  是否是系统盘
    * isMultiAz  备份类型是否为多AZ
    *
    * @var string[]
    */
    protected static $getters = [
            'autoTrigger' => 'getAutoTrigger',
            'bootable' => 'getBootable',
            'incremental' => 'getIncremental',
            'snapshotId' => 'getSnapshotId',
            'supportLld' => 'getSupportLld',
            'supportedRestoreMode' => 'getSupportedRestoreMode',
            'osImagesData' => 'getOsImagesData',
            'containSystemDisk' => 'getContainSystemDisk',
            'encrypted' => 'getEncrypted',
            'systemDisk' => 'getSystemDisk',
            'isMultiAz' => 'getIsMultiAz'
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
    const SUPPORTED_RESTORE_MODE_NA = 'na';
    const SUPPORTED_RESTORE_MODE_BACKUP = 'backup';
    const SUPPORTED_RESTORE_MODE_SNAPSHOT = 'snapshot';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSupportedRestoreModeAllowableValues()
    {
        return [
            self::SUPPORTED_RESTORE_MODE_NA,
            self::SUPPORTED_RESTORE_MODE_BACKUP,
            self::SUPPORTED_RESTORE_MODE_SNAPSHOT,
        ];
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
        $this->container['autoTrigger'] = isset($data['autoTrigger']) ? $data['autoTrigger'] : null;
        $this->container['bootable'] = isset($data['bootable']) ? $data['bootable'] : null;
        $this->container['incremental'] = isset($data['incremental']) ? $data['incremental'] : null;
        $this->container['snapshotId'] = isset($data['snapshotId']) ? $data['snapshotId'] : null;
        $this->container['supportLld'] = isset($data['supportLld']) ? $data['supportLld'] : null;
        $this->container['supportedRestoreMode'] = isset($data['supportedRestoreMode']) ? $data['supportedRestoreMode'] : 'na';
        $this->container['osImagesData'] = isset($data['osImagesData']) ? $data['osImagesData'] : null;
        $this->container['containSystemDisk'] = isset($data['containSystemDisk']) ? $data['containSystemDisk'] : null;
        $this->container['encrypted'] = isset($data['encrypted']) ? $data['encrypted'] : null;
        $this->container['systemDisk'] = isset($data['systemDisk']) ? $data['systemDisk'] : null;
        $this->container['isMultiAz'] = isset($data['isMultiAz']) ? $data['isMultiAz'] : false;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSupportedRestoreModeAllowableValues();
                if (!is_null($this->container['supportedRestoreMode']) && !in_array($this->container['supportedRestoreMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'supportedRestoreMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets autoTrigger
    *  是否是自动生成的备份副本
    *
    * @return bool|null
    */
    public function getAutoTrigger()
    {
        return $this->container['autoTrigger'];
    }

    /**
    * Sets autoTrigger
    *
    * @param bool|null $autoTrigger 是否是自动生成的备份副本
    *
    * @return $this
    */
    public function setAutoTrigger($autoTrigger)
    {
        $this->container['autoTrigger'] = $autoTrigger;
        return $this;
    }

    /**
    * Gets bootable
    *  是否系统盘备份
    *
    * @return bool|null
    */
    public function getBootable()
    {
        return $this->container['bootable'];
    }

    /**
    * Sets bootable
    *
    * @param bool|null $bootable 是否系统盘备份
    *
    * @return $this
    */
    public function setBootable($bootable)
    {
        $this->container['bootable'] = $bootable;
        return $this;
    }

    /**
    * Gets incremental
    *  是否是增备
    *
    * @return bool|null
    */
    public function getIncremental()
    {
        return $this->container['incremental'];
    }

    /**
    * Sets incremental
    *
    * @param bool|null $incremental 是否是增备
    *
    * @return $this
    */
    public function setIncremental($incremental)
    {
        $this->container['incremental'] = $incremental;
        return $this;
    }

    /**
    * Gets snapshotId
    *  卷备份副本的快照id
    *
    * @return string|null
    */
    public function getSnapshotId()
    {
        return $this->container['snapshotId'];
    }

    /**
    * Sets snapshotId
    *
    * @param string|null $snapshotId 卷备份副本的快照id
    *
    * @return $this
    */
    public function setSnapshotId($snapshotId)
    {
        $this->container['snapshotId'] = $snapshotId;
        return $this;
    }

    /**
    * Gets supportLld
    *  是否支持lazyloading快速恢复
    *
    * @return bool|null
    */
    public function getSupportLld()
    {
        return $this->container['supportLld'];
    }

    /**
    * Sets supportLld
    *
    * @param bool|null $supportLld 是否支持lazyloading快速恢复
    *
    * @return $this
    */
    public function setSupportLld($supportLld)
    {
        $this->container['supportLld'] = $supportLld;
        return $this;
    }

    /**
    * Gets supportedRestoreMode
    *  备份支持恢复的方式，当前取值包含na,snapshot和backup。如果该字段取值为snapshot，代表备份此时已经支持创建整机镜像；如果该字段取值为backup，备份支持通过云服务器上硬盘的备份进行恢复；如果该字段取值为na，备份不支持恢复。
    *
    * @return string|null
    */
    public function getSupportedRestoreMode()
    {
        return $this->container['supportedRestoreMode'];
    }

    /**
    * Sets supportedRestoreMode
    *
    * @param string|null $supportedRestoreMode 备份支持恢复的方式，当前取值包含na,snapshot和backup。如果该字段取值为snapshot，代表备份此时已经支持创建整机镜像；如果该字段取值为backup，备份支持通过云服务器上硬盘的备份进行恢复；如果该字段取值为na，备份不支持恢复。
    *
    * @return $this
    */
    public function setSupportedRestoreMode($supportedRestoreMode)
    {
        $this->container['supportedRestoreMode'] = $supportedRestoreMode;
        return $this;
    }

    /**
    * Gets osImagesData
    *  备份注册镜像ID列表
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\ImageData[]|null
    */
    public function getOsImagesData()
    {
        return $this->container['osImagesData'];
    }

    /**
    * Sets osImagesData
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\ImageData[]|null $osImagesData 备份注册镜像ID列表
    *
    * @return $this
    */
    public function setOsImagesData($osImagesData)
    {
        $this->container['osImagesData'] = $osImagesData;
        return $this;
    }

    /**
    * Gets containSystemDisk
    *  整机备份是否包含系统盘
    *
    * @return bool|null
    */
    public function getContainSystemDisk()
    {
        return $this->container['containSystemDisk'];
    }

    /**
    * Sets containSystemDisk
    *
    * @param bool|null $containSystemDisk 整机备份是否包含系统盘
    *
    * @return $this
    */
    public function setContainSystemDisk($containSystemDisk)
    {
        $this->container['containSystemDisk'] = $containSystemDisk;
        return $this;
    }

    /**
    * Gets encrypted
    *  是否加密
    *
    * @return bool|null
    */
    public function getEncrypted()
    {
        return $this->container['encrypted'];
    }

    /**
    * Sets encrypted
    *
    * @param bool|null $encrypted 是否加密
    *
    * @return $this
    */
    public function setEncrypted($encrypted)
    {
        $this->container['encrypted'] = $encrypted;
        return $this;
    }

    /**
    * Gets systemDisk
    *  是否是系统盘
    *
    * @return bool|null
    */
    public function getSystemDisk()
    {
        return $this->container['systemDisk'];
    }

    /**
    * Sets systemDisk
    *
    * @param bool|null $systemDisk 是否是系统盘
    *
    * @return $this
    */
    public function setSystemDisk($systemDisk)
    {
        $this->container['systemDisk'] = $systemDisk;
        return $this;
    }

    /**
    * Gets isMultiAz
    *  备份类型是否为多AZ
    *
    * @return bool|null
    */
    public function getIsMultiAz()
    {
        return $this->container['isMultiAz'];
    }

    /**
    * Sets isMultiAz
    *
    * @param bool|null $isMultiAz 备份类型是否为多AZ
    *
    * @return $this
    */
    public function setIsMultiAz($isMultiAz)
    {
        $this->container['isMultiAz'] = $isMultiAz;
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

