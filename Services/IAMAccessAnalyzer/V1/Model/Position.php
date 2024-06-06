<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Position implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Position';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * line  位置的行号，从1开始。
    * column  位置的列号，从0开始。
    * offset  策略中与位置对应的偏移量，从0开始。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'line' => 'int',
            'column' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * line  位置的行号，从1开始。
    * column  位置的列号，从0开始。
    * offset  策略中与位置对应的偏移量，从0开始。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'line' => 'int32',
        'column' => 'int32',
        'offset' => 'int32'
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
    * line  位置的行号，从1开始。
    * column  位置的列号，从0开始。
    * offset  策略中与位置对应的偏移量，从0开始。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'line' => 'line',
            'column' => 'column',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * line  位置的行号，从1开始。
    * column  位置的列号，从0开始。
    * offset  策略中与位置对应的偏移量，从0开始。
    *
    * @var string[]
    */
    protected static $setters = [
            'line' => 'setLine',
            'column' => 'setColumn',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * line  位置的行号，从1开始。
    * column  位置的列号，从0开始。
    * offset  策略中与位置对应的偏移量，从0开始。
    *
    * @var string[]
    */
    protected static $getters = [
            'line' => 'getLine',
            'column' => 'getColumn',
            'offset' => 'getOffset'
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
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['line'] === null) {
            $invalidProperties[] = "'line' can't be null";
        }
        if ($this->container['column'] === null) {
            $invalidProperties[] = "'column' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
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
    * Gets line
    *  位置的行号，从1开始。
    *
    * @return int
    */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
    * Sets line
    *
    * @param int $line 位置的行号，从1开始。
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets column
    *  位置的列号，从0开始。
    *
    * @return int
    */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
    * Sets column
    *
    * @param int $column 位置的列号，从0开始。
    *
    * @return $this
    */
    public function setColumn($column)
    {
        $this->container['column'] = $column;
        return $this;
    }

    /**
    * Gets offset
    *  策略中与位置对应的偏移量，从0开始。
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 策略中与位置对应的偏移量，从0开始。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

