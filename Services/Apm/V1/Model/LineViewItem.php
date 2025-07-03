<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LineViewItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LineViewItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * function  表达式。
    * as  作为。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'function' => 'string',
            'as' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * function  表达式。
    * as  作为。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'function' => null,
        'as' => null
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
    * function  表达式。
    * as  作为。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'function' => 'function',
            'as' => 'as'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * function  表达式。
    * as  作为。
    *
    * @var string[]
    */
    protected static $setters = [
            'function' => 'setFunction',
            'as' => 'setAs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * function  表达式。
    * as  作为。
    *
    * @var string[]
    */
    protected static $getters = [
            'function' => 'getFunction',
            'as' => 'getAs'
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
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['as'] = isset($data['as']) ? $data['as'] : null;
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
    * Gets function
    *  表达式。
    *
    * @return string|null
    */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
    * Sets function
    *
    * @param string|null $function 表达式。
    *
    * @return $this
    */
    public function setFunction($function)
    {
        $this->container['function'] = $function;
        return $this;
    }

    /**
    * Gets as
    *  作为。
    *
    * @return string|null
    */
    public function getAs()
    {
        return $this->container['as'];
    }

    /**
    * Sets as
    *
    * @param string|null $as 作为。
    *
    * @return $this
    */
    public function setAs($as)
    {
        $this->container['as'] = $as;
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

