<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceDataRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceDataRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * diskQuota  磁盘配额，单位MB，参考值，只能保证在这个值左右
    * age  老化时间，日志压缩文件名时间戳老于这个时间就会发生老化删除
    * state  配置开关，true启用数据打印，false不启用数据打印
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'diskQuota' => 'int',
            'age' => 'int',
            'state' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * diskQuota  磁盘配额，单位MB，参考值，只能保证在这个值左右
    * age  老化时间，日志压缩文件名时间戳老于这个时间就会发生老化删除
    * state  配置开关，true启用数据打印，false不启用数据打印
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'diskQuota' => 'int32',
        'age' => 'int32',
        'state' => null
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
    * diskQuota  磁盘配额，单位MB，参考值，只能保证在这个值左右
    * age  老化时间，日志压缩文件名时间戳老于这个时间就会发生老化删除
    * state  配置开关，true启用数据打印，false不启用数据打印
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'diskQuota' => 'disk_quota',
            'age' => 'age',
            'state' => 'state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * diskQuota  磁盘配额，单位MB，参考值，只能保证在这个值左右
    * age  老化时间，日志压缩文件名时间戳老于这个时间就会发生老化删除
    * state  配置开关，true启用数据打印，false不启用数据打印
    *
    * @var string[]
    */
    protected static $setters = [
            'diskQuota' => 'setDiskQuota',
            'age' => 'setAge',
            'state' => 'setState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * diskQuota  磁盘配额，单位MB，参考值，只能保证在这个值左右
    * age  老化时间，日志压缩文件名时间戳老于这个时间就会发生老化删除
    * state  配置开关，true启用数据打印，false不启用数据打印
    *
    * @var string[]
    */
    protected static $getters = [
            'diskQuota' => 'getDiskQuota',
            'age' => 'getAge',
            'state' => 'getState'
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
        $this->container['diskQuota'] = isset($data['diskQuota']) ? $data['diskQuota'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['diskQuota'] === null) {
            $invalidProperties[] = "'diskQuota' can't be null";
        }
            if (($this->container['diskQuota'] > 10240)) {
                $invalidProperties[] = "invalid value for 'diskQuota', must be smaller than or equal to 10240.";
            }
            if (($this->container['diskQuota'] < 512)) {
                $invalidProperties[] = "invalid value for 'diskQuota', must be bigger than or equal to 512.";
            }
        if ($this->container['age'] === null) {
            $invalidProperties[] = "'age' can't be null";
        }
            if (($this->container['age'] > 7)) {
                $invalidProperties[] = "invalid value for 'age', must be smaller than or equal to 7.";
            }
            if (($this->container['age'] < 1)) {
                $invalidProperties[] = "invalid value for 'age', must be bigger than or equal to 1.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
            if ((mb_strlen($this->container['state']) > 16)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['state']) < 0)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/(on|off)/", $this->container['state'])) {
                $invalidProperties[] = "invalid value for 'state', must be conform to the pattern /(on|off)/.";
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
    * Gets diskQuota
    *  磁盘配额，单位MB，参考值，只能保证在这个值左右
    *
    * @return int
    */
    public function getDiskQuota()
    {
        return $this->container['diskQuota'];
    }

    /**
    * Sets diskQuota
    *
    * @param int $diskQuota 磁盘配额，单位MB，参考值，只能保证在这个值左右
    *
    * @return $this
    */
    public function setDiskQuota($diskQuota)
    {
        $this->container['diskQuota'] = $diskQuota;
        return $this;
    }

    /**
    * Gets age
    *  老化时间，日志压缩文件名时间戳老于这个时间就会发生老化删除
    *
    * @return int
    */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
    * Sets age
    *
    * @param int $age 老化时间，日志压缩文件名时间戳老于这个时间就会发生老化删除
    *
    * @return $this
    */
    public function setAge($age)
    {
        $this->container['age'] = $age;
        return $this;
    }

    /**
    * Gets state
    *  配置开关，true启用数据打印，false不启用数据打印
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 配置开关，true启用数据打印，false不启用数据打印
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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

