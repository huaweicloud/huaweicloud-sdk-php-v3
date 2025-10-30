<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackCopyByHostIdResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackCopyByHostIdResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupId  **参数解释** 备份ID **取值范围** 字符长度0-65535位
    * backupName  **参数解释** 备份名称 **取值范围** 字符长度0-65535位
    * backupStatus  **参数解释** 备份状态 **取值范围** 字符长度0-65535位
    * createTime  **参数解释** 创建时间 **取值范围** 取值0-2147483647
    * osImagesData  **参数解释** 备份注册镜像ID列表 **取值范围** 取值0-200
    * backupTag  **参数解释** 备份标识 **取值范围** - 0：定时周期 - 1：勒索加密
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupId' => 'string',
            'backupName' => 'string',
            'backupStatus' => 'string',
            'createTime' => 'int',
            'osImagesData' => '\HuaweiCloud\SDK\Hss\V5\Model\ImageData[]',
            'backupTag' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupId  **参数解释** 备份ID **取值范围** 字符长度0-65535位
    * backupName  **参数解释** 备份名称 **取值范围** 字符长度0-65535位
    * backupStatus  **参数解释** 备份状态 **取值范围** 字符长度0-65535位
    * createTime  **参数解释** 创建时间 **取值范围** 取值0-2147483647
    * osImagesData  **参数解释** 备份注册镜像ID列表 **取值范围** 取值0-200
    * backupTag  **参数解释** 备份标识 **取值范围** - 0：定时周期 - 1：勒索加密
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupId' => null,
        'backupName' => null,
        'backupStatus' => null,
        'createTime' => 'int64',
        'osImagesData' => null,
        'backupTag' => 'int32'
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
    * backupId  **参数解释** 备份ID **取值范围** 字符长度0-65535位
    * backupName  **参数解释** 备份名称 **取值范围** 字符长度0-65535位
    * backupStatus  **参数解释** 备份状态 **取值范围** 字符长度0-65535位
    * createTime  **参数解释** 创建时间 **取值范围** 取值0-2147483647
    * osImagesData  **参数解释** 备份注册镜像ID列表 **取值范围** 取值0-200
    * backupTag  **参数解释** 备份标识 **取值范围** - 0：定时周期 - 1：勒索加密
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupId' => 'backup_id',
            'backupName' => 'backup_name',
            'backupStatus' => 'backup_status',
            'createTime' => 'create_time',
            'osImagesData' => 'os_images_data',
            'backupTag' => 'backup_tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupId  **参数解释** 备份ID **取值范围** 字符长度0-65535位
    * backupName  **参数解释** 备份名称 **取值范围** 字符长度0-65535位
    * backupStatus  **参数解释** 备份状态 **取值范围** 字符长度0-65535位
    * createTime  **参数解释** 创建时间 **取值范围** 取值0-2147483647
    * osImagesData  **参数解释** 备份注册镜像ID列表 **取值范围** 取值0-200
    * backupTag  **参数解释** 备份标识 **取值范围** - 0：定时周期 - 1：勒索加密
    *
    * @var string[]
    */
    protected static $setters = [
            'backupId' => 'setBackupId',
            'backupName' => 'setBackupName',
            'backupStatus' => 'setBackupStatus',
            'createTime' => 'setCreateTime',
            'osImagesData' => 'setOsImagesData',
            'backupTag' => 'setBackupTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupId  **参数解释** 备份ID **取值范围** 字符长度0-65535位
    * backupName  **参数解释** 备份名称 **取值范围** 字符长度0-65535位
    * backupStatus  **参数解释** 备份状态 **取值范围** 字符长度0-65535位
    * createTime  **参数解释** 创建时间 **取值范围** 取值0-2147483647
    * osImagesData  **参数解释** 备份注册镜像ID列表 **取值范围** 取值0-200
    * backupTag  **参数解释** 备份标识 **取值范围** - 0：定时周期 - 1：勒索加密
    *
    * @var string[]
    */
    protected static $getters = [
            'backupId' => 'getBackupId',
            'backupName' => 'getBackupName',
            'backupStatus' => 'getBackupStatus',
            'createTime' => 'getCreateTime',
            'osImagesData' => 'getOsImagesData',
            'backupTag' => 'getBackupTag'
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
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['backupName'] = isset($data['backupName']) ? $data['backupName'] : null;
        $this->container['backupStatus'] = isset($data['backupStatus']) ? $data['backupStatus'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['osImagesData'] = isset($data['osImagesData']) ? $data['osImagesData'] : null;
        $this->container['backupTag'] = isset($data['backupTag']) ? $data['backupTag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['backupId']) && (mb_strlen($this->container['backupId']) > 65535)) {
                $invalidProperties[] = "invalid value for 'backupId', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['backupId']) && (mb_strlen($this->container['backupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupName']) && (mb_strlen($this->container['backupName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'backupName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['backupName']) && (mb_strlen($this->container['backupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupStatus']) && (mb_strlen($this->container['backupStatus']) > 65535)) {
                $invalidProperties[] = "invalid value for 'backupStatus', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['backupStatus']) && (mb_strlen($this->container['backupStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupTag']) && ($this->container['backupTag'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'backupTag', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['backupTag']) && ($this->container['backupTag'] < 0)) {
                $invalidProperties[] = "invalid value for 'backupTag', must be bigger than or equal to 0.";
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
    * Gets backupId
    *  **参数解释** 备份ID **取值范围** 字符长度0-65535位
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId **参数解释** 备份ID **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets backupName
    *  **参数解释** 备份名称 **取值范围** 字符长度0-65535位
    *
    * @return string|null
    */
    public function getBackupName()
    {
        return $this->container['backupName'];
    }

    /**
    * Sets backupName
    *
    * @param string|null $backupName **参数解释** 备份名称 **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setBackupName($backupName)
    {
        $this->container['backupName'] = $backupName;
        return $this;
    }

    /**
    * Gets backupStatus
    *  **参数解释** 备份状态 **取值范围** 字符长度0-65535位
    *
    * @return string|null
    */
    public function getBackupStatus()
    {
        return $this->container['backupStatus'];
    }

    /**
    * Sets backupStatus
    *
    * @param string|null $backupStatus **参数解释** 备份状态 **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setBackupStatus($backupStatus)
    {
        $this->container['backupStatus'] = $backupStatus;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释** 创建时间 **取值范围** 取值0-2147483647
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释** 创建时间 **取值范围** 取值0-2147483647
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets osImagesData
    *  **参数解释** 备份注册镜像ID列表 **取值范围** 取值0-200
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ImageData[]|null
    */
    public function getOsImagesData()
    {
        return $this->container['osImagesData'];
    }

    /**
    * Sets osImagesData
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ImageData[]|null $osImagesData **参数解释** 备份注册镜像ID列表 **取值范围** 取值0-200
    *
    * @return $this
    */
    public function setOsImagesData($osImagesData)
    {
        $this->container['osImagesData'] = $osImagesData;
        return $this;
    }

    /**
    * Gets backupTag
    *  **参数解释** 备份标识 **取值范围** - 0：定时周期 - 1：勒索加密
    *
    * @return int|null
    */
    public function getBackupTag()
    {
        return $this->container['backupTag'];
    }

    /**
    * Sets backupTag
    *
    * @param int|null $backupTag **参数解释** 备份标识 **取值范围** - 0：定时周期 - 1：勒索加密
    *
    * @return $this
    */
    public function setBackupTag($backupTag)
    {
        $this->container['backupTag'] = $backupTag;
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

