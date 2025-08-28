<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WarmPoolInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WarmPoolInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minCapacity  暖池最小容量
    * maxCapacity  暖池最大容量
    * instanceInitWaitTime  实例初始化等待时间
    * status  暖池状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minCapacity' => 'int',
            'maxCapacity' => 'int',
            'instanceInitWaitTime' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minCapacity  暖池最小容量
    * maxCapacity  暖池最大容量
    * instanceInitWaitTime  实例初始化等待时间
    * status  暖池状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minCapacity' => 'int32',
        'maxCapacity' => 'int32',
        'instanceInitWaitTime' => 'int32',
        'status' => null
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
    * minCapacity  暖池最小容量
    * maxCapacity  暖池最大容量
    * instanceInitWaitTime  实例初始化等待时间
    * status  暖池状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minCapacity' => 'min_capacity',
            'maxCapacity' => 'max_capacity',
            'instanceInitWaitTime' => 'instance_init_wait_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minCapacity  暖池最小容量
    * maxCapacity  暖池最大容量
    * instanceInitWaitTime  实例初始化等待时间
    * status  暖池状态
    *
    * @var string[]
    */
    protected static $setters = [
            'minCapacity' => 'setMinCapacity',
            'maxCapacity' => 'setMaxCapacity',
            'instanceInitWaitTime' => 'setInstanceInitWaitTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minCapacity  暖池最小容量
    * maxCapacity  暖池最大容量
    * instanceInitWaitTime  实例初始化等待时间
    * status  暖池状态
    *
    * @var string[]
    */
    protected static $getters = [
            'minCapacity' => 'getMinCapacity',
            'maxCapacity' => 'getMaxCapacity',
            'instanceInitWaitTime' => 'getInstanceInitWaitTime',
            'status' => 'getStatus'
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
        $this->container['minCapacity'] = isset($data['minCapacity']) ? $data['minCapacity'] : null;
        $this->container['maxCapacity'] = isset($data['maxCapacity']) ? $data['maxCapacity'] : null;
        $this->container['instanceInitWaitTime'] = isset($data['instanceInitWaitTime']) ? $data['instanceInitWaitTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets minCapacity
    *  暖池最小容量
    *
    * @return int|null
    */
    public function getMinCapacity()
    {
        return $this->container['minCapacity'];
    }

    /**
    * Sets minCapacity
    *
    * @param int|null $minCapacity 暖池最小容量
    *
    * @return $this
    */
    public function setMinCapacity($minCapacity)
    {
        $this->container['minCapacity'] = $minCapacity;
        return $this;
    }

    /**
    * Gets maxCapacity
    *  暖池最大容量
    *
    * @return int|null
    */
    public function getMaxCapacity()
    {
        return $this->container['maxCapacity'];
    }

    /**
    * Sets maxCapacity
    *
    * @param int|null $maxCapacity 暖池最大容量
    *
    * @return $this
    */
    public function setMaxCapacity($maxCapacity)
    {
        $this->container['maxCapacity'] = $maxCapacity;
        return $this;
    }

    /**
    * Gets instanceInitWaitTime
    *  实例初始化等待时间
    *
    * @return int|null
    */
    public function getInstanceInitWaitTime()
    {
        return $this->container['instanceInitWaitTime'];
    }

    /**
    * Sets instanceInitWaitTime
    *
    * @param int|null $instanceInitWaitTime 实例初始化等待时间
    *
    * @return $this
    */
    public function setInstanceInitWaitTime($instanceInitWaitTime)
    {
        $this->container['instanceInitWaitTime'] = $instanceInitWaitTime;
        return $this;
    }

    /**
    * Gets status
    *  暖池状态
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
    * @param string|null $status 暖池状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

