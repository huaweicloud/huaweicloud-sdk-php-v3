<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RpoAndRtoInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RpoAndRtoInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkPoint  检查点
    * delay  延迟
    * gtidSet  gtid集合
    * time  当前时间 ，格式为“yyyy-MM-dd HH:mm:ss”
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkPoint' => 'string',
            'delay' => 'string',
            'gtidSet' => 'string',
            'time' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkPoint  检查点
    * delay  延迟
    * gtidSet  gtid集合
    * time  当前时间 ，格式为“yyyy-MM-dd HH:mm:ss”
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkPoint' => null,
        'delay' => null,
        'gtidSet' => null,
        'time' => null
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
    * checkPoint  检查点
    * delay  延迟
    * gtidSet  gtid集合
    * time  当前时间 ，格式为“yyyy-MM-dd HH:mm:ss”
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkPoint' => 'check_point',
            'delay' => 'delay',
            'gtidSet' => 'gtid_set',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkPoint  检查点
    * delay  延迟
    * gtidSet  gtid集合
    * time  当前时间 ，格式为“yyyy-MM-dd HH:mm:ss”
    *
    * @var string[]
    */
    protected static $setters = [
            'checkPoint' => 'setCheckPoint',
            'delay' => 'setDelay',
            'gtidSet' => 'setGtidSet',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkPoint  检查点
    * delay  延迟
    * gtidSet  gtid集合
    * time  当前时间 ，格式为“yyyy-MM-dd HH:mm:ss”
    *
    * @var string[]
    */
    protected static $getters = [
            'checkPoint' => 'getCheckPoint',
            'delay' => 'getDelay',
            'gtidSet' => 'getGtidSet',
            'time' => 'getTime'
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
        $this->container['checkPoint'] = isset($data['checkPoint']) ? $data['checkPoint'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['gtidSet'] = isset($data['gtidSet']) ? $data['gtidSet'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
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
    * Gets checkPoint
    *  检查点
    *
    * @return string|null
    */
    public function getCheckPoint()
    {
        return $this->container['checkPoint'];
    }

    /**
    * Sets checkPoint
    *
    * @param string|null $checkPoint 检查点
    *
    * @return $this
    */
    public function setCheckPoint($checkPoint)
    {
        $this->container['checkPoint'] = $checkPoint;
        return $this;
    }

    /**
    * Gets delay
    *  延迟
    *
    * @return string|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param string|null $delay 延迟
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets gtidSet
    *  gtid集合
    *
    * @return string|null
    */
    public function getGtidSet()
    {
        return $this->container['gtidSet'];
    }

    /**
    * Sets gtidSet
    *
    * @param string|null $gtidSet gtid集合
    *
    * @return $this
    */
    public function setGtidSet($gtidSet)
    {
        $this->container['gtidSet'] = $gtidSet;
        return $this;
    }

    /**
    * Gets time
    *  当前时间 ，格式为“yyyy-MM-dd HH:mm:ss”
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 当前时间 ，格式为“yyyy-MM-dd HH:mm:ss”
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

