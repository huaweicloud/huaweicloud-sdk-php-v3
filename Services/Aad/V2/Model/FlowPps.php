<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowPps implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowPps';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * utime  数据时间
    * attackPps  攻击包速率
    * normalPps  正常包速率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'utime' => 'int',
            'attackPps' => 'int',
            'normalPps' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * utime  数据时间
    * attackPps  攻击包速率
    * normalPps  正常包速率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'utime' => 'int64',
        'attackPps' => 'int32',
        'normalPps' => 'int32'
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
    * attackPps  攻击包速率
    * normalPps  正常包速率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'utime' => 'utime',
            'attackPps' => 'attack_pps',
            'normalPps' => 'normal_pps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * utime  数据时间
    * attackPps  攻击包速率
    * normalPps  正常包速率
    *
    * @var string[]
    */
    protected static $setters = [
            'utime' => 'setUtime',
            'attackPps' => 'setAttackPps',
            'normalPps' => 'setNormalPps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * utime  数据时间
    * attackPps  攻击包速率
    * normalPps  正常包速率
    *
    * @var string[]
    */
    protected static $getters = [
            'utime' => 'getUtime',
            'attackPps' => 'getAttackPps',
            'normalPps' => 'getNormalPps'
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
        $this->container['attackPps'] = isset($data['attackPps']) ? $data['attackPps'] : null;
        $this->container['normalPps'] = isset($data['normalPps']) ? $data['normalPps'] : null;
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
    * Gets attackPps
    *  攻击包速率
    *
    * @return int|null
    */
    public function getAttackPps()
    {
        return $this->container['attackPps'];
    }

    /**
    * Sets attackPps
    *
    * @param int|null $attackPps 攻击包速率
    *
    * @return $this
    */
    public function setAttackPps($attackPps)
    {
        $this->container['attackPps'] = $attackPps;
        return $this;
    }

    /**
    * Gets normalPps
    *  正常包速率
    *
    * @return int|null
    */
    public function getNormalPps()
    {
        return $this->container['normalPps'];
    }

    /**
    * Sets normalPps
    *
    * @param int|null $normalPps 正常包速率
    *
    * @return $this
    */
    public function setNormalPps($normalPps)
    {
        $this->container['normalPps'] = $normalPps;
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

