<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowBps implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowBps';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * utime  数据时间
    * attackBps  攻击流量
    * normalBps  正常流量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'utime' => 'int',
            'attackBps' => 'int',
            'normalBps' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * utime  数据时间
    * attackBps  攻击流量
    * normalBps  正常流量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'utime' => 'int64',
        'attackBps' => 'int32',
        'normalBps' => 'int32'
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
    * utime  数据时间
    * attackBps  攻击流量
    * normalBps  正常流量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'utime' => 'utime',
            'attackBps' => 'attack_bps',
            'normalBps' => 'normal_bps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * utime  数据时间
    * attackBps  攻击流量
    * normalBps  正常流量
    *
    * @var string[]
    */
    protected static $setters = [
            'utime' => 'setUtime',
            'attackBps' => 'setAttackBps',
            'normalBps' => 'setNormalBps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * utime  数据时间
    * attackBps  攻击流量
    * normalBps  正常流量
    *
    * @var string[]
    */
    protected static $getters = [
            'utime' => 'getUtime',
            'attackBps' => 'getAttackBps',
            'normalBps' => 'getNormalBps'
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
        $this->container['utime'] = isset($data['utime']) ? $data['utime'] : null;
        $this->container['attackBps'] = isset($data['attackBps']) ? $data['attackBps'] : null;
        $this->container['normalBps'] = isset($data['normalBps']) ? $data['normalBps'] : null;
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
    * Gets utime
    *  数据时间
    *
    * @return int|null
    */
    public function getUtime()
    {
        return $this->container['utime'];
    }

    /**
    * Sets utime
    *
    * @param int|null $utime 数据时间
    *
    * @return $this
    */
    public function setUtime($utime)
    {
        $this->container['utime'] = $utime;
        return $this;
    }

    /**
    * Gets attackBps
    *  攻击流量
    *
    * @return int|null
    */
    public function getAttackBps()
    {
        return $this->container['attackBps'];
    }

    /**
    * Sets attackBps
    *
    * @param int|null $attackBps 攻击流量
    *
    * @return $this
    */
    public function setAttackBps($attackBps)
    {
        $this->container['attackBps'] = $attackBps;
        return $this;
    }

    /**
    * Gets normalBps
    *  正常流量
    *
    * @return int|null
    */
    public function getNormalBps()
    {
        return $this->container['normalBps'];
    }

    /**
    * Sets normalBps
    *
    * @param int|null $normalBps 正常流量
    *
    * @return $this
    */
    public function setNormalBps($normalBps)
    {
        $this->container['normalBps'] = $normalBps;
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

