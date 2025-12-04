<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Volume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Volume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeName  云手机服务器的硬盘名称。
    * volumeId  云手机服务器的硬盘唯一标识。
    * volumeSize  云手机服务器的硬盘大小，单位G。
    * volumeType  云手机服务器的硬盘类型。
    * createTime  硬盘创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  硬盘更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeName' => 'string',
            'volumeId' => 'string',
            'volumeSize' => 'int',
            'volumeType' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeName  云手机服务器的硬盘名称。
    * volumeId  云手机服务器的硬盘唯一标识。
    * volumeSize  云手机服务器的硬盘大小，单位G。
    * volumeType  云手机服务器的硬盘类型。
    * createTime  硬盘创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  硬盘更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeName' => null,
        'volumeId' => null,
        'volumeSize' => 'int32',
        'volumeType' => 'int32',
        'createTime' => null,
        'updateTime' => null
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
    * volumeName  云手机服务器的硬盘名称。
    * volumeId  云手机服务器的硬盘唯一标识。
    * volumeSize  云手机服务器的硬盘大小，单位G。
    * volumeType  云手机服务器的硬盘类型。
    * createTime  硬盘创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  硬盘更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeName' => 'volume_name',
            'volumeId' => 'volume_id',
            'volumeSize' => 'volume_size',
            'volumeType' => 'volume_type',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeName  云手机服务器的硬盘名称。
    * volumeId  云手机服务器的硬盘唯一标识。
    * volumeSize  云手机服务器的硬盘大小，单位G。
    * volumeType  云手机服务器的硬盘类型。
    * createTime  硬盘创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  硬盘更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeName' => 'setVolumeName',
            'volumeId' => 'setVolumeId',
            'volumeSize' => 'setVolumeSize',
            'volumeType' => 'setVolumeType',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeName  云手机服务器的硬盘名称。
    * volumeId  云手机服务器的硬盘唯一标识。
    * volumeSize  云手机服务器的硬盘大小，单位G。
    * volumeType  云手机服务器的硬盘类型。
    * createTime  硬盘创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  硬盘更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeName' => 'getVolumeName',
            'volumeId' => 'getVolumeId',
            'volumeSize' => 'getVolumeSize',
            'volumeType' => 'getVolumeType',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['volumeName'] = isset($data['volumeName']) ? $data['volumeName'] : null;
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['volumeSize'] = isset($data['volumeSize']) ? $data['volumeSize'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['volumeName']) && (mb_strlen($this->container['volumeName']) > 64)) {
                $invalidProperties[] = "invalid value for 'volumeName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['volumeName']) && (mb_strlen($this->container['volumeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'volumeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['volumeId']) && (mb_strlen($this->container['volumeId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'volumeId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['volumeId']) && (mb_strlen($this->container['volumeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'volumeId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['volumeSize']) && ($this->container['volumeSize'] > 8096)) {
                $invalidProperties[] = "invalid value for 'volumeSize', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['volumeSize']) && ($this->container['volumeSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'volumeSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['volumeType']) && (mb_strlen($this->container['volumeType']) > 1024)) {
                $invalidProperties[] = "invalid value for 'volumeType', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['volumeType']) && (mb_strlen($this->container['volumeType']) < 0)) {
                $invalidProperties[] = "invalid value for 'volumeType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 1024)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 1024)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
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
    * Gets volumeName
    *  云手机服务器的硬盘名称。
    *
    * @return string|null
    */
    public function getVolumeName()
    {
        return $this->container['volumeName'];
    }

    /**
    * Sets volumeName
    *
    * @param string|null $volumeName 云手机服务器的硬盘名称。
    *
    * @return $this
    */
    public function setVolumeName($volumeName)
    {
        $this->container['volumeName'] = $volumeName;
        return $this;
    }

    /**
    * Gets volumeId
    *  云手机服务器的硬盘唯一标识。
    *
    * @return string|null
    */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
    * Sets volumeId
    *
    * @param string|null $volumeId 云手机服务器的硬盘唯一标识。
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets volumeSize
    *  云手机服务器的硬盘大小，单位G。
    *
    * @return int|null
    */
    public function getVolumeSize()
    {
        return $this->container['volumeSize'];
    }

    /**
    * Sets volumeSize
    *
    * @param int|null $volumeSize 云手机服务器的硬盘大小，单位G。
    *
    * @return $this
    */
    public function setVolumeSize($volumeSize)
    {
        $this->container['volumeSize'] = $volumeSize;
        return $this;
    }

    /**
    * Gets volumeType
    *  云手机服务器的硬盘类型。
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType 云手机服务器的硬盘类型。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets createTime
    *  硬盘创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 硬盘创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  硬盘更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 硬盘更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

