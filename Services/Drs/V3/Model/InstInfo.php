<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineType  引擎类型
    * instType  实例类型
    * ip  迁移实例所在的私有IP
    * publicIp  迁移实例所在的公网IP
    * startTime  迁移实例任务定时启动时间
    * status  迁移实例的状态
    * volumeSize  迁移实例的磁盘大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineType' => 'string',
            'instType' => 'string',
            'ip' => 'string',
            'publicIp' => 'string',
            'startTime' => 'string',
            'status' => 'string',
            'volumeSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineType  引擎类型
    * instType  实例类型
    * ip  迁移实例所在的私有IP
    * publicIp  迁移实例所在的公网IP
    * startTime  迁移实例任务定时启动时间
    * status  迁移实例的状态
    * volumeSize  迁移实例的磁盘大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineType' => null,
        'instType' => null,
        'ip' => null,
        'publicIp' => null,
        'startTime' => null,
        'status' => null,
        'volumeSize' => 'int32'
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
    * engineType  引擎类型
    * instType  实例类型
    * ip  迁移实例所在的私有IP
    * publicIp  迁移实例所在的公网IP
    * startTime  迁移实例任务定时启动时间
    * status  迁移实例的状态
    * volumeSize  迁移实例的磁盘大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineType' => 'engine_type',
            'instType' => 'inst_type',
            'ip' => 'ip',
            'publicIp' => 'public_ip',
            'startTime' => 'start_time',
            'status' => 'status',
            'volumeSize' => 'volume_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineType  引擎类型
    * instType  实例类型
    * ip  迁移实例所在的私有IP
    * publicIp  迁移实例所在的公网IP
    * startTime  迁移实例任务定时启动时间
    * status  迁移实例的状态
    * volumeSize  迁移实例的磁盘大小
    *
    * @var string[]
    */
    protected static $setters = [
            'engineType' => 'setEngineType',
            'instType' => 'setInstType',
            'ip' => 'setIp',
            'publicIp' => 'setPublicIp',
            'startTime' => 'setStartTime',
            'status' => 'setStatus',
            'volumeSize' => 'setVolumeSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineType  引擎类型
    * instType  实例类型
    * ip  迁移实例所在的私有IP
    * publicIp  迁移实例所在的公网IP
    * startTime  迁移实例任务定时启动时间
    * status  迁移实例的状态
    * volumeSize  迁移实例的磁盘大小
    *
    * @var string[]
    */
    protected static $getters = [
            'engineType' => 'getEngineType',
            'instType' => 'getInstType',
            'ip' => 'getIp',
            'publicIp' => 'getPublicIp',
            'startTime' => 'getStartTime',
            'status' => 'getStatus',
            'volumeSize' => 'getVolumeSize'
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
    const ENGINE_TYPE_MYSQL = 'mysql';
    const ENGINE_TYPE_MONGODB = 'mongodb';
    const ENGINE_TYPE_CLOUD_DATA_GUARD_MYSQL = 'cloudDataGuard-mysql';
    const INST_TYPE_HIGH = 'high';
    const STATUS_ACTIVE = 'active';
    const STATUS_DELETED = 'deleted';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineTypeAllowableValues()
    {
        return [
            self::ENGINE_TYPE_MYSQL,
            self::ENGINE_TYPE_MONGODB,
            self::ENGINE_TYPE_CLOUD_DATA_GUARD_MYSQL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstTypeAllowableValues()
    {
        return [
            self::INST_TYPE_HIGH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_DELETED,
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
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['instType'] = isset($data['instType']) ? $data['instType'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['volumeSize'] = isset($data['volumeSize']) ? $data['volumeSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInstTypeAllowableValues();
                if (!is_null($this->container['instType']) && !in_array($this->container['instType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets engineType
    *  引擎类型
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets instType
    *  实例类型
    *
    * @return string|null
    */
    public function getInstType()
    {
        return $this->container['instType'];
    }

    /**
    * Sets instType
    *
    * @param string|null $instType 实例类型
    *
    * @return $this
    */
    public function setInstType($instType)
    {
        $this->container['instType'] = $instType;
        return $this;
    }

    /**
    * Gets ip
    *  迁移实例所在的私有IP
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 迁移实例所在的私有IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets publicIp
    *  迁移实例所在的公网IP
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 迁移实例所在的公网IP
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets startTime
    *  迁移实例任务定时启动时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 迁移实例任务定时启动时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets status
    *  迁移实例的状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 迁移实例的状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets volumeSize
    *  迁移实例的磁盘大小
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
    * @param int|null $volumeSize 迁移实例的磁盘大小
    *
    * @return $this
    */
    public function setVolumeSize($volumeSize)
    {
        $this->container['volumeSize'] = $volumeSize;
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

