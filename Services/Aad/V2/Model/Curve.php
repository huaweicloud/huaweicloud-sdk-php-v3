<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Curve implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Curve';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * in  入带宽
    * out  出带宽
    * time  时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'in' => 'float',
            'out' => 'float',
            'time' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * in  入带宽
    * out  出带宽
    * time  时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'in' => 'float',
        'out' => 'float',
        'time' => 'int32'
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
    * in  入带宽
    * out  出带宽
    * time  时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'in' => 'in',
            'out' => 'out',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * in  入带宽
    * out  出带宽
    * time  时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'in' => 'setIn',
            'out' => 'setOut',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * in  入带宽
    * out  出带宽
    * time  时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'in' => 'getIn',
            'out' => 'getOut',
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
        $this->container['in'] = isset($data['in']) ? $data['in'] : null;
        $this->container['out'] = isset($data['out']) ? $data['out'] : null;
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
    * Gets in
    *  入带宽
    *
    * @return float|null
    */
    public function getIn()
    {
        return $this->container['in'];
    }

    /**
    * Sets in
    *
    * @param float|null $in 入带宽
    *
    * @return $this
    */
    public function setIn($in)
    {
        $this->container['in'] = $in;
        return $this;
    }

    /**
    * Gets out
    *  出带宽
    *
    * @return float|null
    */
    public function getOut()
    {
        return $this->container['out'];
    }

    /**
    * Sets out
    *
    * @param float|null $out 出带宽
    *
    * @return $this
    */
    public function setOut($out)
    {
        $this->container['out'] = $out;
        return $this;
    }

    /**
    * Gets time
    *  时间戳
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time 时间戳
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

