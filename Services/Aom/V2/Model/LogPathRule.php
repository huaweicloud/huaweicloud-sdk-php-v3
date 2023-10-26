<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogPathRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogPathRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * args  命令行。
    * nameType  取值类型。 cmdLineHash
    * value  日志路径。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'args' => 'string[]',
            'nameType' => 'string',
            'value' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * args  命令行。
    * nameType  取值类型。 cmdLineHash
    * value  日志路径。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'args' => null,
        'nameType' => null,
        'value' => null
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
    * args  命令行。
    * nameType  取值类型。 cmdLineHash
    * value  日志路径。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'args' => 'args',
            'nameType' => 'nameType',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * args  命令行。
    * nameType  取值类型。 cmdLineHash
    * value  日志路径。
    *
    * @var string[]
    */
    protected static $setters = [
            'args' => 'setArgs',
            'nameType' => 'setNameType',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * args  命令行。
    * nameType  取值类型。 cmdLineHash
    * value  日志路径。
    *
    * @var string[]
    */
    protected static $getters = [
            'args' => 'getArgs',
            'nameType' => 'getNameType',
            'value' => 'getValue'
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
        $this->container['args'] = isset($data['args']) ? $data['args'] : null;
        $this->container['nameType'] = isset($data['nameType']) ? $data['nameType'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['args'] === null) {
            $invalidProperties[] = "'args' can't be null";
        }
        if ($this->container['nameType'] === null) {
            $invalidProperties[] = "'nameType' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
    * Gets args
    *  命令行。
    *
    * @return string[]
    */
    public function getArgs()
    {
        return $this->container['args'];
    }

    /**
    * Sets args
    *
    * @param string[] $args 命令行。
    *
    * @return $this
    */
    public function setArgs($args)
    {
        $this->container['args'] = $args;
        return $this;
    }

    /**
    * Gets nameType
    *  取值类型。 cmdLineHash
    *
    * @return string
    */
    public function getNameType()
    {
        return $this->container['nameType'];
    }

    /**
    * Sets nameType
    *
    * @param string $nameType 取值类型。 cmdLineHash
    *
    * @return $this
    */
    public function setNameType($nameType)
    {
        $this->container['nameType'] = $nameType;
        return $this;
    }

    /**
    * Gets value
    *  日志路径。
    *
    * @return string[]
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string[] $value 日志路径。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

