<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppNameRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppNameRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nameType  取值类型。从cmdLineHash、cmdLine、env、str里面选取。
    * args  输入值。
    * value  服务名(仅nameType为cmdLineHash时填写)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nameType' => 'string',
            'args' => 'string[]',
            'value' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nameType  取值类型。从cmdLineHash、cmdLine、env、str里面选取。
    * args  输入值。
    * value  服务名(仅nameType为cmdLineHash时填写)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nameType' => null,
        'args' => null,
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
    * nameType  取值类型。从cmdLineHash、cmdLine、env、str里面选取。
    * args  输入值。
    * value  服务名(仅nameType为cmdLineHash时填写)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nameType' => 'nameType',
            'args' => 'args',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nameType  取值类型。从cmdLineHash、cmdLine、env、str里面选取。
    * args  输入值。
    * value  服务名(仅nameType为cmdLineHash时填写)。
    *
    * @var string[]
    */
    protected static $setters = [
            'nameType' => 'setNameType',
            'args' => 'setArgs',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nameType  取值类型。从cmdLineHash、cmdLine、env、str里面选取。
    * args  输入值。
    * value  服务名(仅nameType为cmdLineHash时填写)。
    *
    * @var string[]
    */
    protected static $getters = [
            'nameType' => 'getNameType',
            'args' => 'getArgs',
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
        $this->container['nameType'] = isset($data['nameType']) ? $data['nameType'] : null;
        $this->container['args'] = isset($data['args']) ? $data['args'] : null;
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
        if ($this->container['nameType'] === null) {
            $invalidProperties[] = "'nameType' can't be null";
        }
        if ($this->container['args'] === null) {
            $invalidProperties[] = "'args' can't be null";
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
    * Gets nameType
    *  取值类型。从cmdLineHash、cmdLine、env、str里面选取。
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
    * @param string $nameType 取值类型。从cmdLineHash、cmdLine、env、str里面选取。
    *
    * @return $this
    */
    public function setNameType($nameType)
    {
        $this->container['nameType'] = $nameType;
        return $this;
    }

    /**
    * Gets args
    *  输入值。
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
    * @param string[] $args 输入值。
    *
    * @return $this
    */
    public function setArgs($args)
    {
        $this->container['args'] = $args;
        return $this;
    }

    /**
    * Gets value
    *  服务名(仅nameType为cmdLineHash时填写)。
    *
    * @return string[]|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string[]|null $value 服务名(仅nameType为cmdLineHash时填写)。
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

